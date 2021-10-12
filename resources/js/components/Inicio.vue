<template>
  <div class="home">
    <div class="jumbotron fondo mb-0 vh-100 text-center text-md-left">
        <div class="container p-md-5 m-md-5 mt-5 pt-5"></div>
        <h1></h1>
        <h3 class="h7 pt-5 pt-5 pt-md-5 pl-md-5 text-warning"><strong>Relaigh Mechanical</strong></h3>
        <h3 class="h7 pl-md-5 text-secondary ">Air Conditioning</h3>
            <router-link to="/contact" class="btn btn-warning ml-md-5">REQUEST SERVICE</router-link>
    </div>

    <services/>

    <div class="jumbotron mb-0 pt-0 p-md-5">
        <div class="container mt-md-5 p-md-5"></div>
        <h1 class="h7 text-center mt-md-5">We are licensed to cover the areas of North Carolina, South Carolina and Virginia.</h1>
    </div>

    <div class="jumbotron m-0 p-0">
        <div class="row m-0">
            <div class="col-12 col-md-6 office text-white p-5">
                <h1 class="card-title">Our Office
                </h1>
                <p class="card-text">Our company provides warehousing<br>
                    and distribution from our HQ.</p>
                    <div class="row pt-5 pb-5">
                        <div class="col-12 col-md-6 pb-3">
                            <h3>WORKING HOURS</h3>
                            <p>Mon - Sat 8.00 - 18.00</p>
                        </div>
                        <div class="col-12 col-md-6 pb-3">
                            <h3>LOCATION</h3>
                            <p>6605 winterton dr, Raleigh North Carolina 27603.</p>
                        </div>
                         <div class="col-12 col-md-6 pb-3">
                            <h3>WORKING HOURS</h3>
                            <p>Mon - Sat 8.00 - 18.00</p>
                        </div>
                        <div class="col-12 col-md-6 pb-3">
                            <h3>LOCATION</h3>
                            <p>6605 winterton dr, Raleigh North Carolina 27603.</p>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-md-6 p-md-0">
              <div class="map-resposive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.3176746154318!2d-78.62160308547412!3d35.59522964229252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac625657b981bb%3A0xdb87ceeae8ea8909!2s6605%20Winterton%20Dr%2C%20Raleigh%2C%20NC%2027603%2C%20EE.%20UU.!5e0!3m2!1ses!2shn!4v1631815547898!5m2!1ses!2shn" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
        </div>
    </div>
  </div>
</template>
<script>
import Services from './services.vue'
export default {
  components: {
    Services
  }
}
</script>
