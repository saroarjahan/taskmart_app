//Get All events, update event, delete event
var app = new Vue({
  el: '#appEvents',

  data: {
    title:null,
    info:null,
    avatar:true,
    host:location.hostname,
    userId:null,
    userImage:null,
    imageShow:false,
    loginUrl:'http://'+location.hostname+"/auth/login.php",
    path:'php',
    file:'gettasks.',
    type:'php',
    url:'http://'+location.hostname,
    loginStatus:"Login",
    adminLogin:false,
    access:"Sorry You do not have any access in this page",
  },
  mounted () {
      //Get User ALl events druing initial load
      axios
      .get('http://'+this.host+'/'+this.path+'/'+this.file+this.type)
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
setInterval(function(){ 
  app.userId=document.getElementById('uniqueId').innerHTML;
  app.userId=app.userId.substring('google-oauth2|'.length);
  app.userImage=document.getElementById('proImage').src;
  if (app.userId) {
    app.loginUrl='http://'+location.hostname+"/auth/logout.php";
    app.loginStatus="LogOut";
    app.imageShow=true;
    app.avatar=false;
    if(app.userId=="109346374245203627270"){
      app.adminLogin="109346374245203627270";
      app.access=null;
    }
  }
}, 10);

