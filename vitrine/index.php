<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <script>
    function loadXMLDoc(url)
    {
      var xmlhttp;
      var i,description,txt;
      xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
          var photos = xmlhttp.responseXML.getElementsByTagName("PHOTO");
          for(i=0;i<photos.length;i++){
            y=photos[i].getElementsByTagName("description");
            txt=""+y[0].firstChild.nodeValue+"";
            document.getElementById(""+i).innerHTML=txt;
          }
        }
      }
      xmlhttp.open("GET",url,true);
      xmlhttp.send();
}

    </script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/css/css.css" />
    <script type="text/javascript" src="src/js/carousel.js">
    </script>
    <title>Bandits</title>
  </head>
  <body onload="showSlides()">

    <header>
      <?php include("navbar.php");?>
    </header>
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
      <span id="0" class="text"></span>
    <img src="src/photos/avanceebandits.png">
  </div>

  <div class="mySlides fade">
      <span id="1" class="text"></span>
    <img src="src/photos/affiche.png" class="Logo">
  </div>

  <div class="mySlides fade" >
    <span id="2" class="text"></span>
    <img src="src/photos/histoire3.png">
  </div>
  <script>
  loadXMLDoc('photos.xml');
  </script>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="newsletter">
    <div class="contenueNewsletter">
      <form class="newsletter" action="../bddco.php" method="post">
        <h2>Rejoignez le mouvement</h2>
        <p>Vous recevrez les instructions pour la révolte ici</p>
        <div class="container" >
          <input type="text" placeholder="Adresse e-mail" name="email" required size="30">
          <input type="submit" class="btn" value="Rejoindre" style="font-weight: bold;">
        </div>
      </form>
    </div>
  </div>

  <div>
    <p class="presentation"> <strong>Vous pourrez trouver ici une présentation de notre projet, l'histoire de la marque, ...</strong>
    </br>
    </br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lobortis elementum nibh tellus molestie nunc non blandit. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Blandit aliquam etiam erat velit scelerisque in dictum. Non blandit massa enim nec dui nunc mattis enim ut. Habitant morbi tristique senectus et netus et malesuada fames. Aliquet nec ullamcorper sit amet risus. In metus vulputate eu scelerisque felis imperdiet proin. Diam ut venenatis tellus in metus vulputate eu scelerisque. Semper quis lectus nulla at. Condimentum vitae sapien pellentesque habitant. Pellentesque elit eget gravida cum sociis natoque penatibus et magnis. Tellus cras adipiscing enim eu turpis. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Pharetra massa massa ultricies mi quis hendrerit. Libero enim sed faucibus turpis in eu. Id faucibus nisl tincidunt eget nullam. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Est sit amet facilisis magna etiam. Purus viverra accumsan in nisl nisi scelerisque eu ultrices.</p>
  </div>

  <div class="gris">
    <p class="presentation"><strong>Voici notre équipe</strong></p>
    <div class="equipe">
      <p><strong>Audrey Busca : Cheffe Design.</strong></br> Audrey est actuellement en 3ème année dans l'école d'art ESMA en spécialité Motion Design.</br>
      Elle a joué un rôle majeur dans la refonte du logo et plus globalement sur les designs de la marque.</br>
      Ses principales qualitées sont sa créativité, sa compréhension et surtout sa capacité d'adaptation.</p>
      <p><strong>Axel Prukop : Artiste 3D / Animateur.</strong></br> Axel est actuellement en 3ème année dans l'école d'art ESMA en spécialité 3D.</br>
      Il a réalisé les représentations des produits en 3D, il a également épaulé la cheffe design pour la refonte du logo.</br>
      Ses principales qualitées sont sa capacité d'analyse, ses talents en photographie et sa rigueur.</p>
      <p><strong>Franck Pineda : CEO.</strong></br> Franck est actuellement a temps plein sur la marque après un DUT dans les télécoms.</br>
      Il est le créateur du logo de base et l'initiateur du projet. Il gère en particulier la création de stickers et la création du shop en ligne</br>
      Ses principales qualitées sont, sa persévérance, sa créativité et son assiduité.</p>
      <p><strong>Jordi Pujol : CBO.</strong></br> Jordi est actuellement a temps plein sur la marque après un bachelor dans le commerce.</br>
      Il est en lien direct avec le fournisseur, il a réalisé le business plan et il gère la publicité</br>
      Ses principales qualitées sont, sa curiosité, la négociation et son communication.</br></p>
      <p><strong>Jean Léoutre : CTO.</strong></br> Jean est actuellement en 4ème année d'école d'ingénieur en informatique</br>
      Il s'occupe de la partie technique de la marque via la technologie RFID, il a réalisé la page vitrine de la marque. Il gère aussi la publicité</br>
      Ses principales qualitées sont, sa capacité à gérer un projet, son ambition et le travail en équipe.</br></p>

    </div>
  </div>

  </body>

  <footer class="basDePage">
    <?php include("footer.php"); ?>
  </footer>
</html>
