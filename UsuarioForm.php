<?php 
include "./controller/UsuarioController.php";
$usuario = new UsuarioController();

    if(!empty($_POST['id'])){
        $usuario->update($_POST);
        header("location: UsuarioList.php");
    }elseif(!empty($_POST)){
      $usuario->salvar($_POST);
      header("location: UsuarioList.php");
    }

    if(!empty($_GET['id'])){
      $data = $usuario->buscar($_GET['id']);
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Bom Look</title>
    <link rel="stylesheet" href="./src/styles/layout.css">
    <link rel="stylesheet" href="./src/styles/globalStyle.css">
    <link rel="stylesheet" href="./src/styles/login.css">
    <link rel="stylesheet" href="./src/styles/header.css">
    <link rel="stylesheet" href="./src/styles/snackbar.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="index.php">
          <img
            src="./public/icons/LogoPronta.svg"
            alt="Bom Look Logo"
            class="logo"
        /></a>
        </div>
      </header>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo!</h2>
                <p class="description description-primary">Cadastre-se ao lado <br>Boas compras!</p</p>
                
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie uma conta para entrar</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description description-second">ou use seu email para se registrar:</p>
                <form class="form" action="UsuarioForm.php" method="POST">
                <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id: "" ?>"/><br>
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome" name="nome" value="<?php echo !empty($data->nome) ? $data->nome: "" ?>"/><br>
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" placeholder="Telefone" name="telefone" value= "<?php echo !empty($data->telefone) ? $data->telefone: "" ?>"/><br>
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" placeholder="CPF" name="cpf" value= "<?php echo !empty($data->cpf) ? $data->cpf: "" ?>"/><br>
                    </label>
                    <button class="btn btn-second" type="submit" value="Salvar">Cadastrar</button>        
                </form>
            </div>
        </div>
    </div>
    <div id="snackbar"></div>
    <script src="./src/js/login.js"></script>
    <script src="./src/js/snackbar.js"></script>
</body>
</html>