<?php
  include "db/banco.php";
  include "db/connection.php";

  $banco = new Banco($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM formulario";
  $result = $banco->select($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script>
      (function() {
      'use strict';
      window.addEventListener('load', function() {
      // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
      var forms = document.getElementsByClassName('needs-validation');
      // Faz um loop neles e evita o envio
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
        });
        }, false);
        })();    
    </script>
    <style>
      body{
      margin: 0;
      padding: 0;
      }

      main{
      background-color: #e5e5e5;
      padding: 0 20px;
      }

      footer{
      background-color: #312783;
      color: #fff;
      }

      svg{
      width: 30px;
      height: 30px;
      }

        .nav-header{
            border-top: 3px solid #5271ff;
            border-bottom: 5px solid #5271ff;
        }

        .main{
            background-color: white;
        }

        .titulo-jumb{
            margin-top: 2rem;
        }

        .titulo{
            font-weight: 500;
            color: #007bff;
        }

        .titulo-form{
            border-top: 2px solid red; 
            border-bottom: 2px solid red;
            background-color: #312783; 
            color: #fff;
        }

        #titulo-ouvidoria{
            background-color: #5271ff; 
            width: 100%;
        }

        .subtitulo{
            width: 100%;
            padding: 1rem 3rem;
            border-bottom: 1.75px groove black;
            margin-bottom: 1rem;
        }

        #subtitulo-carrosel{
            margin-top: 2rem;
        }

        .texto{
            width: 100%;
            padding: 1rem 3rem;
        }

        .figura{
            margin-top: 4rem;
            margin-bottom: 2.5rem;
        }

        .logo-uepa{
            width: 185px;
            height: 95px;
        }

        .logo-curso{
            width: 225px;
            height:115px;
        }

        .botao{
            align-self: flex-start;
            margin: 1rem 0 2rem 3rem;
        }

        .link-box{
            gap: 1rem;
            margin-left: 1rem;
        }

        .link-header{
            font-size: 1.035rem;
        }

        .adm{
            text-align: justify;
            align-self: center;
        }

    </style>
    <title>Página Administrativa</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light nav-header">

            <a class="navbar-brand" href="https://www.uepa.br/">
                <img class="logo-uepa" src="img/logo uepa.png" alt="logo UEPA">
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav link-box">
                  <a class="nav-item nav-link link-header" href="index.html">Home</a>
                  <a class="nav-item nav-link link-header" href="https://www.uepa.br/">UEPA</a>
                  <a class="nav-item nav-link link-header" href="https://ccnt.uepa.br/">CCNT</a>
                  <a class="nav-item nav-link link-header" href="https://ccnt.uepa.br/campus-xxii-ananindeua/">Contatos</a>
                  <a class="nav-item nav-link link-header" href="curso.html">Sobre o Curso</a>
                  <a class="nav-item nav-link link-header" href="form.php">Fale Conosco</a>
                  <a class="nav-item nav-link link-header" href="administrativo.php">Administrativo</a>
                </div>
            </div>

            <div class="text-right">
                <a href="index.html">
                    <img class="rounded logo-curso" src="img/logo-curso.png" alt="logo-curso">
                </a>
            </div>

        </nav>

    </header>

    <main>
        <div class="container d-flex flex-column align-items-center main">

            <div class="jumbotron titulo-jumb">
                <h1 class="display-4 titulo">Bacharelado em Ciência de Dados</h1>
            </div>
            
            <div class="py-2 text-center" id="titulo-ouvidoria">
                <p class="h2">Página Administrativa</p>
            </div>

            <div class="container my-4">

                <div class="row my-2">
                            
                    <div class="col-1">
                        <p class="h5">ID</p>
                    </div>
                    <div class="col-3">
                        <p class="h5">Nome</p>
                    </div>
                    <div class="col-3">
                        <p class="h5">Email</p>
                    </div>
                    <div class="col-1">
                        <p class="h5">Tipo</p>
                    </div>
                    <div class="col-4">
                        <p class="h5">Manifestação</p>
                    </div>

                </div>

                <?php
                $i = 0;
                while($row = mysqli_fetch_assoc($result)){
                ?>

                    <div class="row" <?php if($i % 2 == 0) echo("style= \" background-color: #E1E1E1\""); ?>>
                        
                        <div class="col-1 adm">
                            <?php echo($row["id"]); ?>
                        </div>
                        <div class="col-3 adm">
                            <?php echo($row["nome"]); ?>
                        </div>
                        <div class="col-3 adm">
                            <?php echo($row["email"]); ?>
                        </div>
                        <div class="col-1 adm">
                            <?php echo($row["tipo"]); ?>
                        </div>
                        <div class="col-4 adm">
                            <?php echo($row["texto"]); ?>
                        </div>

                    </div>

                <?php
                $i++;
                }
                ?>

                <a class="btn btn-primary my-4 botao" role="button" href="index.html">
                    Clique aqui para voltar para a Home
                </a>

            
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="border-top: 5px solid red;">
                
                <div class="col-12 col-md-3">
                    <div class="content">
                        <a href="https://www.uepa.br/">
                            <img class="img-fluid" src="img/logo uepa branca.png" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-6 col-md-4">
                    <div class="content">
                        <ul class="list-inline text-center .ml-md-5 list-social">
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.7 124.1c-6.281-23.65-24.79-42.28-48.28-48.6C458.8 64 288 64 288 64S117.2 64 74.63 75.49c-23.5 6.322-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.3c6.281 23.65 24.79 41.5 48.28 47.82C117.2 448 288 448 288 448s170.8 0 213.4-11.49c23.5-6.321 42-24.17 48.28-47.82 11.41-42.87 11.41-132.3 11.41-132.3s0-89.44-11.41-132.3zm-317.5 213.5V175.2l142.7 81.21-142.7 81.2z"></path></svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.twitter.com/uepaoficial">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/uepaoficial">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/UepaOficial">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 col-md-5">
                    <div class="container text-center">
                        &copy; João Vitor Machado / Maurício Câncio da Cunha
                    </div>
                </div>
            
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="module" src="js/script.js"></script>
</body>
</html>