<template>
  <div class="about">
    <div class="jumbotron m-0 historia pb-0">
        <div class="row text-center">
            <div class="col-12 col-md-6 align-self-center">
                <h6 class="text-about">
                    We are a company formed by experts in the field of air conditioning,
                    with many years of individual experience, we decided to join our talent
                    and knowledge to form Raleigh Mechanical and offer our customers a complete
                    and guaranteed service under mechanical license and all the necessary
                    quality standards.
                </h6>
            </div>
            <div class="col-12 col-md-6">
              <img src="http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/team_01.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="h7">Our Team of Experts</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
      </div>
    </div>
    <div class="jumbotron m-0 bg-white">
        <div class="row">
            <div class="col-12 col-md-4" v-for="about in abouts" :key="about">
                <div class="card card-z shadow mb-5">
                        <div class="card-header p-0">
                          <img class="img-fluid" :src="about.img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{about.titulo}}</h5>
                            <p class="card-text">{{about.name}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron m-0 proyect">
        <h1 class="display-4 text-center text-white pb-4">Our Proyect</h1>
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card card-z shadow">
                        <div class="card-header p-0">
                          <img class="img-fluid" src="img2.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Content</p>
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
    }

    @media (max-width: 768px) {
      .text-about{
        font-size: 1rem;
      }
    }
</style>
<script>
export default {
  name: 'About',
  data () {
    return {
      abouts: [
        {
          titulo: 'Operations Manager (CEO)',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_11.jpg',
          name: 'Andrew Williams'
        },
        {
          titulo: 'Chief Executive Officer (CEO)',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_12.jpg',
          name: 'Fernando Mercado'
        },
        {
          titulo: 'Silent Partner',
          img: 'http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/inner_13.jpg',
          name: 'Preston Bunn'
        }
      ]
    }
  }
}
</script>
