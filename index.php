<?php

require_once 'conexao.php';

session_start();

/* Para manter o inicio de sessão organizado entre o panel de admin e user normal*/
if(isset($_SESSION['iniciada'])):
    if($_SESSION['id_usuario'] == 1 ):
        header('Location: ./dashboard/index.php');
    else:
        header('Location: inicio.php');
    endif;
endif;

if(isset($_POST['btnAcessar'])):
    $erros = array();
    $fonelogin = mysqli_escape_string($connect, $_POST['telefone']);
    $bilogin = mysqli_escape_string($connect, $_POST['bi']);

    if(empty($fonelogin) or empty($bilogin)):
        $erros[] = "<p class='erro3'>Preencha todos os campos para poderes iniciar sessão.</p>";
    
    else:
        $sql = "SELECT telefone FROM user WHERE telefone='$fonelogin'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0 ):
            $sql = "SELECT * FROM user WHERE telefone = '$fonelogin' AND bi = '$bilogin'";
            $resultado = mysqli_query($connect, $sql);
            
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);   

                $_SESSION['iniciada'] = true;
                $_SESSION['id_usuario'] = $dados['id'];

                header('Location: ./inicio.php');

                if($_SESSION['id_usuario'] < 2):
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
                
                <input type="text" placeholder="Insira o seu número de telefone" class="telefone" id="telefone" name="telefone" required>
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