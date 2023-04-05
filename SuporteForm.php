<?php 
include "./controller/SuporteController.php";
$suporte = new SuporteController();

    if(!empty($_POST['id'])){
        $suporte->update($_POST);
        header("location: SuporteList.php");
    }elseif(!empty($_POST)){
      $suporte->salvar($_POST);
      header("location: SuporteList.php");
    }

    if(!empty($_GET['id'])){
      $data = $suporte->buscar($_GET['id']);
  }
?>

</html>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <link
      rel="shortcut icon"
      href="./public/icons/LogoPronta.svg"
      type="image/x-icon"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suporte | Bom Look</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <script src="./src/js/slider.js" defer></script>
    <script src="./src/js/snackbar.js" defer></script>

    <script
      src="https://kit.fontawesome.com/b5ad8d5d3f.js"
      crossorigin="anonymous"
      defer
    ></script>
    <link rel="stylesheet" href="./src/styles/globalStyle.css" />
    <link rel="stylesheet" href="./src/styles/layout.css" />
    <link rel="stylesheet" href="./src/styles/header.css" />
    <link rel="stylesheet" href="./src/styles/snackbar.css" />
    <link rel="stylesheet" href="./src/styles/indexadm.css" />
  </head>
  <style>
    input[type=text], select {
      width: 60rem;
      padding: 10px 10px;
      margin: 10px 0;
      display: flex;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #515153;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: transform 0.3s;
    }
    
    input[type=submit]:hover {
      transform: scale(1.1);
    }
    input[type=submit]:active {
      transform: scale(1);
    }
    div {
      border-radius: 5px;
    }
    .content {
      align-items: center;
      justify-content: center;
      display: flex;
      flex-direction: column;
      padding-top: 7rem;
    }
    h3 {
      color: var(--text);
      font-size: 3rem;
      font-weight: 500;
      padding-bottom: 6rem;
    
    }
</style>
  <body class="layout">
    <header>
      <div class="header_adm">
      <a href="./FornecedorList.php">Fornecedores</a><br>
        <a href="./ProdutoList.php">Estoque</a><br>
        <a href="./SuporteList.php">Suporte</a><br>
      </div>
      <div>
        <nav>
          <div class="dropdown3">
        <a href="adm.html"><img src="./public/icons/adm.svg"></img> </a>
      
      <div class="dropdown-content3">
          <a href="index.html">Sair</a>
        </div>
      </div>
  </nav>  <a href="index.php">
          <img
            src="./public/icons/LogoPronta.svg"
            alt="Bom Look Logo"
            class="logo-adm"
        /></a>
      </div>
    </header>
    <div class="content">
      <h3>Cadastro de Suporte</h3>
      <form action="SuporteForm.php" method="POST">
        <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id: "" ?>"/><br>
        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo !empty($data->nome) ? $data->nome: "" ?>"/><br>
        <label>Email</label><br>
        <input type="text" name="email" value= "<?php echo !empty($data->email) ? $data->email: "" ?>"/><br>
        <label>Assunto</label><br>
        <input type="text" name="assunto" value= "<?php echo !empty($data->assunto) ? $data->assunto: "" ?>"/><br>
        <label>Data</label><br>
        <input type="date" name="data" value= "<?php echo !empty($data->data) ? $data->data: "" ?>"/><br>

        <input type="submit" value="Salvar"/><br>
    
    
    </form>
      
  </div>
  <footer>
      <div>
        <i></i>
        <i></i>
        <i></i>
      </div>
      <div>
        <p>Tecnico em Informática - Integrado &emsp;&emsp; Programação Web 2 <br><br>Alunos: Bernardo Augusto Picoli e João Vitor de Carvalho</p>
      </div>
      <div></div>
    </footer>
    <div id="snackbar"></div>
  </body>
</html>