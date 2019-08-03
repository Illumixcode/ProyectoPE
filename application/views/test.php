<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plataforma educativa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link href="<?php echo base_url(); ?>frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>frontend/css/animate.min.css">


    <link href="<?php echo base_url(); ?>frontend/css/minoral.css" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>frontend/js/bootstrap.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script src="<?php echo base_url(); ?>frontend/js/plugins/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>frontend/js/plugins/blockui/jquery.blockUI.js"></script>

     


    <script src="<?php echo base_url(); ?>frontend/js/minoral.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    (function() {

  var nav = $('nav'),
    menu = $('nav h1'),
    main = $('main'),
    open = false,
    hover = false;

  menu.on('click', function() {
    open = !open ? true : false;
    nav.toggleClass('menu-active');
    main.toggleClass('menu-active');
    nav.removeClass('menu-hover');
    main.removeClass('menu-hover');
    console.log(open);
  });
  menu.hover( 
    function() {
      if (!open) {
        nav.addClass('menu-hover');
        main.addClass('menu-hover');
      }
    }, function() {
      nav.removeClass('menu-hover');
      main.removeClass('menu-hover');
    }
  );

})();
    
</script>


    <style>
 
html, body {
  height: 100%;
}
* {
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
   font-family: 'Roboto Condensed', sans-serif;
  line-height: 1.7;
  perspective-origin: 0% 50%;
  perspective: 0px;
  color: #fff;
  background: #fff;
    
}
nav, main {
  transition: transform 150ms ease-out;
}
nav {
  z-index: 100;
  position: absolute;
  padding-top: 100px;
  top: 0;
  left: 0;
  bottom: 0;
  width: 16em;
  background-color: #191D4F;
  transform: translateX(-16em);
}
nav.menu-active {
  transform: translateX(0);
}
nav.menu-hover {
  transform: translateX(-15em);
}
nav h1 {
  z-index: 100;
  display: block;
  position: absolute;
  top: 0;
  right: -65px;
  height: 60px;
  width: 65px;
  line-height: 60px;
  font-size: 0.8em;
  font-weight: 300;
  letter-spacing: 1px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  background-color: #3C3CA7;
  cursor: pointer;
}
nav h1:hover {
  color: #41444F;
  background: #fff;
}
nav ul {
  margin: 0;
  padding: 0;
}
nav li {
  display: inline-block;
  padding: 0 1em;
  width: 100%;
  height: 60px;
  color: #9dc6d1;
  line-height: 60px;
  background-color: #191D4F;
    transition: all 0.5s ease-in;
}
nav li:nth-of-type(2n) {
  background-color: #191D4F;
}
nav li:hover {
  background: #9EA0A7;
    color: white;
     
}
main {
  z-index: 0;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url(ji.jpeg);
  transform-origin: 0% 50%;
    background-size: cover;
}
main:after {
  content: '';
  display: block;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(to right, transparent, rgba(33, 33, 45, .5));
  visibility: hidden;
  opacity: 0;
  transition: opacity 150ms ease-out, visibility 0s 150ms;
}
main.menu-active {
  border-radius: 0.001px;
  transform: translateX(16em) rotateY(15deg);
}
main.menu-active:after {
  visibility: visible;
  opacity: 1;
  transition: opacity 150ms ease-out, visibility 0s;
}
main.menu-hover {
  border-radius: 0.001px;
  transform: translateX(1em) rotateY(1deg);
}
main section {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  padding: 1em 4em;
  max-width: 780px;
  overflow: auto;
  /*background-color: rgba(255, 255, 255, .5); Cambio de color con degradado*/ 
}
section h1 {
  font-weight: 800;
  text-transform: uppercase;
  font-size: 2em;
}
section p {
  display: inline-block;
  margin: 16px 0;
}

    
    </style>
</head>
<body>
    <nav class="menu-activea">
  <h1>MENU</h1>
  <ul>
    <div style="padding-left: 10px">
    <img src="<?php echo base_url();?>uploads/test.jpeg?>" alt="Sin foto de perfil" height="130" width="200"/>
                </div>
    <a href="<?php base_url();?>Alumno/registro"><li>Registrarse</li></a>
    <li>Consultar listados</li>
    <li>Consultar materias</li>
    <li>Consultar alumno</li>
    <li>Consultar avances</li>
    <li>Cerrar sesión</li>
  </ul>
</nav>
<main>
<section>
  


<script>
    (function() {

  var nav = $('nav'),
    menu = $('nav h1'),
    main = $('main'),
    open = false,
    hover = false;

  menu.on('click', function() {
    open = !open ? true : false;
    nav.toggleClass('menu-active');
    main.toggleClass('menu-active');
    nav.removeClass('menu-hover');
    main.removeClass('menu-hover');
    console.log(open);
  });
  menu.hover( 
    function() {
      if (!open) {
        nav.addClass('menu-hover');
        main.addClass('menu-hover');
      }
    }, function() {
      nav.removeClass('menu-hover');
      main.removeClass('menu-hover');
    }
  );

})();
    
</script>