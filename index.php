<?php

require_once 'conexao.php';

session_start();

/* Para manter o inicio de sessão organizado*/
if(isset($_SESSION['logado'])):
    header('Location: inicio.php');
endif;

if(isset($_POST['btnAcessar'])):
    $erros = array();
    $fonelogin = mysqli_escape_string($connect, $_POST['telefone']);
    $bilogin = mysqli_escape_string($connect, $_POST['bi']);

    $verificacao1 = "SELECT nome FROM admin_login WHERE nome = '$fonelogin'";
    $result1 = mysqli_query($connect, $verificacao1);

    $verificacao2 = "SELECT pass FROM admin_login WHERE pass = '$bilogin'";
    $result2 = mysqli_query($connect, $verificacao2);

    if($fonelogin = $result1 and $bilogin = $result2):
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id'];

            header('Location: dashboard/index.php');

    else:
        if(empty($fonelogin) or empty($bilogini)):
        $erros[] = "<p class='erro3'>Preencha todos os campos para poderes iniciar sessão.</p>";
    
        else:
            $sql = "SELECT telefone FROM user WHERE telefone='$fonelogin'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0 ):
                $sql = "SELECT * FROM user WHERE telefone = '$fonelogin' AND pass = '$pass'";
                $resultado = mysqli_query($connect, $sql);
                
                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);   

                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];

                    header('Location: home.php');

                    if($_SESSION['id_usuario'] == 1):
                        header('Location: ./dashboard/index.php');
                    endif;

                else:
                    $erros[] = "<p class='erro'>Usuário não existe, crie uma conta se não tiveres uma.</p>";
                
                endif;

            else:
                $erros[] = "<p class='erro2'>Usuário não existe, crie uma conta se não tiveres uma.</p>";
            endif;

        endif;
    
    endif;
    
endif;
?>

<!Doctype html>
<html lang="pt-br">
        <head>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="css/estilologincadastrar.css"/>
        </head>
        
    <body>
    
        <div class="bannerlogin">

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                
                <h1 style=" margin-left: -30px; text-align:center;">Acessar a minha Caderneta</h1>
                
                <input type="text" placeholder="Insira o seu número de telefone" class="telefone" id="telefone" name="telefone">
               <br/>
               <br/>
                <input type="text" placeholder="Insira o seu número do BI" class="pass" id="bi" name="bi">
                
                <?php
                if(!empty($erros)):
                    foreach($erros as $erro):
                        echo $erro;
                    endforeach;
                endif;
                ?>
                
                <input type="submit" value="Acessar" class="btnAcessar" id="btnAcessar" name="btnAcessar">
                
            </form>
            
            
            <p style="text-align:center; color: darkgray; margin: 0px;">&copy; <script>document.write(new Date().getFullYear());</script> - Caderneta</p>
            
        </div>
        
    </body>
</html>