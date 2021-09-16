<template>
  <div id="services">
    <div class="jumbotron mb-0">
        <div class="row">
            <div class="col-3" v-for="service in services" :key="service">
                <div class="card card-z shadow">
                        <div class="card-header p-0">
                          <img class="img-fluid" src="img2.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{service}}</h5>
                            <p class="card-text">Content</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Services',
  data () {
    return {
      services: [
        'Multifamily',
        'Residential',
        'Light Commercial',
        'On-call service'
      ]
    }
  }
}
</script>
