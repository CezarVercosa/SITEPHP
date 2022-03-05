<?php
include_once("conexao.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['registrar-usuario'])){
    $retorna = ['erro' => true, 'msg' => "<p id='failed'>Email não preenchido.</p>"];
}elseif(empty($dados['registrar-senha'])){
    $retorna = ['erro' => true, 'msg' => "<p id='failed'>Senha não preenchida.</p>"];
}else{
    $email = trim($dados['registrar-usuario']);
    $senha = trim(md5($dados['registrar-senha']));
    $query_usuario = ("SELECT COUNT(*) as total FROM usuario  WHERE usuario = '$email'");
    $result_usuario = mysqli_query($conexao, $query_usuario);
    $row = mysqli_fetch_assoc($result_usuario);

    if($row['total'] >= 1){
        $retorna = ['erro' => true, 'msg' => "<p id='failed'>Email ja cadastrado.</p>"];
    }else{
        $result_usuario->close();
        $query_usuario = "INSERT INTO usuario (usuario, senha) VALUES ('$email', '$senha')";
        $usuario_unico = $conexao->prepare($query_usuario);
        $usuario_unico->execute();
        $result = $conexao->query("SELECT senha FROM usuario");

        if($result->num_rows){
            $retorna = ['erro' => false, 'msg' => "<p id='success'>Usuario cadastrado com sucesso.</p>"];
        }else{
            $retorna = ['erro' => true, 'msg' => "<p id='failed'>Usuario não cadastrado.</p>"];
        }
    }
    
}

echo json_encode($retorna);