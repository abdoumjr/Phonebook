<template >
<div class="column is-three-fifths is-offset-one-fifth">
  <nav class="panel column is-primary" >
  <p class="panel-heading">
    MY CONTATCTS
    <!-- <button class="button is-link is-ou*tlined is-focused is-centered" v-on:click="activated">
      ADD NEW
    </button> -->

  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-big has-text-primary" type="text" placeholder="search" v-model="searchQuery" >
      <span class="icon is-small is-left">
        <i class="fa fa-search"></i>
      </span>
    </p>
  </div>



  <div class="panel-block is-active has-icon"  v-for="(dat,key) in temp">
<p class="control has-icon">
    <span class="panel-icon">
        <i class="fa fa-book"></i>
      </span>


 {{dat.firstname}}, {{dat.lastname}}... {{dat.number}}

</p>
  <button class="button is-big  is-primary is-outlined is-focus " v-on:click="openshow(key)">Show</button>
  <button class="button is-big  is-info is-outlined is-focus" v-on:click="openupdate(key)" >Edit</button>
  <button class="button is-big  is-danger is-outlined is-focus" v-on:click="deletedata(key,dat.id)">Delete</button>

</div>




  <div class="panel-block">

    <button class="button is-link is-outlined is-fullwidth" v-on:click="openadd()">
      ADD NEW CONTACT
    </button>
  </div>
</nav>


<add :openmodaladd="add" @closeRequest="clossed"></add>
<show :openmodalshow="show" @closeRequest="clossed"  ></show>
<update :openmodalupdate="update" @closeRequest="clossed"  ></update>
</div>


</template>


<script>
 let add = require('./add.vue');
 let show = require('./show.vue');
 let update = require('./update.vue');
  export default {
    components: {add,show,update},


    data (){
    return {
    add: '',
    show: '',
    update:'',
    data: {},
    searchQuery : '',
    temp : '',
      }
     },
    methods: {
      openadd: function(){
        this.add = 'is-active';
        console.log(add);
      },
      openshow: function(key){
        this.show = 'is-active';
        console.log(show);
         this.$children[1].list = this.data[key];
      },
      openupdate: function(key){
        this.update = 'is-active';
        console.log(update);
        this.$children[2].list = this.data[key];
      },
      clossed: function() {
        this.add = '';
        this.show = '';
        this.update = '';
      },


      getdata: function() {
         var that = this;
                axios.get('/getdata')
               .then(function (response) {
                 console.log(response);
                 console.log('axios is working')
                 that.data = that.temp =  response.data;
               })
               .catch(function (error) {
                 console.log(error);
               });
      },

      deletedata: function(key,id,data) {
        var that = this;
        if (confirm("are you sure")) {
        axios.get(`/deletedata/`+id)
       .then(function (response) {
         console.log(response);
          console.log(key);
           console.log(id);
          that.data.splice(key,1);
       })
       .catch(function (error) {
         console.log(error);
       });
      }
    }
    },

    mounted() {
      this.getdata();
    },
    watch:{
    			searchQuery(){
    				if (this.searchQuery.length > 0) {
    					this.temp = this.data.filter((item) => {
    						return Object.keys(item).some((key)=>{
    							let string = String(item[key])
    							return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
    							 console.log(this.temp)
    						})
    					});
    				}else{
    					this.temp = this.data
    				}
    			}
    		},
  }
</script>
