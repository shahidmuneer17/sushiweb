
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyvvHKG-mifH6LIBKneDnJXHnqlAPpuec&libraries=geometry,places"></script>
    <div class="row topbg" style="min-height: 800px; align-items: center; justify-content: space-around;">
      <div class="col-12">
         <div class="row opbg" style="align-items: center; justify-content: space-around; padding-top: 50px; padding-bottom: 50px;">
         <div class="col-md-4 text-center" style="max-width: 350px;"> 
        <h5 class="pmclr p-2">A EMPORTER</h5>
        <div class="select-box">
          <div class="select-box__current" tabindex="1">
          <div class="select-box__value">
              <input class="select-box__input" type="radio" id="2" value="2" name="Ben" checked="checked">
              <p class="select-box__input-text">Choisissez un restaurant</p>
            </div>  
          <div class="select-box__value">
              <input class="select-box__input" type="radio" id="0" value="1" name="">
              <p class="select-box__input-text">CENTRAL SUSHI Dijon</p>
            </div>
            <div class="select-box__value">
              <input class="select-box__input" type="radio" id="1" value="2" name="">
              <p class="select-box__input-text">CENTRAL SUSHI Besançon</p>
            </div>
            <div class="select-box__value">
              <input class="select-box__input" type="radio" id="4" value="5" name="">
              <p class="select-box__input-text">CENTRAL SUSHI </p>
            </div>
            <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true">
          </div>
          <ul class="select-box__list">
            
          <li>
              <label class="select-box__option" for="0" aria-hidden="true">CENTRAL SUSHI Dijon</label>
            </li>
            <li>
              <label class="select-box__option" for="1" aria-hidden="true">CENTRAL SUSHI Besancon</label>
            </li>
            <li>
              <label class="select-box__option" for="4" aria-hidden="true">CENTRAL SUSHI Belfort</label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 text-center " style="max-width: 350px;">        
        <h5 class="pmclr p-2">LIVRAISON</h5>
        <div class="input-container">
          <input type="text" id="map-address-input" placeholder="Entrez votre addresse...">
          <button onclick="checkAddress()" style="background-color: var(--sec-color); border: none;" class="mt-2 p-2">Entrer</button>
          <button onclick="getCurrentLocation()" style="    background-color: transparent;
    border: none;
    color: var(--sec-color);
    position: absolute;
    top: 0;
    right: 0;
    font-size: 24px;
    margin-top: 0px!important;
    padding-top: 9px!important;" class="mt-2 p-2"><i class="fa-solid fa-location-crosshairs"></i></button>
        </div>
        <script>
          // Function to get address from latitude and longitude
function getAddressFromLatLng(lat, lng) {
    var geocoder = new google.maps.Geocoder();
    var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

    geocoder.geocode({'location': latlng}, function(results, status) {
        if (status === 'OK') {
            if (results[0]) {
                document.getElementById('map-address-input').value = results[0].formatted_address;
            } else {
                alert('No results found');
            }
        } else {
            alert('Geocoder failed due to: ' + status);
        }
    });
}

// Function to get the current location of the user
function getCurrentLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            getAddressFromLatLng(latitude, longitude);
        }, function(error) {
            alert('Error occurred. Error code: ' + error.code);
        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

// Call this function to start the process


          </script>
        <style>
          .myicon {
            font-size: 24px;
          }
          #result {
  align-items: center;
  justify-content: center;
  display: none; width: 50%; height: 30%; position: absolute; top: 50%; left: 30%; background-color: white;
}

#closeButton {
  position: absolute;
    top: 0;
    right: 0;
    padding: 10px;
  background-color: transparent;
  border: none;
  font-size: 20px;
  cursor: pointer;
}
          </style>
        
        <div id="result" class="align-items-center">
  <span id="resultText"></span>
  <button id="closeButton" onclick="closeResult()">X</button>
</div>
      </div>
        </div>
      </div>

    </div>
    <script>
      </script>
    <script>
  const selectBoxValues = document.querySelectorAll('.select-box__value');

  selectBoxValues.forEach(value => {
    value.addEventListener('click', () => {
      const input = value.querySelector('.select-box__input');
      const url = getInputURL(input);
      if (url) {
        window.location.href = url;
      }
    });
  });

  function getInputURL(input) {
    // Define URLs for each input value
    const urls = {
      '0': 'menu.php?rest=Dijon&method=takeaway',
      '1': 'menu.php?rest=Besançon&method=takeaway',
      '4': 'menu.php?rest=Belfort&method=takeaway'
    };
    return urls[input.id];
  }
</script>
<div class="col-12 opbg p-5 mt-5 pmclr">
  <h3 class="pmclr p-2 text-center mb-3" style="font-size: 50px;">CENTRAL SUSHI <img style="padding-left: 20px;" src="images/etses2.png"></h3>
  <p>
  Mettent en œuvre tout leur savoir-faire à votre service pour offrir la meilleure qualité.
  </p>
  <p>
  Fort de son expérience depuis plus de 10 ans, CENTRAL SUSHI se donne pour mission de garantir la qualité et la fraîcheur de ses produits dans un cadre moderne et élégant.
  </p>
  <p>
  Présent sur les secteurs de Dijon et Besançon, CENTRAL SUSHI a l’honneur de vous annoncer l’ouverture d’un nouveau point de vente à Belfort.
  </p>
  <p>
  Nouveau logo, nouveau design, plaisir inchangé.
  </p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-3">
      <img src="images/collage1.png" class="img-fluid collage-img" alt="Collage 1">
    </div>
    <div class="col-3">
      <div class="row">
        <div class="col-12">
          <img src="images/collage2.png" class="img-fluid collage-img" alt="Collage 2">
        </div>
        <div class="col-12 mt-3">
          <img src="images/collage3.png" class="img-fluid collage-img" alt="Collage 3">
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="row">
      <div class="col-12 mt-3">
          <img src="images/collage5.png" class="img-fluid collage-img" alt="Collage 5">
        </div>
        <div class="col-12">
          <img src="images/collage4.png" class="img-fluid collage-img" alt="Collage 4">
        </div>
        
      </div>
    </div>
    <div class="col-3">
      <img src="images/collage6.png" class="img-fluid collage-img" alt="Collage 6">
    </div>
  </div>
