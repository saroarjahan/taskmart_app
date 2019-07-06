//Add Event
var app = new Vue({
  el: '#appAddEvents',
  data: {
    //variable data will get updated during from submission, intiall its null
    title:null, 
    author:"0",
    description:null, 
    start_time:"2019-05-16T00:00:00", 
    end_time:"2019-05-17T00:00:00",
    location:null, 
    message:null,
    randomHandle:null,
    mainUrl:"http://127.0.0.1:5000",//Home url
  },
  methods: {
      viewEventAdd: function () {//method for adding new event
        this.message=null;
        this.randomHandle=Math.random();
        axios
        //add new event to api/users/handle-0/events/ by using post method
        .post(this.mainUrl+'/api/users/handle-0/events/', {
          "title": this.title,
          "handle": this.randomHandle,
          "author":this.author,
          "description":this.description,
          "start_time":this.start_time,
          "end_time":this.end_time,
          "location":this.location})
        .then(response => (this.message = response.statusText));
        if(this.message=="CREATED"){
          this.message="Created Successfully";

        }else{
          this.message="Not Created Successfully";
        }
      }  
  },  
})
//google API auto location detection
//code Mdification obtain form  https://developers.google.com/maps/documentation/javascript/places-autocomplete
//origina funtion:
// var input = document.getElementById('autocomplete');
// var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
// google.maps.event.addListener(autocomplete, 'place_changed', function(){
//     ---do somting----
// })

var input = document.getElementById('autocomplete');
var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
google.maps.event.addListener(autocomplete, 'place_changed', function(){
    app.location=autocomplete.getPlace();
    app.location=autocomplete.getPlace().address_components[0].long_name;
})
