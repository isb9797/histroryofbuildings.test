//Данный файл управляет картой: поиск инфы, а также отображение элементов из БД

//Глобальный ассоциативный массив для формирования маркеров


      var customLabel = {
          brige: {
            label: 'М'
          },
          house: {
            label: 'Д'
          },
          monument: {
            label: 'П'
          }
      };



       function initMap() {
       var map = new google.maps.Map(document.getElementById('mainMap'), {
         center: new google.maps.LatLng(59.934293, 30.316584),
         zoom: 12,
         mapTypeControl: false,
         panControl: false,
         zoomControl: false,
         streetViewControl: false
       });

       var infoWindow = new google.maps.InfoWindow;

         // Change this depending on the name of your PHP or XML file

         downloadUrl('../php/main.php', function(data) {
           var xml = data.responseXML;
           var markers = xml.documentElement.getElementsByTagName('marker');



           Array.prototype.forEach.call(markers, function(markerElem) {
             var name = markerElem.getAttribute('name');
             var address = markerElem.getAttribute('address');
             var type = markerElem.getAttribute('type');
             var point = new google.maps.LatLng(
                 parseFloat(markerElem.getAttribute('lat')),
                 parseFloat(markerElem.getAttribute('lng')));

             var infowincontent = document.createElement('div');
             var strong = document.createElement('strong');
             strong.textContent = name
             infowincontent.appendChild(strong);
             infowincontent.appendChild(document.createElement('br'));

             var text = document.createElement('text');
             text.textContent = address
             infowincontent.appendChild(text);
             var icon = customLabel[type] || {};
             var marker = new google.maps.Marker({
               map: map,
               position: point,
               label: icon.label
             });
             marker.addListener('click', function() {
               infoWindow.setContent(infowincontent);
               infoWindow.open(map, marker);
             });
           });


         });


         //Кластеризация

       }



     function downloadUrl(url, callback) {
       var request = window.ActiveXObject ?
           new ActiveXObject('Microsoft.XMLHTTP') :
           new XMLHttpRequest;

       request.onreadystatechange = function() {
         if (request.readyState == 4) {
           request.onreadystatechange = doNothing;
           callback(request, request.status);
         }
       };

       request.open('GET', url, true);
       request.send(null);
     }

     function doNothing() {}






//     center: {lat: 59.946317, lng: 30.318262},
