<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQuery -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!--Fonte Awesome-->
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/all.min.js" type="text/javascript"></script>
        
        <!--Estilo-->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="topo">
            
            <img src="#" alt="LOGO">
            
            <div id="icones">
                <a href="#" class="iconFacebook">
                    <i class="fab fa-facebook-square fa-5x"></i>
                </a>
                <a href="#" class="iconTwitter">
                    <i class="fab fa-twitter-square fa-5x"></i>
                </a>
                <a href="#" class="iconInstagram">
                    <i class="fab fa-instagram fa-5x"></i>
                </a>
                <a href="#" class="iconEmail">
                    <i class="fas fa-envelope-square fa-5x"></i>
                </a>
                <a href="#" class="iconAdmin">
                    <i class="fas fa-lock fa-5x"></i>
                </a> 
            </div>
            
        </div>
        
        <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="Quem_Somos.php">Quem Somos</a></li>
                        <li><a href="Historia.php">História</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li class="active"><a href="Contato.php">Contato</a></li>
                    </ul>                       
                </div>             
            </div>
        </div>
        
        <div id="corpo">
            <h1>Contato</h1>
            <div id="Contato">
                <form action="#" method="GET">
                    <p>Nome Completo</p>
                    <input placeholder="Nome Completo" type="text">
                    <p>Email</p>
                    <input placeholder="email@examplo" type="text">
                    <p>Telefone</p>
                    <input placeholder="(99) 99999-9999" type="text">
                    <p>Departamento</p>
                    <select name="departamento">
                        <option value="administrativo">Administrativo</option>
                        <option value="informatica">informatica</option>
                        <option value="diretoria">Diretoria</option>
                        <option value="redacao">Redação</option>
                    </select>
                    <p>Mensagem</p>
                    <textarea width="200" height="200"></textarea>
                    <br>
                    <input class="btn btn-success" type="submit" value="Enviar">
                </form>
            </div>
        </div>

        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y")?> TI-26 | Todos os Direitos Reservados</p>
        </div>
        
    </body>
</html>