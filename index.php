<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CadastroLogin.css">
    <title>Home</title>
</head>
<body>
    <h1 class="title">VAGASPARK</h1>
    <div class="container" id="container">
      <div class="form-container sign-up-container">   

        <form method="POST" action="banco.php">
          <h1>Crie sua conta</h1> 
          <span id="teste">Preencha os campos para se registrar</span>
         
          <input type="email" id="email" name="email"  placeholder="Email" />
          <input type="password" id="senha" name="senha" placeholder="Senha" />
          <input type="text" id="cpf" name="cpf" placeholder="CPF/CNPJ" />
          <input type="text" id="placa" name="placa" placeholder="Placa do veiculo" />
         <button type="submit" onclick="validarCPF(),validateFormEmail(), validateFormSenha()" class="criarbot">Criar</button>
        </form>
        <?php if (isset($_SESSION["inserido_com_sucesso"]) && $_SESSION["inserido_com_sucesso"]): ?>
		<h1>Dados cadastrados com sucesso!</h1>
	<?php else: ?>
		<h1>Ocorreu um erro ao cadastrar os dados.</h1>
	<?php endif; ?>

	<?php
	// Limpar a variável de sessão para que a mensagem não seja exibida novamente na próxima vez que a página for carregada
	unset($_SESSION["inserido_com_sucesso"]);
	?>
      </div>
      <div class="form-container sign-in-container">
        <form>
          <h1>Entrar</h1>
          <span>Preencha os campos para entrar</span>
          
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Senha" />
          <a href="#">Esqueceu sua senha?</a>
          <button type="button" class="criarbot">Entrar</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Que bom que você voltou!</h1>
            <p>Para se manter conectado conosco, faça o login com suas informações pessoais</p>
            <button class="ghost" id="signIn" class="criarbot">Entrar</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Vamos ser amigos!</h1>
            <p>Introduza os seus dados pessoais e comece a viajar conosco</p>
            <button class="ghost" id="signUp" class="criarbot">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
    
  
    <script src="CadastroLogin.js"></script>
</body>
</html>