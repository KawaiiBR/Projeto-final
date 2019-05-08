<?php 

class Usuario
{
    private $id;
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    
    
    public function Inserir($nome, $usuario, $email, $senha)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=projeto_final", "root", "");

            $sql = "INSERT INTO usuarios (nome, usuario, email, senha) VALUES (:nome, :usuario, :email, :senha);";
            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":nome", "$nome");
            $preparar->bindValue(":usuario", "$usuario");
            $preparar->bindValue(":email", "$email");
            $preparar->bindValue(":senha", "$senha");

            $resultado = $preparar->execute();
            if($resultado == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(\PDOException $e)
        {
            echo "ERRO na execução da query: ". $e->getMessage();
            return false;
        }
    }
}

//teste do metodo
//$u = new usuario();
//$resultado = $u->Inserir("Anderson Serrano", "anderson", "ander@anderson.com.br", "1234");
//echo $resultado;



?>


