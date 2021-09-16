<template>
  <div class="home">
    <div class="jumbotron fondo mb-0 vh-100">
        <div class="container p-5 m-5"></div>
        <h1 class="display-4 pt-5 pl-5">Title</h1>
        <a href="http://" class="btn btn-success ml-5 " target="_blank" rel="noopener noreferrer">REQUEST SERVICE</a>
    </div>

    <services/>

    <div class="jumbotron mb-0">
        <div class="container mt-5 p-5"></div>
        <h1 class="display-4 text-center mt-5">We are licensed to cover the areas of North Carolina, South Carolina and Virginia.</h1>
    </div>

    <div class="jumbotron m-0 p-0">
        <div class="row m-0">
            <div class="col-6 office text-white p-5">
                <h1 class="card-title">Our Office
                </h1>
                <p class="card-text">Our company provides warehousing<br>
                    and distribution from our HQ.</p>
                    <div class="row pt-5 pb-5">
                        <div class="col-6">
                            <h3>WORKING HOURS</h3>
                            <p>Mon - Sat 8.00 - 18.00</p>
                        </div>
                        <div class="col-6">
                            <h3>LOCATION</h3>
                            <p>6605 winterton dr, Raleigh North Carolina 27603.</p>
                        </div>
                         <div class="col-6">
                            <h3>WORKING HOURS</h3>
                            <p>Mon - Sat 8.00 - 18.00</p>
                        </div>
                        <div class="col-6">
                            <h3>LOCATION</h3>
                            <p>6605 winterton dr, Raleigh North Carolina 27603.</p>
                        </div>
                    </div>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
  </div>
</template>
<script>
import Services from '@/components/services.vue'
export default {
  name: Services,
  components: {
    Services
  }
}
</script>
