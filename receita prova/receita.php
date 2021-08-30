<?php
class Receita{

    private $id;
    private $email;
    private $nome;
    private $titulo;
    private $receita;
    private $preparo;

    private $con;

    public function __construct()
    {
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    
    public function create(){

        $sql = $this->con->prepare("INSERT INTO receitas (NULL, email, nome, titulo, receita, preparo) VALUES (NULL, ?, ?, ?, ?, ?)");
        $sql->execute([$_POST['email'], $_POST['nome'], $_POST['titulo'], $_POST['receita'], $_POST['preparo']]);
        // OCORREU UM ERRO
        if( $sql->errorCode()!="00000"){
            // EXIBE UMA MENSAGEM DE ERRO DO SQL
            echo $sql->errorInfo()[2];
        }

    }

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

    public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

    public function getTitulo()
	{
		return $this->titulo;
	}

	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;

		return $this;
	}

    public function getReceita()
	{
		return $this->receita;
	}

	public function setReceita($receita)
	{
		$this->receita = $receita;

		return $this;
	}

    public function getPreparo()
	{
		return $this->preparo;
	}

	public function setPreparo($preparo)
	{
		$this->preparo = $preparo;

		return $this;
	}


}