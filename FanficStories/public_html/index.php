<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php require_once('Cadastro.html'); ?>
    <head>
        <title>Gamehall</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href="Home.html">FanficStories</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Aulas.html">Aulas</a></li>
      <li><a href="About.html">Sobre</a></li>
      <li><a href="MinhasHistorias.html">Minhas historias</a></li>
      <li><a href="Contato.html">Contato</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="Cadastro.html"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
      <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
     <div>Teste</div>
           <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; Companhia S.A., 2017-2018 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>
    </body>
</html>
