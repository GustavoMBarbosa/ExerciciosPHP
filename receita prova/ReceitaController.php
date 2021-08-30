<?php 

class ReceitaController{



    
    public function create(){

        $obj = new Receita();

        if( isset($_POST['email']) && isset ($_POST['nome']) && isset ($_POST['titulo']) && isset ($_POST['receita']) && isset ($_POST['preparo'])) {

            $obj->setEmail($_POST['email']);
            $obj->setNome($_POST['nome']);
            $obj->setTitulo($_POST['titulo']);
            $obj->setReceita($_POST['receita']);
            $obj->setPreparo($_POST['preparo']);

            $obj->create();
        }

        include 'receita_create.php';
    }

}