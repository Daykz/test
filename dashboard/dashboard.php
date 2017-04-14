            <?php
            //(1) On inclut la classe de Google Maps pour générer ensuite la carte.
            require('GoogleMapAPI.class.php');

            //(2) On crée une nouvelle carte; Ici, notre carte sera $map.
            $map = new GoogleMapAPI('map');

            //(3) On ajoute la clef de Google Maps.
            $map->setAPIKey('AIzaSyBCm5bWd0heSgcj7imtzvyTDdFP39YaSoA');
    
            //(4) On ajoute les caractéristiques que l'on désire à notre carte.
            $map->setWidth("95%");
            $map->setHeight("400px");
            $map->setCenterCoords ('2', '48');
            $map->setZoomLevel (5);

            //(5) On applique la base XHTML avec les fonctions à appliquer ainsi que le onload du body.
            ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <link href="../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="dashboard.css" rel="stylesheet">


    <script src="../bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

     <?php $map->printHeaderJS(); ?>
      <?php $map->printMapJS(); ?>

  <body onload="onLoad();">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" title="elum">
            <img class="site-logo" src="http://elum-energy.com/wp-content/uploads/2016/09/Elum-logo-white-text.png" alt="Elum Energy">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome User</a>
              <ul>
                <li><a href="#">User</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">User</a></li>
              </ul>
              </li>
            <li><a href="#">Settings</a>
              <ul>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Settings</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

        <ul id="menu-left">
          
          <ul class="nav nav-sidebar">
            <li><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders"">
           
            <?php $map->printMap(); ?>
            
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Project</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>B</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>C</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>D</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>E</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>F</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>G</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>H</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>I</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>J</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Project</td>
                  <td>K</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

    <script src="../bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>

    <script src="../bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>
