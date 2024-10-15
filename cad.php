<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agência P.A.F.S</title>
  <link rel="stylesheet" href="src/css/style1.css">
  <link rel="stylesheet" href="src/css/reset.css">
  <link rel="stylesheet" href="src/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
  
</head>

<body>


  <div class="container">
    <div class="header">
      <h2>Criar Uma Conta</h2>
    </div>

    <form method="post" id="form" class="form" enctype="multipart/form-data" action="user.php">

      <div class="form-control">
        <label for="usercpf">CPF</label>
        <input type="text" name="txtcpf" id="usercpf" placeholder="Digite seu CPF..." maxlength="14" required/>

      </div>

      <div class="form-control">
        <label for="username">Nome de usuário</label>
        <input type="text" name="txtnome" id="username" placeholder="Digite seu nome de usuário..." required/>

      </div>

      <div class="form-control">
        <label for="usertel">Telefone</label>
        <input type="text" name="txttelefone" id="usertel" placeholder="Digite seu telefone..."  maxlength="15"/>

      </div>

      <div class="form-control">
        <label for="email">Email</label>
        <input type="text" name="txtemail" id="email" placeholder="Digite seu email..."required />

      </div>

      <div class="form-control">
        <label for="login">Login</label>
        <input type="text" name="txtlogin" id="userlogin" placeholder="Digite seu login..." required />

      </div>

      <div class="form-control">
        <label for="password
            ">Senha</label>
        <input type="password" name="txtsenha" id="password" placeholder="Digite sua senha..." required/>

      </div>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <script defer>
        document.addEventListener('DOMContentLoaded', (event) => {
            const cpfInput = document.getElementById('usercpf');

            function formatCPF(cpf) {
                
                cpf = cpf.replace(/\D/g, "");

              
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
                cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
                cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

                return cpf;
            }

            cpfInput.addEventListener('input', (event) => {
                let value = event.target.value;
                event.target.value = formatCPF(value);
            });
        });
        document.getElementById('usertel').addEventListener('input', function (e) {
            let tel = e.target.value;

        
            tel = tel.replace(/\D/g, '');

            // Aplica a máscara
            tel = tel.replace(/^(\d{2})(\d)/g, '($1) $2');
            tel = tel.replace(/(\d)(\d{4})$/, '$1-$2');

          
            e.target.value = tel;
        });

    

        
    </script>

  <script src="https://kit.fontawesome.com/f9e19193d6.js" crossorigin="anonymous"></script>

</body>

</html>