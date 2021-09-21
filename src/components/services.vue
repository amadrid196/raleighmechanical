<template>
  <div id="services">
    <div class="jumbotron mb-0">
        <div class="row">
            <div class="col-12 col-md-3" v-for="service in services" :key="service">
                <div class="card card-z shadow mb-5">
                        <div class="card-header p-0">
                          <img class="img-fluid" :src="service.img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{service.titulo}}</h5>
                            <router-link to="/services" class="nav-item nav-link">Ver más</router-link>
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
        { titulo: 'Multifamily', img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_11.jpg' },
        { titulo: 'Residential', img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_12.jpg' },
        { titulo: 'Light Commercial', img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_13.jpg' },
        { titulo: 'On-call service', img: '/assets/img/On-call-service.png' }
      ]
    }
  }
}
</script>
