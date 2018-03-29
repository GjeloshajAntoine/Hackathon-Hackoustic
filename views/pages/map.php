<?php include '../partials/header.php' ?>

<div id="map" style="height:550px;width:50%;"></div>

<script type="text/javascript">
  $.ajax({
    url:'https://api.irisnetlab.be:443/api/happyears/0.1.0/places',
    headers:{
      Authorization:'Bearer 1b67da63-e6d8-3ad9-aed0-cc7d1cd91618',
      Accept:"application/json"
    }
  }).done(function (data) {
    console.log(data);
    for (coord of data.features) {
      console.log(coord.geometry.coordinates);
      console.log({lat: coord.geometry.coordinates[1], lng: coord.geometry.coordinates[0]});
      var marker = new google.maps.Marker({
        position: {lat: parseFloat(coord.geometry.coordinates[1]), lng: parseFloat(coord.geometry.coordinates[0])},
        map: window.map
      });
    }
  });

  function initMap() {
    var center = {lat: 50.8455124, lng: 4.3552839};
     window.map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: center
    });
    var marker = new google.maps.Marker({
      position: center,
      map: map
    });
  }

</script>

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH957nUQiCtu1McwPxpBbx9ABbBu4aXdg&callback=initMap">
</script>

<?php include '../partials/footer.php' ?>
