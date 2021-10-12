<template>
  <div class="about">
    <div class="jumbotron m-0 historia pb-0">
        <div class="row text-center">
            <div class="col-12 col-md-6 align-self-center">
                <h3 class="h7 pt-5 pt-5 pt-md-5 pb-md-3 text-warning"><strong>Relaigh Mechanical</strong></h3>
                <h6 class="text-about">
                    We are a company formed by experts in the field of air conditioning,
                    with many years of individual experience, we decided to join our talent
                    and knowledge to form Raleigh Mechanical and offer our customers a complete
                    and guaranteed service under mechanical license and all the necessary
                    quality standards.
                </h6>
            </div>
            <div class="col-12 col-md-6 mt-5">
              <img src="http://prohauz.bold-themes.com/air-condition/wp-content/uploads/sites/4/2018/10/team_01.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="h7">Our Team of Experts</h1>
        <hr class="my-2">
        <p class="lead">
          <a class="btn btn-warning btn-lg" href="#abouts" role="button">More info</a>
        </p>
      </div>
    </div>
    <div class="jumbotron m-0 bg-white" id="abouts">
        <div class="row" >
            <div class="col-12 col-md-4" v-for="about in abouts" v-bind:key="about.name">
                <div class="card card-x shadow mb-5">
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
  name: 'About',
  data () {
    return {
      abouts: [
        {
          titulo: 'Chief Executive Officer (CEO)',
          img: '/img/our-team-relaighmechanicalc.jpeg',
          name: 'Fernando Mercado'
        },
        {
          titulo: 'Operations Manager (COO)',
          img: '/img/our-team-relaighmechanicalc.jpeg',
          name: 'Andrew Williams'
        },
        {
          titulo: 'Silent Partner',
          img: '/img/our-team-relaighmechanicalc.jpeg',
          name: 'Preston Bunn'
        }
      ]
    }
  }
}
</script>
