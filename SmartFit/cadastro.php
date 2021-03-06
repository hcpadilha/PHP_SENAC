<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/5.1/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cadastro Smartfit</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./login_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="icon" href="./img/icon.png" sizes="180x180">

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./login_files/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="validacaoRegistro.php" method="post">
    <img class="mb-4" src="./img/icon.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal">Cadastre-se</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" name="nome" class="form-control" id="floatingnome" >
      <label for="floatingnome">Nome</label>
    </div>
    <div class="form-floating">
      <input type="text" name="telefone" class="form-control" id="floatingtelefone" >
      <label for="floatingtelefone">Telefone</label>
    </div>
    <div class="form-floating">
      <input type="text" name="cpf" class="form-control" id="floatingcpf" >
      <label for="floatingcpf">CPF</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">senha</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-dark bg-warning" type="submit">Enviar</button>
      <hr>
    <h4 class="mt-5">J?? tem Login?</h4>
      <a class="w-100 btn btn-lg btn-dark bg-warning" href="login.php">Logar-se</a>
    </div>
  </div>
    <p class="mt-5 mb-3 text-muted">?? 2022</p>
  </form>
</main>


    
  

</body></html>