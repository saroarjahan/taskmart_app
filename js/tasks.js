//Get All events, update event, delete event
var app = new Vue({
  el: '#appEvents',

  data: {
    title:null, 
    info:null,
    host:location.hostname,
    userId:null,
    userImage:null,
    imageShow:false,
    loginUrl:'http://'+location.hostname+"/auth/login.php",
    loginStatus:"Login",
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

//Get usaer ID
setTimeout(function(){ 
  app.userId=document.getElementById('uniqueId').innerHTML;
  app.userId=app.userId.substring('google-oauth2|'.length);
  app.userImage=document.getElementById('proImage').src;
  if (app.userId) {
    app.loginUrl='http://'+location.hostname+"/auth/logout.php";
    app.loginStatus="LogOut";
    app.imageShow=true;
  }
}, 300);
google-oauth2|105040559998408601994

