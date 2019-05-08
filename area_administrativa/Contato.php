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
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>USUARIO</td>
                    <td colspan="2">OPÇOES</td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>Cesar</td>
                    <td>Cesar</td>
                    <td>[editar]</td>
                    <td>[excluir]</td>
                </tr>
                
                 <tr>
                    <td>1</td>
                    <td>Cesar Jr</td>
                    <td>CesarJr</td>
                    <td>[editar]</td>
                    <td>[excluir]</td>
                </tr>
            </table>
            </div>
        </div>

        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y")?> TI-26 | Todos os Direitos Reservados</p>
        </div>
        
    </body>
</html>