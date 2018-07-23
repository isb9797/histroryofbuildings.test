function initMap() {
  
  var myLatlng = new google.maps.LatLng(59.934293, 30.316584);
  var map = new google.maps.Map(document.getElementById('mainAddMap'), {
    center: new google.maps.LatLng(59.934293, 30.316584),
    zoom: 10,
    mapTypeControl: true,
    panControl: false,
    zoomControl: true,
    streetViewControl: false
  });

  // Place a draggable marker on the map

  // var marker = new google.maps.Marker({
  //     position: myLatlng,
  //     map: map,
  //     draggable:true,
  //     title:"Drag me!"
  // });

  var marker;

  
  function placeMarker(location) {
   if ( marker ) {
     marker.setPosition(location);
   } else {
     marker = new google.maps.Marker({
       position: location,
       map: map,
       draggable:true
     });
   }

  }

  google.maps.event.addListener(map, 'click', function(event) {
   placeMarker(event.latLng);
  });


  
}
