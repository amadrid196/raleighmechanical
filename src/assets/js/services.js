const home = {
  data () {
    return {
      services: [
        { titulo: 'Multifamily' },
        { titulo: 'Residential' },
        { titulo: 'Light Commercial' },
        { titulo: 'On-call service' }
      ]
    }
  }
}

Vue.createApp(home).mount('#home')
