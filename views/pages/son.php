<?php

// if( isset ($_GET["valeur"])  && !empty($_GET["valeur"]) ){
  // $db = 20;
  //   if($db<=20){
  //     image
  //   }if($db>20 && <=
// }else{
//   location
// }

$jokes=["Qu'est ce qui est jaune et qui attend? Jonathan","Tu connais la blague de la chaise?
Elle est pliante","Quel super héros donne le plus vite l'heure ? Speed heure man ! ","Pourquoi Napoléon n' a jamais déménagé? -Parce qu'il avait un Bonaparte","Une blonde à une vendeuse blonde à la Fnac :
- Je voudrais un livre
- Quel auteur ?
- Heu, 20 cm
- Vincent qui ?"];
$jokeSelect= rand(0,4);
$decibels=0;
if( isset ($_GET["moyenne"])  && !empty($_GET["moyenne"]) ){
   $decibels=$_GET["moyenne"];
}
$decibelsText="";
if($decibels<250){
  $decibelsText="Entre 20 et 75decibels   ";
}else if($decibels >=250 && $decibels <600){
  $decibelsText="Entre 76 et 95 decibels   ";
}
else {
  $decibelsText="Au dessus de  95decibels   ";
}
?>

<div class="card text-center">
  <div class="card-body">
    <?php
      if($decibels<250){
        echo '<h6 class="card-header textGreen">'.$decibelsText.'    <img class="emoticon" src="assets/images/emoticones/niveau2.jpg"></h6>';
      }
      else if($decibels>=250 && $decibels <600){
        echo '<h6 class="card-header textOrange">'.$decibelsText.'    <img class="emoticon" src="assets/images/emoticones/niveau3.jpg"></h6>';
      }
      else {
        echo '<h6 class="card-header textRed">'.$decibelsText.'    <img class="emoticon"  src="assets/images/emoticones/niveau4.jpg"></h6>';
      }
    ?>
    <!-- <img class="card-img-top rounded-0" src="assets/images/images.jpeg" alt="Card image HELP"> -->
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <div class="alert alert-info w-75 p-3 mx-auto m-5" role="alert">
      <?php echo $jokes[$jokeSelect]; ?>
    </div>
    <p>Conseils :</p>
    <?php
      if($decibels<250){
        echo "<p> Pas de problèmes à signaler !</p>";
      }else if($decibels >=250 && $decibels <600){
        echo "<p> Ne reste pas exposer à ce niveau sonore trop longtemps! Une heure gros max, des boules quies pourraient t'aider à rester plus longtemps. </p>";
      }
      else{
        echo "<p> Tu as le choix :<ul class='unlist'><li>Enfuis toi !</li><li> Achètes toi de nouvelles oreilles </li><li> De bonne grosses boules quies</li><li>Prends le risque d'endomager tes oreilles :( </li></ul></p>";
      }
    ?>
    <div class="d-flex justify-content-around align-items-center">
      <a href="#" class="btn btn-sm addMap">Ajouter à la Map</a>
      <a href="index.php?page=sensibilisation" class="">Plus d'informations...</a>
    </div>
  </div>
</div>
