new Vue({
  el: '#ourProduct',
    data () {
      return {
        items: []
      }
    },
    mounted () {
      axios
        .get('https://praseetyaa.github.io/portfolio/assets/js/product.json')
        .then(response => (this.items = response))
    },

  methods: {
    homeSort: function(arr) {
      // Set slice() to avoid to generate an infinite loop!
      return arr.slice(1).sort(function(a, b) {
        return b.idClient - a.idClient;
      });
    },
    productSort: function(arr) {
      // Set slice() to avoid to generate an infinite loop!
      return arr.slice().sort(function(a, b) {
        return b.idClient - a.idClient;
      });
    }
  }
})