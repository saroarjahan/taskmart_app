//Get All events, update event, delete event
var app = new Vue({
  el: '#appEvents',

  data: {
    title:'',
    info:'',
    rewards:'',
    task_secretes:[],
    totalReward:0,
    avatar:true,
    host:location.hostname,
    userId:'',
    userIdFull:'',
    userImage:'',
    imageShow:false,
    loginUrl:'http://'+location.hostname+"/auth/login.php",
    path:'php',
    file:'gettasks.',
    file2:'getRewards.',
    type:'php',
    url:'http://'+location.hostname,
    loginStatus:"Login",
    adminLogin:false,
    access:'Sorry You do not have any access in this page !!',
    warnimg:'../static/css/image/warning.png',
    view:false,
    complete:'completed',
  },
  mounted () {
      //Get User ALl events druing initial load
      axios
      .get('http://'+this.host+'/'+this.path+'/'+this.file+this.type)
      .then(response => (this.info = response));
      axios
      .get('http://'+this.host+'/'+this.path+'/'+this.file2+this.type)
      .then(response => (this.rewards = response));
  },

  computed: {
    rewardCal: function (){

      for (x in this.rewards.data ){
        
        if(this.rewards.data[x].user_id == this.userIdFull){
          this.totalReward += parseInt(this.rewards.data[x].reward);
          this.task_secretes.push(this.rewards.data[x].task_secrete);
        }
      }
    }

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
  app.view=true;
  app.userId=document.getElementById('uniqueId').innerHTML;
  app.userIdFull=app.userId;
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
      app.warnimg=null;
    }
  }
}, 200);

