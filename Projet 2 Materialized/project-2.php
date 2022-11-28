<!DOCTYPE html>
<html>
   <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body id="color">
      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
         <li><a id="black">Noir</a></li>
         <li><a id="white">Blanc</a></li>
         <li><a id="grey">Gris</a></li>
      </ul>
      <?php require "menu.php"; ?>
      <ul id="slide-out" class="sidenav">
         <li>
            <div class="user-view">
               <div class="background">
                  <img class="sidenav-img" src="../Projet 2 Materialized/img/fondside.jfif">
               </div>
               <a href="#name"><span class="black-text name">Admin</span></a>
               <a href="#email"><span class="black-text email">projet@gmail.com</span></a>
            </div>
         </li>
         <li><a class="waves-effect" href="index.php"><i class="material-icons">home</i>Accueil</a></li>
         <li><a class="waves-effect" href="project-1.php" target="_blank">Projet 1</a></li>
         <li><a class="waves-effect" href="project-2.php" target="_blank">Projet 2</a></li>
         <li><a class="waves-effect" href="project-3.php" target="_blank">Projet 3</a></li>
         <!-- Dropdown Trigger -->
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <div class="background-style1">
         <audio id="audio" src="../Projet 2 Materialized/son/macdo.mp3"></audio>
      </div>
      <h1 class="title-projet1">Projet 2: Création d'un jeux</h1>
      <div class="row">
         <div class="col image s12 m3 offset-m2">
            <img class="dasri2" src="../Projet 2 Materialized/img/jeu1.jpg">
         </div>
         <div class="col text s12 m3 offset-m2">
            <p> Description du projet global</p>
            <p>J'ai choisi ce projet car c’est un projet que je souhaite faire dans le futur. J’ai envie de travailler sur ce
               genre de projet après ma formation à Gaming Campus, ou pendant si possible.
               J’ai commencé à me renseigner cet été avant mon inscription à Gaming Campus sur des logiciels et
               tutoriels pour commencer à créer des jeux simples.
            </p>
         </div>
      </div>
      <div class="background-style2">
         <audio id="audio" src="../Projet 2 Materialized/son/macdo.mp3"></audio>
      </div>
      <footer class="page-footer">
         <div class="container">
         <div class="row">
         <div class="col l6 s12">
            <h5 class="white-text">Bas de page</h5>
            <p class="grey-text text-lighten-4">Merci d'avoir été sur cette page</p>
         </div>
         <div class="col l4 offset-l2 s12">
         <h5 class="white-text">Liens</h5>
         <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Accueil</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Projet 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Projet 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Projet 3</a></li>
            <li>
               <!-- Trigger/Open The Modal -->
               <button id="myBtn">Ouvrir le formulaire de Contact</button>
               <!-- The Modal -->
               <div id="myModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                  <span class="close">&times;</span>
                  <!-- SECTION - CONTACT START -->
                  <section id="contact" class="section section-flex">
                  <div class="section-content">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="profile-detail position-relative width-100">
                                 <div class="content-wrapper">
                                    <div class="title-color">
                                       <h2>Contactez nous !</h2>
                                    </div>
                                    <form class="contact-v1-form">
                                       <input type="text" class="input half-width w-input" maxlength="256" name="Contact-Name" data-name="Contact Name" placeholder="Votre nom" id="Contact-Name">
                                       <input type="email" class="input half-width w-input" maxlength="256" name="Contact-Email" data-name="Contact Email" placeholder="Email " id="Contact-Email" required="">
                                       <textarea id="Contact-Message" name="Contact-Message" data-name="Contact Message" maxlength="5000" placeholder="Votre message" class="input text-area margin-right w-input"></textarea>
                                       <input type="submit" data-wait="Please wait..." value="Envoyer le formulaire" class="button contact-button w-button">
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
         </div>
         </div>
         </div>
         <div class="footer-copyright">
            <div class="container">
               © 2022 Copyright Text
               <a class="grey-text text-lighten-4 right" href="https://en.wikipedia.org/wiki/Privacy_policy"target="_blank">Privacy Policy</a>
            </div>
         </div>
      </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>