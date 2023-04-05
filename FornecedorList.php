<?php
    include "./controller/FornecedorController.php";

    
        $fornecedor = new FornecedorController();
        

        if(!empty($_GET['id'])){
            $fornecedor->deletar($_GET['id']);
            header("location: FornecedorList.php");
        }

        if(!empty($_POST)){
            $load = $fornecedor->pesquisar($_POST);
        }
        else{
            $load = $fornecedor->carregar();
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
    <title>Fornecedores | Bom Look</title>
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
   #edit {
      width: 2em;
      transition: transform 0.3s;
    }
    #edit:hover {
      transform: scale(1.1);
    }
    #edit:active {
      transform: scale(1);
    }
    #excluir {
      width: 3rem;
      transition: transform 0.3s;
    }
    #excluir:hover {
      transform: scale(1.4);
    }
    #excluir:active {
      transform: scale(1.1);
    }
    #dgrey:hover {
      cursor: pointer;
      background-color: #4c4c4e;
    }

    #dgrey {
      background-color: #3b3b3f;
    }

    #dgrey button {
      background-color: transparent;
    }
    .content {
      align-items: center;
      justify-content: center;
      display: flex;
      flex-direction: column;
      padding-top: 7rem;
      
    }
    table {
      width: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      border-collapse: collapse;
      cursor: default;
      border-radius: 0.3em;
      border: 1px solid #505053;
      text-indent: initial;
      border-spacing: 2px;
    }
    th {
      padding-top: 0.1em;
      padding-bottom: 0.1em;
      background-color: #3b3b3f;
      color: #fafafa;
      padding-left: 2em;
      padding-right: 2em;
      display: table-cell;
      vertical-align: inherit;
      font-weight: bold;
      text-align: -internal-center;
      border: 1px solid #505053;
    }
    td {
      padding: 0.5rem 2rem 0.5rem 2rem;
      display: table-cell;
      vertical-align: inherit;
      border: 1px solid #505053;
    }
    h1 {
      color: var(--text);
      font-size: 3rem;
      font-weight: 500;
      margin-right: 2em;
      margin-bottom: 0.5rem;
    }
    tr:hover {
      background-color: #d6d4d49f;
    }

    .modalwrapper{
      display: none;
      position: absolute;
      height: 100vh;
      width: 100vw;
      left: 0;
      top: 0;
    }
    select:not(:-internal-list-box) {
    overflow: visible !important;
}
.search {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5em;
}
input {
    width: 10em;
    padding: 0.3em;
    background-color: rgb(230, 227, 227);
    border-radius: 0.3em 0 0 0.3em;
    box-shadow: 0 0 0.5em 0 rgb(0 0 0 / 10%);
    transition: transform 0.2s;
    font-family: "Lato", serif;
    font-size: 13px;
    border: 1px solid #f1f1f1;
    font-weight: 600;
    border: 1px solid var(--text);
}
select {
    margin-left: 2em;
    width: 12em;
    padding: 0.32em;
    background-color: rgb(230, 227, 227);
    border-radius: 0.3em;
    box-shadow: 0 0 0.5em 0 rgb(0 0 0 / 10%);
    transition: transform 0.2s;
    font-family: "Lato", sansserif;
    font-size: 12px;
    font-weight: 500;
    border: 1px solid var(--text);
}
select:hover {
  outline: none;
  border: 1px solid var(--text);
}

select:focus {
  outline: none;
}
#search-ico {
  width: 1.5rem;
}
#search-button {
    border: 1px solid var(--text);
    background-color: rgb(230, 227, 227);
    border-radius: 0 0.3em 0.3em 0;
    padding: 0.12em;
    margin: 0em;
}  
#visusuporte{
  text-decoration: none;
  color: #455392;
  transition: transform 0.1s;
  cursor:pointer; 
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
      <div class="search">
      <h1>Fornecedores Cadastrados</h1>
      <form action="FornecedorList.php" method="post">
        <select name="campo">
            <option value="id">Id</option>
            <option value="nome">Nome</option>
            <option value="data">Data</option>
        </select>
        <input type="text" name="valor"/>
        <input type="submit" value="Buscar"/>
        <a href="FornecedorForm.php">
          <input type="button" value="Cadastrar" />
        </a>

    </form>
        </div>
      <div class="card">
        <div id="myDIV">
          <table>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Contato</th>
              <th>Assunto</th>
              <th>Data</th>
              <th>Cadastrar</th>
              <th>Excluir</th>
            </tr>
            <tr>
            <?php
                foreach($load as $item){
                    echo"<tr>
                        <td>$item->id</td>
                        <td>$item->nome</td>
                        <td>$item->contato</td>
                        <td>$item->assunto</td>
                        <td>$item->data</td>
                        <td id='dgrey'><a href='./FornecedorForm.php?id=$item->id'><img src='./public/icons/editar.svg' id='edit'/></a></td>
                        <td id='dgrey'><a href='./FornecedorList.php?id=$item->id'onclick='return confirm(\"Deseja Excluir?\")'><img src='./public/icons/excluir.svg' id='excluir'/></a></td>
                    </tr>";
                }
            ?>
            </tr>
          </table>
        </div>
      </div>
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