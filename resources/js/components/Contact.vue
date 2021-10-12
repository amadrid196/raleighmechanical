<template>
<div class="">
    <div class="jumbotron jumbotron-fluid backg">
      <div class="container mt-5 pt-5">
        <div class="container p-md-3 m-md-5"></div>
        <h1 class="h7 text-white">Contact US</h1>
        <hr class="my-2">
        <p class="lead">
          <a class="btn btn-dark btn-lg" href="#contact" role="button">More info</a>
        </p>
      </div>
    </div>

    <div class="jumbotron mb-0">
        <div class="container mt-1 p-0"></div>
        <h1 class="h7 text-center mt-5">We are licensed to cover the areas of North Carolina, South Carolina and Virginia.</h1>
    </div>

    <div class="jumbotron m-0 p-md-2 p-0" id="contact">
        <div class="row m-0">
            <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.3178514178167!2d-78.62160308474351!3d35.595225280214514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac625657b981bb%3A0xdb87ceeae8ea8909!2s6605%20Winterton%20Dr%2C%20Raleigh%2C%20NC%2027603%2C%20EE.%20UU.!5e0!3m2!1ses!2shn!4v1632254863723!5m2!1ses!2shn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-12 col-md-6 office text-white p-5">
                <form id="contactform">
                  <div class="form-row">
                    <div class="form-group col-12 col-md-6 ml-md-6">
                      <input v-model="params.firstName" type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group col-12 col-md-6 ml-md-6">
                      <input v-model="params.lastName" type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="form-group col-12 col-md-6">
                      <input v-model="params.email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-12 col-md-6">
                      <input v-model="params.phone" type="phone" class="form-control" id="inputPhone" placeholder="Phone">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea v-model="params.quest"  type="text" class="form-control" name="consulta" id="consulta" placeholder="How can you help?" rows="3"></textarea>
                    </div>
                  </div>

                </form>
                <div class="d-flex justify-content-center mt-6 mb-6 ">
                    <button @click="send" class="btn btn-dark btn-lg btn-block" style="float:center;" >
                            SEND
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
</template>
<style lang="scss">
.backg{
        background-image: url('/img/contact-raleighmechanical.png');
      background-size: cover;
      background-position: 50% 0px;
      background-attachment: fixed;
      z-index: 1;
}

</style>
<script>
export default {
  data () {
    return {
      params: {
        lastName: '',
        firstName: '',
        email: '',
        phone: '',
        quest: ''

      }
    }
  },
  methods: {
    send: function () {
    var url = "/contacto/PostContacto";
      axios
        .post(url, {
          lastName: this.params.lastName,
          firstName: this.params.firstName,
          email: this.params.email,
          phone: this.params.phone,
          quest: this.params.quest
        })
        .then((response) => {
            console.log(response)
        });
    }
  }

}
</script>
