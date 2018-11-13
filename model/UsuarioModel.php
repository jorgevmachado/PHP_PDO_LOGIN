<?php

class UsuarioModel
{
    public $id;
    public $email;
    public $senha;

    public function buscarUsuario()
    {
        $senhaMd5 = md5($this->senha);
        $query =
            "SELECT email, senha 
             FROM usuarios
             WHERE email = :email
             AND senha = :senha";
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $senhaMd5);
        $stmt->execute();
        $linha = $stmt->fetch();
        $this->email = $linha['email'];
        $this->senha = $linha['senha'];

    }
}