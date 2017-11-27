<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }



.row{
  text-align: center; 

}

.form-group{
  margin-top: 10px;
}

.form-control{
  font-size: 1.3em;
  color: #080808;
}

  </style>
  </head>
  <body>
    <h3>My Google Maps </h3>
    <div id="map"></div>
    <script>
     function initMap() {

var options ={ zoom:15,
 center: {lat: -1.3104, lng:  36.8144}

}
// new map

    var map = new google.maps.Map(document.getElementById('map'), options);


      // listen for click on map 

    
 
// array of markers

var markers = [
{coords:{lat: -1.3104, lng:  36.8144},
     // iconImage:' https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png ',
 content:'<p>  <h1> Agritech</h1> <h2> Madaraka, olegankoy line </h2> <p>'
      //content:'<h1> agritech/ strathmore </h1>'

  },
  /*

{coords: {lat: -1.3211, lng:  36.8147},
    content:'<p>  <h1> Agritech</h1> <h2> Madaraka, olegankoy line </h2> <p>'

  }, 

     {coords: {lat: -1.3227, lng:  36.9261}}

*/

];
 // loop through marker 

 for (var i=0; i< markers.length; i++)
 {

  // add marker

    addMarker(markers[i]) ;
       
 }



// add marker function
 function addMarker(props)
 {

 var marker = new google.maps.Marker({
          position:props.coords,
          map:map,

          // icon:props.iconImage
         
        });

 // check for customicon
 if (props.iconImage){
  // set icon image 

  marker.setIcon (props.iconImage);
 }

// check content 
          if(props.content) {
            var infoWindow = new google.maps.InfoWindow ({
            content: props.content
          }); 

    
          marker.addListener('click', function (){
            infoWindow.open(map, marker);
          });


          }

         } 
         
      }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyD9nEchYqQCEC11fx_wN52jWjiMZMAKK1k &callback=initMap">
    </script>  
    


    
  
  
  




    
  </body>
</html>