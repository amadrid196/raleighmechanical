<template>
  <div class="about">
    <div class="jumbotron jumbotron-fluid">
      <div class="container mt-5 pt-5">
        <h1 class="h7">Our Proyects</h1>
        <hr class="my-2">
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#proyect" role="button">More info</a>
        </p>
      </div>
    </div>
    <div class="jumbotron m-0 bg-white">
        <div class="row" id="proyect">
            <div class="col-12 col-md-4" v-for="proyect in proyects" v-bind:key="proyect.titulo">
                <div class="card card-x shadow mb-5">
                        <div class="card-header p-0">
                          <img class="img-fluid" :src="proyect.img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{proyect.titulo}}</h5>
                            <p class="card-text">{{proyect.name}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</template>
<style lang="scss">
   .historia{
      background-image: url(http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/background_heating_08.jpg);
      background-position: 50% -73.7512px;
    }

    @media (min-width: 769px) {
      .text-about{
        font-size: 2rem;
      }

      .card-x{
        margin-top: -8rem;
      }
    }

    @media (max-width: 768px) {
      .text-about{
        font-size: 1rem;
      }
    }
</style>
<script>
export default {
  name: 'Proyect',
  data () {
    return {
      proyects: [
        {
          titulo: 'Proyecto 1',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_11.jpg',
          name: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys'
        },
        {
          titulo: 'Proyect 2',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_12.jpg',
          name: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
        },
        {
          titulo: 'Proyect 3',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_13.jpg',
          name: 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer'
        }
      ]
    }
  }
}
</script>
