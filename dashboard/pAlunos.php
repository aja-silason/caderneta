<?php

    include "../conexao.php";
/*Upload da imagem */
    $extensao = strtolower(substr($_FILES['fotoaluno']['name'], -5)); //pega a extensão do arquivo

    $nome_imagem = md5(time()).$extensao;//define o nome do arquivo

    $diretorio = "./assets/fotoaluno/";//define o directorio para onde é enviado o arquivo

    move_uploaded_file($_FILES['fotoaluno']['tmp_name'], "../assets/fotoaluno/".$nome_imagem); //efetua o upload do arquivo

/*fim do Upload da imagem */
    
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $classe = $_POST['classe'];
    $curso = $_POST['curso'];
    $idade = $_POST['idade'];
    $pais = $_POST['pais'];
    $bi = $_POST['bi'];
    $cargo = $_POST['cargo'];
    $nomepai = $_POST['nomepai'];
    $numeropai = $_POST['numeropai'];
    $bipai = $_POST['bipai'];
    $nomemae = $_POST['nomemae'];
    $numeromae = $_POST['numeromae'];
    $bimae = $_POST['bimae'];

    $sqladd = "insert into user (imagem, nome, telefone, classe, curso, datanasc, provincia, bi, cargo, nomepai, telefonepai, bipai, nomemae, telefonemae, bimae) values ('$nome_imagem', '$nome', '$telefone', '$classe', '$curso', '$idade', '$pais', '$bi', '$cargo', '$nomepai', '$numeropai','$bipai', '$nomemae', '$numeromae', '$bimae')";

    $adicionar = mysqli_query($connect,$sqladd);

    echo "<script>alert('Aluno adicionado com sucesso!')</script>";

    header('Location: ./index.php');

    mysqli_close($connect);

?>