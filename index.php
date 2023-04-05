
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
    <title>Loja Bom Look</title>
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
    <link rel="stylesheet" href="./src/styles/products.css" />
    <link rel="stylesheet" href="./src/styles/card.css" />
    <link rel="stylesheet" href="./src/styles/filter.css" />
    <link rel="stylesheet" href="./src/styles/snackbar.css" />
    <link rel="stylesheet" href="./src/styles/indexadm.css" />
  </head>
  <body class="layout">
    <header>
      <div class="header_adm">
        <a href="ProdutoList.php">Estoque</a>
        <a href="FornecedorList.php">Fornecedores</a>
        <a href="suporteList.php">Suporte</a>
        <a href="./UsuarioList.php">Usuarios</a><br>
      </div>
      <form class="search">
        <input type="text" placeholder="O que você procura?" /><button
          type="submit"
        >
          <i class="fas fa-search"></i>
        </button>
      </form>
      <a href="login.html"><i class="fas fa-user"></i> </a>
      <a href="carrinho.html"><i class="fas fa-shopping-cart"></i> </a>
      <div>
        <nav>
          <div class="dropdown3">
            <a href="adm.html"><img src="./public/icons/adm.svg"/></a>
            <div class="dropdown-content3">
              <a href="UsuarioForm.php">Cadastrar</a>
            </div>
        </div>
  </nav>  <a href="index.html">
          <img
            src="./public/icons/LogoPronta.svg"
            alt="Bom Look Logo"
            class="logo-adm"
        /></a>
      </div>
    </header>
    <div class="content">
      <div class="aside">
        <h3 class="filter_title">FILTROS</h3>
        <h4 class="filter_subtitle_cor">COR</h4>
        <div class="cores_column">
          <div class="cores_line">
            <button class="cor preto"></button>
            <button class="cor cinza"></button>
            <button class="cor vermelho"></button>
            <button class="cor amarelo"></button>
          </div>
          <div class="cores_line">
            <button class="cor roxo"></button>
            <button class="cor rosa"></button>
            <button class="cor verde"></button>
            <button class="cor azul"></button>
          </div>
        </div>
        <h4 class="filter_subtitle">TAMANHO</h4>
        <div class="btn_tam">
          <button>PP</button>
          <button>P</button>
          <button>M</button>
          <button>G</button>
          <button>GG</button>
        </div>
        <hr />
        <h4 class="filter_subtitle">
          VALOR <span id="slider-value">R$ 0,00</span>
        </h4>
        <div class="filter_valor">
          <input
            class="slider"
            type="range"
            min="0"
            max="100"
            value="0"
            step="0.1"
          />
          <div class="row">
            <span>R$ 1,00</span>
            <span>R$ 329,00</span>
          </div>
          <hr />
        </div>
        <h4 class="filter_subtitle">GÊNERO</h4>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Feminino </label>
        </div>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Masculino </label>
        </div>
        <hr />
        <h4 class="filter_subtitle">MARCA</h4>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Lacoste </label>
        </div>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Nike</label>
        </div>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Adidas </label>
        </div>
        <div class="filter_info">
          <input type="checkbox" />
          <label> Puma </label>
        </div>
        <hr />
      </div>

      <div class="container">
        <h3 class="title">
          <img id="logo-lacoste" src="./public/icons/logo-lacoste.svg" alt="" />
        </h3>
        <div class="cardrow">
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportMasc-Lacoste.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.lacoste.com/br/lacoste/masculino/vestuário/camisetas/camiseta-lacoste-masculina-tecnica/TH7618-21.html?color=166-->
                <h4>Camiseta Lacoste Técnica Masculina</h4>
                <span>R$ 59,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportFem-Lacoste.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.lacoste.com/br/twisting-the-legacy/camiseta-feminina-lacoste-sport-tennis-em-dois-materiais-com-stretch/TF9491-21.html?color=R20-->
                <h4>Camiseta Lacoste SPORT Tennis Feminina</h4>
                <span>R$ 69,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiMasc-Lacoste.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.lacoste.com/br/lacoste/masculino/vestuário/camisetas/camiseta-masculina-em-jersei-de-algodão-pima-com-gola-redonda/TH6709-21.html?color=02S-->
                <h4>Camiseta em Jérsei de Algodão Masculina</h4>
                <span>R$ 49,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiFem-Lacoste.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.lacoste.com/br/lacoste/feminino/vestuário/camisetas/camiseta-feminina-em-algodão-premium-com-decote-em-v/TF5458-21.html?color=166-->
                <h4>Camiseta em Algodão com Decote Feminina</h4>
                <span>R$ 59,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
        </div>
        <h3 class="title">
          <img id="logo-nike" src="./public/icons/logo-nike.svg" alt="" />
        </h3>
        <div class="cardrow">
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportMasc-Nike.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.nike.com.br/camiseta-nike-pro-masculina-580-588-592-180420?gridPosition=A3-->
                <h4>Camiseta Nike Pro Masculina</h4>
                <span>R$ 64,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportFem-Nike.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.nike.com.br/camiseta-nike-infinite-feminina-1-26-29-253195?gridPosition=2&gridPosition=2-->
                <h4>Camiseta Nike Infinite Feminina</h4>
                <span>R$ 69,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiMasc-Nike.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.nike.com.br/camiseta-nike-sb-masculina-580-588-592-346376?gridPosition=O2-->
                <h4>Camiseta Nike SB Masculina</h4>
                <span>R$ 59,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiFem-Nike.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.nike.com.br/camiseta-nike-air-feminina-1-26-28-282486?gridPosition=X3-->
                <h4>Camiseta Nike Air Feminina</h4>
                <span>R$ 64,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
        </div>
        <h3 class="title">
          <img id="logo-adidas" src="./public/icons/logo-adidas.svg" alt="" />
        </h3>
        <div class="cardrow">
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportMasc-Adidas.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.adidas.com.br/camiseta-esportiva-aeroready-designed-to-move/GM2090.html-->
                <h4>Camiseta Esportiva Aeroready</h4>
                <span>R$ 68,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportFem-Adidas.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.adidas.com.br/camiseta-essentials-slim-3-stripes/GL0784.html-->
                <h4>Camiseta Essentials Slim Feminina</h4>
                <span>R$ 69,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiMasc-Adidas.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.adidas.com.br/camiseta-adicolor-classics-trefoil/H06643.html -->
                <h4>Camiseta Adicolor Classics</h4>
                <span>R$ 54,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiFem-Adidas.jpg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://www.adidas.com.br/camiseta-loungewear-essentials-logo/GL0759.html-->
                <h4>Camiseta Loungewear Essentials Feminina</h4>
                <span>R$ 69,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
        </div>
        <h3 class="title">
          <img id="logo-puma" src="./public/icons/logo-puma.svg" alt="" />
        </h3>
        <div class="cardrow">
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportMasc-Puma.jpeg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://br.puma.com/camiseta-short-sleeve-training-520899-01.html -->
                <h4>Camiseta Short Sleeve Training Masculina</h4>
                <span>R$ 69,90</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/SportFem-Puma.jpeg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://br.puma.com/camiseta-essentials-logo-feminina-521185-01.html -->
                <h4>Camiseta Essentials Logo Feminina</h4>
                <span>R$ 70,00</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiMasc-Puma.jpeg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://br.puma.com/camiseta-glitch-printed-masculina-533116-31.html -->
                <h4>Camiseta Glith Printed Masculina</h4>
                <span>R$ 59,90</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="imgdiv">
              <img
                src="./public/products/CamiFem-Puma.jpeg"
                alt="Imagem Produto"
              />
            </div>
            <div class="info">
              <div>
                <!--https://br.puma.com/camiseta-evostripe-feminina-589143-01.html -->
                <h4>Camiseta Evostripe Feminina</h4>
                <span>R$ 64,99</span>
              </div>
              <div>
                <a href="exemploproduto.html">Visualizar</a>
                <a href="carrinho.html"> Comprar </a>
              </div>
            </div>
          </div>
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
