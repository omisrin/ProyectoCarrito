<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
<!-- Twitter meta-->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:site" content="@pratikborsadiya">
<meta property="twitter:creator" content="@pratikborsadiya">
<!-- Open Graph Meta-->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Vali Admin">
<meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
<meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
<meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
<meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
<title>Categorias</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://localhost/proyecto_carrito/Assets/css/main.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
.m-contenido{
  width:600px;
  padding: 10px 20px;
  margin: 20% auto;
  position: relative;
}
.m{
  background-color: rgba(0,0,0,.8);
  position:fixed;
  top:0;
  right:0;
  bottom:0;
  left:0;
  opacity:0;
  pointer-events:none;
  transition: all 1s;
}

#miModal:target{
  opacity:1;
  pointer-events:auto;
}
</style>



</head>
  <body class="app sidebar-mini">
    <header class="app-header"><a class="app-header__logo" href="#">Proyecto Carrito</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

      <div class="app-sidebar__user">
      	<img class="app-sidebar__user-avatar" src="http://localhost/proyecto_carrito/Assets/images/omaira.jfif" width="20%" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Omaira Rincon</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>

      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?php echo VIEW;?>home/home">
                <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo VIEW;?>categoria/home">
                <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Categorias</span>
            </a>
        </li>
      </ul>
    </aside>
    <main class="app-content">