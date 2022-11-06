function iniciarMap(){
    var coord = {lat:20.034722 ,lng: -99.3298552};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}