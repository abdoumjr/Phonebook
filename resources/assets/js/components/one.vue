<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" src="./abdoumjr.png">
      <img src="/abdoumjr.png" alt="Bulma: a modern CSS framework based on Flexbox" width="100" height="120">
    </a>

 <div class="navbar-menu is-active">
   ABDOUMJR
  <a class="navbar-item"  ></a>
 </div>


  </div>
  <div v:bind="name"> </div>
</nav>

</template>


<script>
 export default {
   props : ['name'],


 }
</script>
