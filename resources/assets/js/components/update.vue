
  <template >

    <div class="modal" :class="openmodalupdate">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Add New Contact</p>
        <button class="delete" aria-label="close" v-on:click="clossed" ></button>
      </header>
      <section class="modal-card-body">


      <div class="field">
        <label class="label">First name</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="text" placeholder="firstname input" v-model="list.firstname">
          <span class="icon is-small is-left">
            <i class="fa fa-user"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-user"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label">Last name</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="text" placeholder="lastname input" v-model="list.lastname">
          <span class="icon is-small is-left">
            <i class="fa fa-user"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-check"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label">Number</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="email" placeholder="NUmber input"   v-model="list.number">
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-warning"></i>
          </span>

        </div>

      </div>

      <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="email" placeholder="email input"  v-model="list.email" >
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-warning"></i>
          </span>
        </div>

      </div>

      <div class="field">
        <label class="label">Location</label>
        <div class="control has-icons-left has-icons-right">
          <input class="input is-success" type="email" placeholder="Location input"  v-model="list.location">
          <span class="icon is-small is-left">
            <i class="fa fa-envelope"></i>
          </span>
          <span class="icon is-small is-right">
            <i class="fa fa-warning"></i>
          </span>
        </div>

      </div>

      <span v-for="er in ers" style="color: red;">
        {{er[0]}}  <br>
      </span>


      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" v-on:click="updatedata()" >Update </button>
        <button class="button" v-on:click="clossed">Cancel</button>
      </footer>
    </div>
  </div>

</template>
<script>
export default {
  props : ['openmodalupdate','id'],
  data (){
    return {
     list: {
         firstname:'',
         lastname: '',
         number: '',
         email: '',
         location: '',
       },
       data: [],
    ers: {},
 }
  },
  methods: {
    clossed: function() {
      this.$emit('closeRequest');
    },

   updatedata: function() {
     var that = this;
    axios.put('/updatedata',that.$data.list)
  .then(function (response) {
    console.log(response);
    console.log('update snet');
    that.$emit('closeRequest');
  })
  .catch(function (error) {
    console.log(error);
    that.ers = error.response.data.errors;
  });
 },

  },
}
</script>
