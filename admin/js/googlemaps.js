$(document).ready(function() {

        var myCenter=new google.maps.LatLng(45.992261, -123.925014);
        var marker=new google.maps.Marker({
            position:myCenter
        });

        function initialize() {
          var mapProp = {
              center:myCenter,
              zoom: 14,
              draggable: false,
              scrollwheel: false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
          };

          var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
          marker.setMap(map);

          google.maps.event.addListener(marker, 'click', function() {

            infowindow.setContent(contentString);
            infowindow.open(map, marker);

          }); 
        };

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            initialize();
        });

    });