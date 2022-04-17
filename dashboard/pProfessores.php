<?php

include "../conexao.php";
/*Upload da imagem */
    $extensao = strtolower(substr($_FILES['fotoprofessor']['name'], -5)); //pega a extensão do arquivo

    $nome_imagem = md5(time()).$extensao;//define o nome do arquivo

    $diretorio = "../assets/fotoprofessor/";//define o directorio para onde é enviado o arquivo

    move_uploaded_file($_FILES['fotoprofessor']['tmp_name'], "../assets/fotoprofessor/".$nome_imagem); //efetua o upload do arquivo

/*fim do Upload da imagem */


$nomeprofessor = $_POST['nomeprofessor'];
$telefoneprofessor = $_POST['telefoneprofessor'];
$classeprofessor = $_POST['classeprofessor'];
$curso = $_POST['curso'];
$idade = $_POST['idade'];
$pais = $_POST['pais'];
$bi = $_POST['bi'];
$cargo = $_POST['cargo'];
$disciplina = $_POST['disciplina'];

$sqladdprof = "insert into user (imagem, nome, telefone, classe, curso, datanasc, provincia, bi, cargo, disciplina) values ('$nome_imagem', '$nomeprofessor', '$telefoneprofessor', '$classeprofessor', '$curso', '$idade', '$pais', '$bi', '$cargo','$disciplina')";


    $adicionar = mysqli_query($connect,$sqladdprof);

    echo "<script>alert('Professor adicionado com sucesso!')</script>";

    header('Location: ./index.php');

    mysqli_close($connect);

?>