<template>
  <div>
      <div class="jumbotron m-0 service text-white text-center">
        <h1 class="pb-5 mb-5 pt-5 mt-5">Our Services</h1>
    </div>

    <div class="jumbotron m-0 p-0" v-for="service in services" :key="service">
        <div class="row m-0">
            <div class="col-12 col-md-6" :class="service.order">
                <img class="img-fluid" :src="service.img" alt="">
            </div>
            <div :class="service.order_img" class="col-12 col-md-6">
                <div class="container pt-md-5 mt-md-5 pb-5">
                    <h1 class="pt-5">{{service.titulo}}</h1>
                    <p>
                      {{service.content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'Service',
  data () {
    return {
      services: [
        {
          titulo: 'Multifamily',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_11.jpg',
          content: 'Installation and maintenance service of air conditioning systems in apartment complexes.',
          order_img: 'order-md-1',
          order: 'order-md-2'
        },
        {
          titulo: 'Residential',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_12.jpg',
          content: 'Installation and maintenance service of air conditioning systems in individual residences.',
          order_img: 'order-md-2',
          order: 'order-md-1'
        },
        {
          titulo: 'Light Commercial',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_13.jpg',
          content: 'Installation and maintenance service of air conditioning systems in small businesses, with units under 15 tons.',
          order_img: 'order-md-1',
          order: 'order-md-2'

        },
        {
          titulo: 'On-call service',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_service_03.jpg',
          content: 'We have a technical team prepared to attend repair or maintenance requests in Residential, Multifamily or Light Commercial.',
          order_img: 'order-md-2',
          order: 'order-md-1'

        }
      ]
    }
  }
}
</script>
