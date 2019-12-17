<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="home.php">
          <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          App Help Desk
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">

    <div class="card mb-3 bg-light text-center">
      <div class="card-body">
        <h4 class="card-title">
            testando
        </h4>

        <h5 class="card-subtitle mb-2 text-muted">
            texto
        </h5>

        <p class="card-text">
            texto 2
        </p>
      </div>      
    </div>

    <a class="btn btn-warning btn-block" href="consultar_chamado.php">Voltar</a>
</div>
</body>
</html>