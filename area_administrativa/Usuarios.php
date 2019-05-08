<?php
    namespace ProjetoFinal;
    include '../Classes/Usuario.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQuery -->
        <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!--Fonte Awesome-->
        <link href="../css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/all.min.js" type="text/javascript"></script>
        
        <!--Estilo-->
        <link href="../css/area_administrativa.css" rel="stylesheet" type="text/css"/>
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
                        <li class="active"><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                    </ul>                       
                </div>             
            </div>
        </div>
        
        <div id="corpo">
            <h1>Usuarios</h1>
            
            <div id="FormUsuario">
                <h2>Novo Usuario</h2>
                <Form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <p>ID</p>
                    <input name="id" type="text">
                    <p>Nome completo</p>
                    <input name="nome" type="text" autofocus="">
                    <p>Email</p>
                    <input name="email" type="text">
                    <p>Usuario</p>
                    <input name="usuario" type="text">
                    <p>Senha</p>
                    <input name="senha" type="password">
                    <input name="OPCAO" type="submit" value="INSERIR">
                    <input name="OPCAO" type="submit" value="ATUALIZAR">
                    <input name="OPCAO" type="submit" value="DELETAR">
                </Form>
            </div>
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>USUARIO</td>
                    <td colspan="2">OPÇOES</td>
                </tr>
                
                <tr>
                    <td>1</td>
                    <td>Cesar</td>+
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
        
        <div id="rodape">
            <p>2017-<?php echo date("Y")?> TI-26 | Todos os Direitos Reservados</p>
        </div>
        
    </body>
</html>

<?php
    if(isset($_GET['id']) &&
        isset($_GET['nome']) &&
        isset($_GET['email']) &&
        isset($_GET['usuario']) &&
        isset($_GET['senha']))
    {
        if(empty($_GET['nome']) ||
            empty($_GET['email']) ||
            empty($_GET['usuario']) ||
            empty($_GET['senha']))
        {
            echo "<script type='text/javascript'>alert(Não deixe os campos em branco);</script>";
        }
        else
        {
            $id = $_GET['id'];
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            $usuario = $_GET['usuario'];
            $senha = $_GET['senha'];
            $u = new \Usuario();
            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
            if($resultado == true)
            {
                echo "<script type='text/javascript'>alert(Cadastro Realizado com sucesso);</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert(>.> se fodeo);</script>";
            }
        }
    }