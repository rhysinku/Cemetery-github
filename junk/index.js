locations = [
  ["Rhysin Burial",
  9.88201149587543,
  123.608457020228,
  "coffin.svg",
  "<p>Rhysin Villahermosa </p> <p>2000-2021 </p>  <p>Died of: WORKING OF CAPSTONE </p>   <p>Age: 21</p>  <p>Motto: Di na jud ko</p>"
  ],

  ["Mark Burial",
  9.882400507953024,
  123.60865738064705,
  "coffin.svg",
  "<p>Mark Mamalias </p> <p>1869-2021 </p>  <p>Died of: Wa kabalik gikan Manila </p>   <p>Age: 26</p>  <p>Motto: lets go!</p>"
  ],

  ["Test",
  9.88225382633879,
  123.60932822895721,
  "coffin.svg",
  "<p>Test </p> <p>1869-2021 </p>  <p>Died of: Wa kabalik gikan Manila </p>   <p>Age: 26</p>  <p>Motto: lets go!</p>"
  ],
];



// WHOLE MAP

function initMap() {
    //9.882171140855156,123.60879446936325 map

    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat:9.882171140855156, lng:123.60879446936325},
      zoom: 20,
     mapTypeControl: false,
     streetViewControl: false,
      mapId: 'e50bebc5c429891e'
    });

    // many location Name, LatLong, SVG

   

    for (i = 0 ; i < locations.length; i++)
    { 
        currlocation = locations[i];
    
       const marker = new google.maps.Marker({
            position: { lat:currlocation[1], lng:currlocation[2]},
            map,
            title: currlocation[0],
            icon: { url:"coffin.svg",
                     scaledSize: new google.maps.Size (38,31)}
          });
            
         const infowindow = new google.maps.InfoWindow({
            content: currlocation[4],
          });
        
          marker.addListener("click", () => {
            infowindow.open(map,marker);
            map.panTo(marker.getPosition(), 3000);
            map.setZoom(50);
            map.setCenter(marker.getPosition());

            });
    }

     // tell lat long
 
  map.addListener("click", event => {
    const lati = event.latLng.lat()
    const long = event.latLng.lng()
    const position = event.latLng
    console.log(lati);
    console.log(long);
    var la = lati.toString();
    var lo = long.toString(); //
    document.getElementById("displaylati").innerHTML = la;
    document.getElementById("displaylong").innerHTML = lo;

  });

}


function AddMarker(){
  document.getElementById("add").innerHTML = "Cancel";

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
  });
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
      position: location, 
      map: map
  });
  map.setCenter(location);
}



//jquery
   