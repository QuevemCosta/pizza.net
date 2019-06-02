<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="estilo/estilo.css">
  </head>
  <body>
    <header>
      <h1 id="logo">Pizza.net</h1>
      <nav id="nav">
        <ul>
          <li class="nave"> <a id="navhome" href="#home" title="Página inicial"><img src="icons/home.png"> </a> </li>
          <li class="nave"> <a id="navmenu" href="#menu" title="Cardápio"> <img src="icons/menu.png" alt=""> </a> </li>
          <li class="nave"> <a id="navcontato" href="#contato" title="Contato"><img src="icons/contato.png" alt=""></a> </li>
          <li class="nave"> <a id="navsobre"href="#sobr" title="Sobre"><img src="icons/sobre.png"></a> </li>
        </ul>
      </nav>
    </header>
    <section id="section">
      <!--Login-->
      <div id="login" class="active">
        <h2>Bem-vindo</h2>
        <p>Faça login para entrar</p>
        <form >
          <label>
            <div >E-mail</div>
            <input type="email">
          </label>
          <label>
            <div >Senha</div>
            <input type="password">
          </label>
          <button type="submit">Entrar</button>
        </form>
      </div>
      <!--Login-->

      <!--home-->
    <div id="capa" class="fundo-1"></div><!--badkgroundo da capa-->
      <div id="home" class="">
        <div class="subcapa">
          <h1>Home</h1>
          <div class="duas-colunas">
            <p>
              <h2>Home</h2>
              Lorem ipsum dolor sit amet, consectetur
              adipisicing elit, sed do eiusmod tempor incid
              idunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco labor
              is nisi ut aliquip ex ea commodo consequat. Duis aute i
              rure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepte
               ur sint occaecat cupidatat non proident, sunt
               in culpa qui officia deserunt mollit anim id est
               laborum.
            </p>
          </div>
          <div class="duas-colunas">
            <p >
              <h2>Home</h2>
              Lorem ipsum dolor sit amet, consectetur
              adipisicing elit, sed do eiusmod tempor incid
              idunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco labor
              is nisi ut aliquip ex ea commodo consequat. Duis aute i
              rure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepte
               ur sint occaecat cupidatat non proident, sunt
               in culpa qui officia deserunt mollit anim id est
               laborum.
            </p>
          </div>
        </div>
        <!--Galeria-->
        <div class="container-galeria">
          <h3>Galeria de Fotos</h3>
          <div class="galeria">
            <a href="img/burguer-2.jpg">
              <img src="img/burguer-2.jpg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
          <!--1-->
          <div class="galeria">
            <a href="img/burguer-2.jpeg">
              <img src="img/burguer-1.jpeg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
          <div class="galeria">
            <a href="img/cafe.jpg">
              <img src="img/cafe.jpg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
          <div class="galeria">
            <a href="img/salada.jpg">
              <img src="img/salada.jpg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
          <div class="galeria">
            <a href="img/cafe.jpg">
              <img src="img/cafe.jpg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
          <div class="galeria">
            <a href="img/sorvete.jpg">
              <img src="img/sorvete.jpg" alt="">
            </a>
            <div class="descricao">Add a description of the image here</div>
          </div>
        </div>
        <!--Galeria-->

      </div>
      <!--home-->

      <!--menu-->
      <div id="menu">
          <h2>Menu</h2>
            <hr/>
              <fieldset>
                <legend>Pizzas</legend>
                <table>
                  <tr>
                    <th>Pizza</th>
                    <th>P R$</th>
                    <th>M R$</th>
                    <th>G R$</th>
                    <th>XG R$</th>
                  </tr>
                  <tr>
                    <td>Franco com canela</td>
                    <td>25.00</td>
                    <td>25.00</td>
                    <td>25.00</td>
                    <td>25.00</td>
                  </tr><tr>
                    <td>Franco com canela</td>
                    <td>25.00</td>
                    <td>25.00</td>
                    <td>25.00</td>
                    <td>25.00</td>
                  </tr>
                </table>
            </fieldset>
            <fieldset>
              <legend>Bebidas</legend>
              <table>
                <tr>
                  <th>Bebida</th>
                  <th>L</th>
                  <th>R$</th>
                </tr>
                <tr>
                  <td>Refigrante</td>
                  <td>1l</td>
                  <td>12.00</td>
                </tr><tr>
                  <td>Refigrante</td>
                  <td>1l</td>
                  <td>12.00</td>
                </tr>
              </table>
          </fieldset>
          <fieldset>
            <legend>Petiscos</legend>
            <table>
              <tr>
                <th>Petiscos</th>
                <th>R$</th>
              </tr>
              <tr>
                <td>Espetinho</td>
                <td>5.00</td>
              </tr>
              <tr>
                <td>Espetinho</td>
                <td>5.00</td>
              </tr>
            </table>
        </fieldset>
        <div class="btn-flutuante">
          <button type="button" onclick="" title="Ligue agora mesmo">
            <a href="tel:+5593991155519"><img src="icons/contato.png"></a>
          </button>
        </div>
      </div>
      <!--menu-->

      <!--contato-->
      <div id="contato">
        <div>
          <h1>Contatos</h1>
        </div>
        <div class="rede-social" title="Nosso zap">
          <a href=""><img src="icons/whatsapp.png">
          <h2>+55 93 991999999</h2></a>
        </div>
        <div class="rede-social" title="Curta nossa fanpag">
          <a href="#"><img src="icons/facebook.png">
          <h2>Curta nossa página</h2></a>
        </div>
        <div class="rede-social" title="Siganos no Instagrn">
          <a href="#"><img src="icons/instagran.png">
          <h2>Siga nosso Instagran</h2></a>
        </div>
        <div class="btn-flutuante">
          <button type="button" onclick="" title="Ligue agora mesmo">
            <a href="tel:+5593991155519"><img src="icons/contato.png"></a>
          </button>
        </div>
      </div>
      <!--contato-->

      <!--Sobre-->
      <div id="sobre">
        <h2>Sobre</h2>
        <div>
          <p>
            Lorem Ipsum is simply dummy text
             of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard
              dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make
              a type specimen book. It has survived not only five
               centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in t
          </p>
        </div>
      </div>
      <!--Sobre-->

    </section>
    <footer>
      <p>&copy;Jarves-2019</p>
    </footer>
    <script type="text/javascript" src="scripts/main.js"></script>
  </body>
</html>
