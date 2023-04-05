<?php 
include "./controller/ProdutoController.php";
$produto = new ProdutoController();

    if(!empty($_POST['id'])){
        $produto->update($_POST);
        header("location: ProdutoList.php");
    }elseif(!empty($_POST)){
      $produto->salvar($_POST);
      header("location: ProdutoList.php");
    }

    if(!empty($_GET['id'])){
      $data = $produto->buscar($_GET['id']);
  }
?>

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
    <title>Editar produto | Bom Look</title>
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
    <link rel="stylesheet" href="./src/styles/exprodutoedit.css" />
    <link rel="stylesheet" href="./src/styles/snackbar.css" />
    <link rel="stylesheet" href="./src/styles/indexadm.css" />
  </head>
  <body class="layout">
    <header>
      <div class="header_adm">
        <a href="./FornecedorList.php">Fornecedores</a><br>
        <a href="./ProdutoList.php">Estoque</a><br>
        <a href="./SuporteList.php">Suporte</a><br>
        <a href="./UsuarioList.php">Usuarios</a><br>
      </div>
      <div>
        <nav>
          <div class="dropdown3">
        <a href="adm.html"><img src="./public/icons/adm.svg"></img> </a>
      
      <div class="dropdown-content3">
          <a href="UsuarioForm.php">Cadastrar</a>
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
      <div class="container">
        <img src="./public/icons/no-image.jpg" alt="" />
      </div>

      <form action="ProdutoForm.php" method="POST">
      <div class="aside" >
        <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id: "" ?>"/><br>
        <input class="edit_input" type="text" placeholder="Nome produto.." name="nome" value="<?php echo !empty($data->nome) ? $data->nome: "" ?>"/><br />
        <input class="editrs_input" type="text" name="preco" placeholder="R$" value= "<?php echo !empty($data->preco) ? $data->preco: "" ?>"/>
        <h4>Quantidade</h4>
        <input class="editrs_input" name="quantidade" type="text" value= "<?php echo !empty($data->quantidade) ? $data->quantidade: "" ?>" placeholder="0" />
        <h4>Adicionar Tamanho</h4>
        <input class="editrs_input" type="text" name="tamanho" placeholder="P, M, G, GG" value= "<?php echo !empty($data->tamanho) ? $data->tamanho: "" ?>"/><br>
        <h4>Adicionar Imagem</h4>
        <input type="file" name="img" id="fileToUpload" value= "<?php echo !empty($data->img) ? $data->img: "" ?>">
        <h3>Descrição</h3>
        <input class="editdesc_input" type="text" placeholder="Descrição..." name="descricao" value= "<?php echo !empty($data->descricao) ? $data->descricao: "" ?>"/></br>
        <input type="submit" value="Salvar"/><br>

      </div>
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
