<?php


require_once "Conexao.php";
class Aluno
{
    public $MATRICULA;
    public $NOME;
    public $SEXO;
    public $EMAIL;
    public $ENDERECO;
    public $TELEFONE;
    public $SENHA;

    public function  listarTodos(){
        try {
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql = $con->prepare("select * from alunos");
            $sql->execute();
            if($sql->rowCount() > 0 ){
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }
        }catch(PDOException $msg){
            echo "Não foi possivel listar os Alunos {$msg->getMessage()}";
        }
    }

    public function inserir(){
        try {

            if(isset($_POST["nome"]) && isset($_POST["sexo"])){
                $this->NOME = $_POST["nome"];
                $this->SEXO = $_POST["sexo"];
                $this->EMAIL = $_POST["email"];
                $this->ENDERECO = $_POST["endereco"];
                $this->TELEFONE = $_POST["telefone"];
                $this->SENHA = $_POST["senha"];

                $bd = new Conexao();

                $con = $bd->conectar();

                $sql = $con->prepare("insert into alunos(matricula,nome,sexo,email,endereco,telefone,senha)
                                        values(null,?,?,?,?,?,?);");
                $sql->execute(array(
                    $this->NOME,
                    $this->SEXO,
                    $this->EMAIL,
                    $this->ENDERECO,
                    $this->TELEFONE,
                    $this->SENHA
                ));

                if($sql->rowCount() > 0 ){
                    header("location:index_alunos.php");
                }

            }else{
                header("location:cadAlunos.php");
            }

        }catch(PDOException $msg){
            echo "Não possivel inserir o aluno. {$msg->getMessage()}";
        }
    }

    public function excluir ($matricula){
        try {
            if(isset($matricula)){
                $this->MATRICULA = $matricula;
                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("delete from alunos where matricula = ?;");
                $sql->execute(array($this->MATRICULA));

                if($sql->rowCount() > 0){
                    header("location: index_alunos.php");
                }

            }else{
                header( "location: index_alunos.php");
            }
        }catch ( PDOException $msg){
            echo "Não foi possivel excluir o aluno. {$msg->getMessage()}";
    }
}

    public function alterar(){
        try{
            if(isset($_POST["Salvar"])) {
                $this->MATRICULA = $_GET["matricula"];
                $this->NOME = $_POST["nome"];
                $this->SEXO = $_POST["sexo"];
                $this->EMAIL = $_POST["email"];
                $this->ENDERECO = $_POST["endereco"];
                $this->TELEFONE = $_POST["telefone"];
                $this->SENHA = $_POST["senha"];

                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("update alunos set nome = ?, sexo = ?, email = ?, endereco = ?, telefone = ?,
                                                senha = ? where matricula = ?");
                $sql->execute(array(
                    $this->nome,
                    $this->sexo,
                    $this->email,
                    $this->endereco,
                    $this->telefone,
                    $this->senha,
                    $this->matricula
                ));
                if ($sql->rowCount() > 0){
                    header("location: index_alunos.php");
                }
            }else{
                header("location: index_alunos.php");
            }
        }catch(PDOException $msg){
            echo "Não foi possivel alterar o aluno: ".$msg->getMessage();
        }
    }

    public function listarID($matricula){
        try{
            if(isset($matricula)){
                $this->matricula = $matricula;

                $bd = new Conexao();
                $con = $bd->conectar();
                $sql = $con->prepare("select * from alunos where matricula = ?");
                $sql->execute(array($this->matricula));
                if($sql->rowCount() > 0){
                    return $result = $sql->fetchObject();
                }
            }
        }catch(PDOException $msg){
            echo" Não foi possivel listar o aluno:".$msg->getMessage();
        }
    }
}


?>