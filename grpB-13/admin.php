<!DOCTYPE html>
<?php require_once "config.php"; 

if(!isset($_SESSION['user']['admin']) || $_SESSION['user']['admin']==0){
  header('Location: index.php');
  exit();
}

?>
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

    <?php require "menu.php"; ?>

    <h1>Liste des utilisateurs</h1>
    <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $user){ ?>
    <div class="bloc_user">
      <h2><?php echo $user['name'] ?></h2>
      <form method="post" action="action/update_user.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>
      <span class="email"><?php echo $user['email'] ?></span>
      <form method="post" action="action/update_email.php">
        <input type='name' name='email' placeholder="nouvel email"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <form method="post" action="action/delete_user.php" >
      <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
      <input type='submit' value='supprimer' />
    </form>
    </div>
    <?php } ?>

    <h1>Liste des projets</h1>

    <?php
    $sql = "SELECT * FROM projects"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $projects){ ?>
    <div class="bloc_user">
      <h2><?php echo $projects['name'] ?></h2>
      <form method="post" action="action/update_projects.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <span class="name"><?php echo $projects['h1'] ?></span>
      <form method="post" action="action/update_projects_title.php">
        <input type='name' name='h1' placeholder="nouveau titre"/>
        <input type='hidden' name='id' value="<?php echo $projects['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>
      <form method="post" action="action/delete_projects.php" >
      <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
      <input type='submit' value='supprimer' />
    </form>
    </div>
    <?php } ?>

    
    <h1>creer un projet</h1>
    <form method="post" action="action/create_projects.php" enctype="multipart/form-data">
    <input type='name' name='name' placeholder="Entrez le nom" />
    <input type='name' name='h1' placeholder="Entrez un titre"/>
    <input type='file' name='img'/>
    <input type='name' name='text' value="null"/>
    <input type='submit' value='creer projet' />
  </form>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h2 class="white-text">Bas de Page</h2>
            <p class="grey-text text-lighten-4">Merci d'avoir été sur cette Page.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h2 class="white-text">Liens</h2>
            <ul>
              <li><a class="grey-text text-lighten-3"href="index.html">Acceuil</a></li>
              <li><a class="grey-text text-lighten-3" href="project-1.html" target="_blank">Projet 1</a></li>
              <li><a class="grey-text text-lighten-3" href="project-2.html" target="_blank">Projet 2</a></li>
              <li><a class="grey-text text-lighten-3" href="project-3.html" target="_blank">Projet 3</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2022 Copyright Text
          <a class="grey-text text-lighten-4 right" href="https://en.wikipedia.org/wiki/Privacy_policy" target="_blank" >Privacy policy</a>
        </div>
      </div>
    </footer>
  </body>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</html>