<?php
require_once './conectar/conexao.php';

class Usuario{

    public $id;

    public $usuario;

    public $senha;

    public $nome;

    public function Cadastrar() {
        $db = new Database('usuario');
        return $db->insert([
                            'usuario'=> $this->usuario,
                            'senha'  => $this->senha,
                            'nome'  => $this->nome
                        ]);
    }
        
      
    public function getUsuario($usuario){
    return (new Database('usuario'))->select("usuario = '$usuario'");
    }
}
?>