<template >
  <div class="modal" :class="openmodalshow">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">show</p>
        <button class="delete" aria-label="close" v-on:click="clossed"></button>
      </header>

      <section class="modal-card-body">
          <hr>
      <strong>First name:</strong>
      <span class="tag is-primary is-large">{{list.firstname}}</span>
        <hr>
      <strong>Last name:</strong>
      <span class="tag is-primary is-large ">{{list.lastname}}</span>
        <hr>
      <strong>Number:</strong>
      <span class="tag is-primary is-large">{{list.number}}</span>
        <hr>
      <strong>Email@:</strong>
      <span class="tag is-primary is-large">{{list.email}}</span>
        <hr>

      <strong>Location:</strong>
      <span class="tag is-primary is-large">{{list.location}}</span>

      </section>
      <footer class="modal-card-foot">
        <button class="button" v-on:click="clossed">Cancel</button>
      </footer>
    </div>
  </div>

</template>


<script>
export default {
  props : ['openmodalshow','id'],
  data() {
    return {
    list: [],
  }
  },
  methods: {


clossed: function() {
  this.$emit('closeRequest');
},
  },
}

</script>
