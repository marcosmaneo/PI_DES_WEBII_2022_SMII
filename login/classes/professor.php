<?php

require_once './conectar/conexao.php';

class Professor{

    private $id;

    private $usuario;

    private $nome;

    private $email;

    private $senha;

    public function Cadastrar() {
        $db = new Database('professor');
        return $db->insert([
                            'usuario'=> "'$this->usuario'",
                            'nome'=> "'$this->nome'",
                            'email'=> "'$this->email'",
                            'senha'=> "'$this->senha'"
                            ]);
    } 
    
    public function alterarProfessor($novo_usuario, $novo_nome, $novo_email, $novo_senha){
        $this->usuario= $novo_usuario;
        $this->nome = $novo_nome;
        $this->email = $novo_email;
        $this->senha = $novo_senha;
    }    
      
    public static function getAll(){
    return (new Database('professor'))->select();

    }  

    public function getUsuario($usuario){
    return (new Database('professor'))->select("usuario = '$usuario'");

    }
    
}
    