<!DOCTYPE html>
<html>
<head>
	<title>HMTIF Universitas Pasundan</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      	<img alt="Brand" src="<?php bloginfo('template_url'); ?>/asset/logo-hmtif.png">
      </a>
    </div>
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Seputar Kampus</a></li>
        <li><a href="#">Prosedur</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Sejarah</a></li>
            <li><a href="#">Struktur Organisasi</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>