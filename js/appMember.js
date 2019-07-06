//Get All member, update member, delete member
var app = new Vue({
  el: '#app',
  data: {
    username:null, 
    password:null,
    email:null, 
    first_name:null, 
    last_name:null,
    role:null, 
    phone_number:null,
    info:null,
    memberHandle:null,
    ok:false,
    awesome:false,
    deleteMesage:null,
    deleteMesages:null,
    addMem:false,
    message:null,
    randomHandle:null,
    ok:false,
    mainUrl:"http://127.0.0.1:5000",//Home url
  },
  mounted () {
    //Get ALl Members
	    axios
      .get(this.mainUrl+'/api/users/')
      .then(response => (this.info = response));
  },
  methods: {
      //Get ALl individual Members Details, url dynamically getting from controll 
      viewMember: function (handle) {
      axios
        .get(this.mainUrl+handle)
        .then(response => (this.memberHandle = response.data));
        this.awesome=true;
        this.deleteMesages=null;     
      },
      //Add new member to api/users/ by sending post resquest 
      viewMemberAdd: function () {
        this.message=null;
        this.randomHandle=Math.random();
        axios
        .post(this.mainUrl+'/api/users/',{
            "username": this.username,
            "handle": this.randomHandle,
            "password":this.password,
            "email":this.email,
            "first_name":this.first_name,
            "last_name":this.last_name,
            "role":this.role,
            "phone_number":this.phone_number
          })
        .then(response => (this.message = response.statusText));
        if(this.message=="CREATED"){
          this.message="Created Successfully";
        }
        else{
          this.message="Not Created Successfully";
        }
        this.awesome=false;
      },
      //Update  member details  to api/users/<userhandle>  by sending put resquest 
      viewMemberUpdate:function(handle){
        this.message=null;
          if (this.username!="" && this.email!=""){
              axios
              .put(this.mainUrl+handle, {
                "username": this.username,
                "handle": this.randomHandle,
                "password":this.password,
                "email":this.email,
                "first_name":this.first_name,
                "last_name":this.last_name,
                "role":this.role,
                "phone_number":this.phone_number
              })
              .then(response => (this.message = response.status));
              if(this.message==204){
                this.message="Update Successfully";
              }
              else{
                this.message="Not update Successfully";
              }
          }
      },
      //Delete member by sending delete request to api/users/<userhandle>
      viewMemberDelete: function (handle) {           
        try{
          axios
          .delete(this.mainUrl+handle);
          this.deleteMesages = "Delete Successfully";
          this.awesome=false;
        }
        catch(error){this.awesome=true;}
      },
      //this two fundtion is hdiding and showing element in template
      showAdd: function () {
        this.addMem=true;
      },      
      update: function (){
        this.ok=true;       
      }      
  },  
})





    