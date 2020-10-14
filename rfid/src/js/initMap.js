// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 46.56299;
var lon = 2.33376;
var map = null;
// Fonction d'initialisation de la carte
function initMap() {
	// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
	map = new google.maps.Map(document.getElementById("map"), {
	   // Nous plaçons le centre de la carte avec les coordonnées ci-dessus
	   center: new google.maps.LatLng(lat, lon),
	   // Nous définissons le zoom par défaut
	   zoom: 5,
	   // Nous définissons le type de carte (ici carte routière)
	   mapTypeId: google.maps.MapTypeId.ROADMAP,
	   // Nous activons les options de contrôle de la carte (plan, satellite...)
	   mapTypeControl: true,
	   // Nous désactivons la roulette de souris
	   scrollwheel: false,
	   mapTypeControlOptions: {
	      // Cette option sert à définir comment les options se placent
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
	   },
	   // Activation des options de navigation dans la carte (zoom...)
	   navigationControl: true,
	   navigationControlOptions: {
	      // Comment ces options doivent-elles s'afficher
	      style: google.maps.NavigationControlStyle.ZOOM_PAN
	   }
	});
  // Nous appelons la fonction ajax de jQuery
	$.ajax({
		// On pointe vers le fichier selectData.php
		url : "recup_carte.php",
	}).done(function(json){ // Si on obtient une réponse, elle est stockée dans la variable json
		// On construit l'objet villes à partir de la variable json
		var villes = JSON.parse(json);
		// On parcourt l'objet villes
		for(ville in villes){
      createMarker(villes[ville]);
		}
	});
}

//crée l'objet marker de google maps avec en label le nombre de sélections sur la ville
function createMarker(ville) {
  var sizeIcon = 15;
  if (parseFloat(ville.ville_nb_selection) >= 5) {
    sizeIcon = 25;
  }
  if (parseFloat(ville.ville_nb_selection) >= 25) {
    sizeIcon = 40;
  }
  if (parseFloat(ville.ville_nb_selection) >= 50) {
    sizeIcon = 55;
  }
  var icon = {
    url: '/vitrine-bandit/vitrine/src/photos/Logo.png',
    scaledSize: new google.maps.Size(sizeIcon, sizeIcon)
  };
  var marker = new google.maps.Marker({
    // parseFloat nous permet de transformer la latitude et la longitude en nombre décimal
    position: {lat: parseFloat(ville.ville_latitude_deg), lng: parseFloat(ville.ville_longitude_deg)},
    title: ville.nomVille,
    map: map,
    icon: icon
  });
}

window.onload = function(){
	// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
	initMap();
};
