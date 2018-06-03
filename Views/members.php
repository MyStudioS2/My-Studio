<!DOCTYPE html>
<head>
	<title>Accueil</title>
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body{
            padding-top:70px;
        }
    </style>
    <STYLE type="text/css">

/* make sidebar nav vertical */ 
@media (min-width: 768px){
  .sidebar-nav .navbar .navbar-collapse
  {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul
  {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li
  {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a
  {
    padding-top: 12px;
    padding-bottom: 12px;
  }
}

</STYLE>
</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">

            <!-- Brand, toggle pour l'affichage en version mobile -->

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">MyStudio</a>
            </div>

            <!-- Liens de navigation, formulaires et autres -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#" title="Lien actif">Lien actif <span class="sr-only">(current)</span></a></li>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Rechercher">
                </div>
                <button type="submit" class="btn btn-sm btn-default">OK</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" title="Lien à droite">Lien à droite</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
	</div>

    <div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Menu Item 1</a></li>
            <li><a href="#">Menu Item 2</a></li>
            <li><a href="#">Menu Item 3</a></li>
            <li><a href="#">Menu Item 4</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    Main content goes here
  </div>
</div>
</div>
    Other stuff here

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

