<?php

include "../conexao.php";

session_start();

if(!isset($_SESSION['iniciada'])):
    header('Location: ../index.php');
endif;
?>
<!Doctype html>
<html lang="pt-br">
<head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../css/estilomenurodape.css"/>
        <link rel="stylesheet" href="../css/estilocorpo.css"/>
        <link rel="stylesheet" href="./panel.css"/>
        <title>Dashboard</title>

        </head>
    <body>
        <div class="conteinerhome">
            <div class="menucima">
                <div class="logo">
                    <h3>Minha Caderneta</h3>
                </div>
                <div class="userdataa">
                    <ul>
                        <li><a href="perfil.php">Nome do user</a></li>
                        <li><a href="../logout.php">Sair</a></li>

                    </ul>
                </div>
            </div>

            <div class="geral">
                <div class="menu">
                    
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="panel.php">Adds/Panel</a></li>
                        <li><a href="professores.php">Professores</a></li>
                        <li><a href="alunos.php">Alunos</a></li>
                        
                    </ul>
                </div>

                <div class="conteudohome">
                    <div class="conthome" style="margin-top: 220px; margin-left: 200px;">
                        <div class="cont">

                                <!--area da 10-->
                                <!--10ª classe CEJ-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '10 ª' AND curso = 'Ciências Econômicas e Jurídicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>

                            <div class="conteinergeral">
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                

                                <!--11ª classe CFB-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '11 ª' AND curso = 'Ciências Físicas e Biológicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                
                            </div>

                                <!--area da 11-->
                                <!--11ª classe CEJ-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '11 ª' AND curso = 'Ciências Econômicas e Jurídicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>

                            <div class="conteinergeral">
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                

                                <!--11ª classe CFB-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '11 ª' AND curso = 'Ciências Físicas e Biológicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                
                            </div>

                                <!--area da 12-->
                                <!--12ª classe CEJ-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '12 ª' AND curso = 'Ciências Econômicas e Jurídicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>

                            <div class="conteinergeral">
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                

                                <!--12ª classe CFB-->
                                <?php           
                                    $sala = "SELECT classe,curso,cargo FROM user WHERE classe = '12 ª' AND curso = 'Ciências Físicas e Biológicas' AND cargo = 'Aluno' ORDER BY id LIMIT 30";
                                    $resultadosala = mysqli_query($connect, $sala); 
                                    $dadosala = mysqli_fetch_array($resultadosala);      
                                    $linhasala = mysqli_num_rows($resultadosala);
                                ?>
                                <div class="carduser">
                                    <div class="barra"></div>
                                    <div class="nomecard">
                                        <h3><?php echo "Classe:", $dadosala['classe'] ?></h3>
                                        <h3><?php echo "Curso:", $dadosala['curso'] ?></h3>
                                        <h3><?php echo "Existem ", $linhasala, " alunos" ?></h3>
                                    </div>
                                    <div class="barra"></div>
                                </div>
                                <?
                                mysqli_close($connect);
                                ?>
                            </div>
                
                        </div>
                </div>

        </div>
        
    </body>
    
</html>