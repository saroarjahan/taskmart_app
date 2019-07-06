//Get All events, update event, delete event
var app = new Vue({
  el: '#appEvents',
  data: {
    title:null, 
    info:null,
    host:location.hostname,
  },
  mounted () {
      //Get User ALl events druing initial load
      axios
      .get('http://'+this.host+'/php/gettasks.php')
      .then(response => (this.info = response));
  },

  methods: {
      
  },  
})

//javascript for navigation activate
$(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
});

