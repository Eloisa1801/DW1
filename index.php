<?php
    $nome=$_POST['nome'];
    $arr = ['Carlos', 'Ana', 'Julia'];
    $arr[]=$nome;

    SESSION_START();
    if($_SERVER['HTTP_METHOD']=='POST'){
            $_SESSION['nomes'][]=$_POST['nome'];
    }

    foreach($_SESSION['nomes'] as $value){

    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./aula01.css"/>
    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <div class="box1">

            <div class="perfil">

            </div>
            <div class="dados">
                <form action='index.php' method="POST">
                    <label for="fname">Nome:</label>
                    <input type="text" id="lname" name="nome"><br><br>
                
                        <button type="submit">Alterar</button>
                    
                </form>
            </div>

        </div>
        <div class="box2">
            <h5>
                Enquanto uma manifestação linguística, o texto é produzido em um dado espaço e momento. Cenário e tempo compõem o que se chama de contexto. Além disso, são considerados informações contextuais: quem fala o texto; quem o escuta; quais são as ideologias, ética e moral do instante da produção e execução textuais, entre outros elementos. Para interpretar um texto, é fundamental levar em consideração tais informações vinculadas ao contexto.
            </h5>

            <ul>
                <?php
                    foreach($arr as $value){
                        echo "<li>".$value."</li>";
                    }
                ?>
            </ul>
            
            
        </div>

    </div>

</body>
</html>