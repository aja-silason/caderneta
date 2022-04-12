<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./panel.css">
    <title>Panel</title>
</head>
<body class="panel">

    <div class="menu">
        <div>
            <a href="#">cPanel</a>
        </div>
        <a href="index.php">Sair do Panel</a>
    </div>

    <!-- Aluno--> 
    <div class="addaluno">
        <h2>Adicionar aluno novo a escola</h2>
        <form action="professores.html" method="post" enctype="multipart/form-data">

            <span>Fotografia tipo passe</span>
            <input type="file" riquered class="fotoaluno" id="fotoaluno" name="fotoaluno">

            <input type="text" placeholder="Nome completo" class="nome" id="nome" name="nome" riquered>

            <input type="number" placeholder="Número de telefone" class="telefone" id="telefone" name="telefone" riquered>


            <select name="classe" id="classe" class="classe">
                <option>10 ª</option>
                <option>11 ª</option>
                <option>12 ª</option>
            </select>

            <select name="curso" id="curso" class="curso">
                <option>Ciências Físicas e Biológicas</option>
                <option>Ciências Econômicas e Jurídicas</option>
            </select>
                    
            <input type="date" placeholder="Insira a sua idade" class="idade" id="idade" name="idade" riquered>

            <select name="pais" id="paiscreate" class="paiscreate">
                <option>Natural de: </option>
                <option>Bengo</option>
                <option>Benguela</option>
                <option>Bié</option>
                <option>Cabinda</option>
                <option>Cuando Cubango</option>
                <option>Cuanza Norte</option>
                <option>Cuanza Sul</option>
                <option>Cunene</option>
                <option>Huambo</option>
                <option>Huíla</option>
                <option>Luanda</option>
                <option>Lunda Norte</option>
                <option>Lunda Sul</option>
                <option>Malanje</option>
                <option>Moxico</option>
                <option>Namibe</option>
                <option>Uíge</option>
                <option>Zaíre</option>
                <option>Outra</option>
            </select>

            <input type="text" placeholder="B.I. tudo em minúscula" class="bi" id="bi" name="bi" riquered>

            <select name="cargo" id="cargo" disabled="disabled">
                <option>Professor</option>
            </select>

            <!--Dados encarregados-->

            <span>Dados do encarregados: Pai</span> 

            <input type="text" placeholder="Nome completo do Pai" class="nomepai" id="nomepai" name="nomepai" riquered>

            <input type="text" placeholder="Número de Telefone" class="numeropai" id="numeropai" name="numeropai" riquered>
            
            <input type="text" placeholder="B.I./minúscula" class="bipai" id="bipai" name="bipai" riquered>

            <span>Dados do encarregados: Mãe</span> 

            <input type="text" placeholder="Nome completo do Mãe" class="nomemae" id="nomemae" name="nomemae" riquered>

            <input type="text" placeholder="Número de Telefone" class="numeromae" id="numeromae" name="numeromae" riquered>
            
            <input type="text" placeholder="B.I./minúscula" class="bimae" id="bimae" name="bimae" riquered>

            <!--Dados encarregados-->


            <button type="submit"class="btnSolicitar" id="btnSolicitar" name="btnSolicitaraluno">Criar Conta de aluno</button>
        </form>
    </div>

    <!--Professor-->
    <div class="addprofessor">
        <h2>Adicionar novo professor a escola</h2>
        <form action="professores.html" method="post" enctype="multipart/form-data">

            <span>Fotografia meio corpo</span>
            <input type="file" riquered class="fotoprofessor" id="fotoprofessor" name="fotoprofessor">

            <input type="text" placeholder="Nome completo" class="nomeprofessor" id="nomeprofessor" name="nomeprofessor" riquered>

            <input type="number" placeholder="Número de telefone" class="telefoneprofessor" id="telefoneprofessor" name="telefoneprofessor" riquered>

            <span>Classe a Lecionar</span>
            <select name="classeprofessor" id="classeprofessor" class="classeprofessor">
                <option>10 ª</option>
                <option>11 ª</option>
                <option>12 ª</option>
            </select>

            <span>Curso a Lecionar</span>
            <select name="curso" id="curso" class="curso">
                <option>Ciências Físicas e Biológicas</option>
                <option>Ciências Econômicas e Jurídicas</option>
            </select>
                    
            <input type="date" placeholder="Insira a sua idade" class="idade" id="idade" name="idade" riquered>

            <select name="pais" id="paiscreate" class="paiscreate">
                <option>Natural de: </option>
                <option>Bengo</option>
                <option>Benguela</option>
                <option>Bié</option>
                <option>Cabinda</option>
                <option>Cuando Cubango</option>
                <option>Cuanza Norte</option>
                <option>Cuanza Sul</option>
                <option>Cunene</option>
                <option>Huambo</option>
                <option>Huíla</option>
                <option>Luanda</option>
                <option>Lunda Norte</option>
                <option>Lunda Sul</option>
                <option>Malanje</option>
                <option>Moxico</option>
                <option>Namibe</option>
                <option>Uíge</option>
                <option>Zaíre</option>
                <option>Outra</option>
            </select>

            <input type="text" placeholder="B.I. tudo em minúscula" class="bi" id="bi" name="bi" riquered>

            <select name="cargo" id="cargo" disabled="disabled">
                <option>Professor</option>
            </select>


            <button type="submit"class="btnSolicitarprofessor" id="btnSolicitarprofessor" name="btnSolicitarprofessor">Criar Conta de professor</button>
        </form>
    </div>
    
    <div class="addanuncios">
        <h2>Adicionar anúnico a vitrini da escola</h2>
        <form action="professores.html" method="post" enctype="multipart/form-data">

            <input type="text" placeholder="Título do Anúncio" class="nomeprofessor" id="nomeprofessor" name="nomeprofessor" riquered>

            <textarea type="text" placeholder="Escreva aqui o anúnico" class="nomeprofessor" id="nomeprofessor" name="nomeprofessor" riquered></textarea>


            <button type="submit"class="btnSolicitarprofessor" id="btnSolicitarprofessor" name="btnSolicitarprofessor">Criar anúnico</button>
        </form>
    </div>
    
    <div class="addrostos">
        <h2>Adicionar Rostos</h2>
        <form action="professores.html" method="post" enctype="multipart/form-data">

            <span>Fotografia meio corpo</span>
            <input type="file" riquered class="fotorosto" id="fotorosto" name="fotorosto">

            <input type="text" placeholder="Nome completo" class="nomeprofessor" id="nomerosto" name="nomerosto" riquered>

            <span>Classe do aluno</span>
            <select name="classerosto" id="classerosto" class="classerosto">
                <option>10 ª</option>
                <option>11 ª</option>
                <option>12 ª</option>
            </select>

            <span>Curso do aluno</span>
            <select name="cursorosto" id="cursorosto" class="cursorosto">
                <option>Ciências Físicas e Biológicas</option>
                <option>Ciências Econômicas e Jurídicas</option>
            </select>
                    
            <select name="cargorosto" id="cargorosto">
                <option>Quadro de Honra</option>
                <option>Rostos da Semana</option>
            </select>


            <button type="submit"class="btnSolicitarrostos" id="btnSolicitarrostos" name="btnSolicitarrostos">Adicionar rosto</button>
        </form>
    </div>
        
    <div class="footer">
        <a href="index.php">Sair do Panel</a>
        <div>
            <a href="#">cPanel</a>
        </div>
    </div>

</body>
</html>