</div>

    
<!-- 
<div class="row justify-content-center text-center mt-5">
    <div class="col-md-10 pmclr">
        <a href="menu.php" style="text-decoration: none; color: var(--primery-color);"><h1>DéCOUVREZ NOTRE MENU</h1>
        <p>ENTREES ET ACCOMPAGNEMENTS</p></a>

    <div class="row justify-content-center text-center pmclr">
        <div class="col-md-3 p-2">
          <div class="bgprod">
          <a href="product_details.php" class="">
        <div class="product-container">
        <img class="w-100" src="images/products/entrees-et-accompagnements/accompagnements/wakame1.png">
       
      
        <p class="secclr">Wakame</p>
            <p class="pclr pclr1">7,90€</p>


      <a href="add-to-cart.php" class="read-more-button" role="button">ADJOUTER</a>

</div>
          </div>
        
            </a>
        </div>

        <div class="col-md-3 p-2">
          <div class="bgprod">
        <a href="product_details.php" class="">
        <div class="product-container">
        <img class="w-100" src="images/products/entrees-et-accompagnements/accompagnements/salade-chou.png">
        <p class="secclr">Chou</p>
        <p class="pclr">6,90€</p>
        
      <a href="add-to-cart.php" class="read-more-button" role="button">ADJOUTER</a>

</div>
            </a>
        </div>
</div>
<div class="col-md-3 p-2">
          <div class="bgprod">
        <a href="product_details.php" class="">
        <div class="product-container">
        <img class="w-100" src="images/products/entrees-et-accompagnements/accompagnements/riz-nature.png">
        <p class="secclr">Riz nature</p>
        <p class="pclr">2,90€</p>

        <a href="add-to-cart.php" class="read-more-button" role="button">ADJOUTER</a>
        
</div>
            </a>
        </div>
        </div>
        <div class="col-md-3 p-2">
          <div class="bgprod">
        <a href="product_details.php" class="">
        <div class="product-container">
        <img class="w-100" src="images/products/entrees-et-accompagnements/accompagnements/miso.png">
        <p class="secclr">Miso</p>
        <p class="pclr">7,90€</p>

        <a href="add-to-cart.php" class="read-more-button" role="button">ADJOUTER</a>
        
</div>
            </a>
        </div>
</div>
    </div>
    </div>
</div> -->
<style>

    
    </style>
<div class="row mt-5 botbg" style="min-height: 400px; overflow: hidden;">
    <div class="col-md-12">
        
    </div>
</div>

</section>
<script>
  var input = document.getElementById('map-address-input');
        var options = {
            componentRestrictions: {country: 'fr'}
        };
        
        var autocomplete = new google.maps.places.Autocomplete(input, options);

        function checkAddress() {
  var address = document.getElementById("map-address-input").value;
  geocodeAddress(address, function(coordinates) {
    var point = new google.maps.LatLng(coordinates.lat, coordinates.lng);
    checkIfPointInAnyZone(point, function(zone) {
      var resultElement = document.getElementById("result");
      var resultText = document.getElementById("resultText");
      if (zone) {
        var restParam = zone.name;

                // Specific rules for some zone names
                if (zone.name === 'belfort') {
                    restParam = 'Belfort';
                } else if (zone.name === 'dijon') {
                    restParam = 'Dijon';
                } else if (zone.name === 'besancon') {
                    restParam = 'Besancon';
                }

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'save_session.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('address=' + encodeURIComponent(address) + '&lat=' + coordinates.lat + '&lng=' + coordinates.lng);

                // Redirect to menu.php with the zone name or adjusted name as a parameter
                window.location.href = "menu.php?rest=" + encodeURIComponent(restParam) + "&method=delivery";
      } else {
        resultText.innerHTML = "Sorry, this address is not within our delivery zones.";
      }
      resultElement.style.display = "flex";
    });
  });
}

function closeResult() {
  var resultElement = document.getElementById("result");
  resultElement.style.display = "none";
}

        function geocodeAddress(address, callback) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'address': address}, function(results, status) {
                if (status === 'OK') {
                    callback({
                        lat: results[0].geometry.location.lat(),
                        lng: results[0].geometry.location.lng()
                    });
                } else {
                    alert('Select Correct Address');
                }
            });
        }

        function checkIfPointInAnyZone(point, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetch_zones.php', true);
            xhr.onload = function() {
                var zones = JSON.parse(xhr.responseText);
                for (var i = 0; i < zones.length; i++) {
                    var zone = zones[i];
                    var polygon = new google.maps.Polygon({paths: zone.coordinates});
                    if (google.maps.geometry.poly.containsLocation(point, polygon)) {
                        callback(zone);
                        return;
                    }
                }
                callback(null);
            };
            xhr.send();
        }
  </script>
