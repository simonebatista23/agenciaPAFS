<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência P.A.F.S</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/login.css">
</head>

<body>


    <main class="container">
      
        <form method="post" class="form" enctype="multipart/form-data" action="valida.php">
            <header class="cabecalho">
                <h2>Bem Vindo(a)</h2>
              
            </header>


            <div class="email estilo">

                <input type="email" name="txtemail" id="useremail" placeholder="Seu E-mail...">
            </div>

            <div class="senha estilo">
        
                <input type="password" name="txtsenha" id="usersenha" placeholder="Sua Senha...">
            </div>
            <div class="bnt">

                <button type="submit" name="btn-login" class="button ">
                    Acesse sua conta
                </button>
            </div>
            
            <div class="container-validacao">
                <a href="cad.php"  class="validacao">Ainda não cadastrado</a>
            </div>

        </form>

    </main>

</body>

</html>