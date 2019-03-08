
<?php
  /*
    if(!isset($COOKIE["usuario"])){
      setcookie("anterior","index.php");
      header("location:login.php");
    }*/
    session_start();
    if (!isset($_SESSION['usuario'])) {
                header ('location:'.url_base.'login.php');
            }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title> depo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}
</style>


</head>
<body >

<nav class="navbar navbar-expand-lg  static-top navbar-expand-md navbar-light" style="background: rgb(219,228,192);">
  <div class="container">
    <!--Barra de navegacion expandible-->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar_target"> <span class="navbar-toggler-icon"></span></button>
    <div class= "collapse navbar-collapse" id="navbar_target">
      <!--Items de la a barra de navegaccion-->
      <ul class="navbar-nav mr-auto">

        <!--Items  Definicion-->
        <li class ="nav-item dropdown">
          
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Definiciones<span class="caret"></span> </a>
          <div class="dropdown-menu">
            <a href="<?=url_base?>definiciones/cliente" class="dropdown-item">Cliente</a>
            <a href="<?=url_base?>definiciones/articulo" class="dropdown-item">Articulo</a>
            <a href="<?=url_base?>definiciones/posicion" class="dropdown-item">Posicion</a>
            <a href="<?=url_base?>definiciones/proveedor" class="dropdown-item">Proveedor</a>
            <a href="<?=url_base?>definiciones/unidadMed" class="dropdown-item">Unidad de Medida</a>
            <a href="<?=url_base?>definiciones/tipo" class="dropdown-item">Tipo de Producto</a>
          </div>
        </li>

        <!--Items  STOCK-->
        <li class ="nav-item dropdown">  
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Stock<span class="caret"></span> </a>
          <div class="dropdown-menu">           
            <a href="<?=url_base?>stock/articulos" class="dropdown-item">stock p/codigo</a>
            <a href="<?=url_base?>stock/ubicaciones" class="dropdown-item">Stock p/ubicacion</a>
            <a href="<?=url_base?>stock/consolidado" class="dropdown-item">consolidado p/Cliente</a>
          </div>
        </li>

        <!--Items  Movimientos-->
        <li class ="nav-item dropdown">  
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Movimiento<span class="caret"></span> </a>
          <div class="dropdown-menu">
            <a href="/" class="dropdown-item">Asinar Ubicacion</a>
            <a href="/" class="dropdown-item">tranferencia de ubicaion</a>
            <a href="/" class="dropdown-item">ajuste</a>
          </div>
        </li>

        <!--Items  Ordenes-->
        <li class ="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ordenes<span class="caret"></span> </a>
          <ul class="dropdown-menu">
            <!--Submenu de  Ordenes para la generacion-->
            <li class="dropdown-submenu">
              <a tabindex="-1" class="dropdown-item dropdown-toggle" href="#">Generar <span class="caret"></span></a>
              
              <ul class="dropdown-menu">
                <li><a href="<?=url_base?>ordenes/generarIngreso" class="dropdown-item">Orden de Ingreso</a></li>
                <li><a href="<?=url_base?>ordenes/generarPedido" class="dropdown-item">Orden de Preparacion</a></li>
              </ul>
            </li>
            <li><a href="<?=url_base?>ordenes/entrada" class="dropdown-item">Ingresar</a></li>
            <li><a href="<?=url_base?>ordenes/pedido" class="dropdown-item">Preparar</a></li>
            <li><div class="dropdown-divider"></div></li>
            <li><a href="<?=url_base?>ordenes/diferencias" class="dropdown-item">diferencias</a></li>
          </ul>
        </li>

        <!--Items  Despachos-->
        <li class ="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Despachos<span class="caret"></span> </a>
           <div class="dropdown-menu">
            <a href="<?=url_base?>despachos/remito" class="dropdown-item">Generar remito</a>
            <a href="<?=url_base?>despachos/hojasRuta" class="dropdown-item">Generar Hoja de rutas</a>
           </div>
        </li>

        <!--Items  Seguridad y Acceso-->
        <li class ="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Seguridad y Acceso<span class="caret"></span> </a>
          <div class="dropdown-menu">
            <a href="<?=url_base?>acceso/permisos" class="dropdown-item">Permisos de usuario</a>
            <a href="<?=url_base?>acceso/usuarios" class="dropdown-item">Usuarios</a>
          </div>
        </li>

        <!--Items  Informes-->
        <li class ="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"> Informes<span class="caret"></span> </a>
          <ul class="dropdown-menu">
              <li><a href="<?=url_base?>informes/remito" class="dropdown-item">informe1</a></li>
              <li><a href="<?=url_base?>informes/remito" class="dropdown-item">informe2</a></li>
            </ul>
        </li>
        <li class ="nav-item dropdown">
          <a class="nav-link " href="#" > Salir </a>
        </li> 
      </ul>
    </div>
    <a class="navbar-brand" href="#">
      <img src="<?=url_base?>img/logo_villa2.png" style="width: 200px;height: auto ; position: absolute;top:0.2em;right:0.3em">
    </a>
  </div>
    
</nav>
