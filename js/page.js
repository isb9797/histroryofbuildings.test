//Данный файл управляет картой: поиск инфы, а также отображение элементов из БД

//Глобальный ассоциативный массив для формирования маркеров




       function initMap() {
       var map = new google.maps.Map(document.getElementById('pageMap'), {
         center: new google.maps.LatLng(59.934293, 30.316584),
         zoom: 12,
         mapTypeControl: false,
         panControl: false,
         zoomControl: false,
         streetViewControl: false
       });

      var infoWindow = new google.maps.InfoWindow;

       }



     
     function doNothing() {}






//     center: {lat: 59.946317, lng: 30.318262},
