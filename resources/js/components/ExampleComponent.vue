<template>
  <div id="nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow container pl-5 pr-5 pb-5 pt-5 navbar-center">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" alt="" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <router-link to="/" class="nav-item nav-link">Home</router-link>
            <router-link to="/services" class="nav-item nav-link">Services</router-link>
            <router-link to="/proyect" class="nav-item nav-link">Proyect</router-link>
            <router-link to="/contact" class="nav-item nav-link">Contact</router-link>
            <router-link to="/about" class="nav-item nav-link">About</router-link>
          </div>
        </div>
    </nav>

  </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss">
#app {
  font-family: Montserrat,Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

//mapa responsive
frame{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;

}

iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;

}

//Raleighmechanical
strong{
  font-weight: bold !important;
}
.office{
      background-image: url(http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_office.jpg);
      background-position: 50% -36.0843px;
}

.jumbotron {
    border-radius: 0rem;
}

/* Escritorio */
@media (min-width: 769px) {

  #nav {
    padding: 30px;
    text-transform: uppercase;

    a {
      font-weight: bold;
      color: #2c3e50;

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }

  .h7{
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
  }

  .navbar-center{
      position: absolute;
      left: 50%;
      transform: translatex(-50%);
  }

  .fila-center{
      position: absolute;
      left: 50%;
      transform: translatex(-50%);
      z-index: 1;
  }

  .fondo{
      background-image: url(http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/background_air_condition_01.jpg);
      background-size: cover;
      background-position: 50% 0px;
      background-attachment: fixed;
      z-index: 1;
  }

  .card-z{
    position: absolute;
    z-index: 2;
    margin-top: -8rem;
  }

}

/*Celular */
@media (max-width: 768px) {
  .h7{
    font-size: 1.5rem;
    font-weight: 300;
    line-height: 1.2;
  }

  .fondo{
      background-image: url(http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/background_air_condition_01.jpg);
      background-size: cover;
      background-position: 72% 0px;
      background-attachment: fixed;
      z-index: 1;
  }

}
</style>
