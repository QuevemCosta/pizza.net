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
          <li class="nave"> <a id="navhome" href="#home"><img src="icons/home.png"> </a> </li>
          <li class="nave"> <a id="navmenu" href="#menu"> <img src="icons/menu.png" alt=""> </a> </li>
          <li class="nave"> <a id="navcontato" href="#contato"><img src="icons/contato.png" alt=""></a> </li>
          <li class="nave"> <a id="navsobre"href="#sobr"><img src="icons/sobre.png"></a> </li>
        </ul>
      </nav>
    </header>
    <section id="section">
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
      <div id="capa" class="fundo-1"></div><!--badkgroundo da capa-->
      <div id="home" class="">
        <h2>Home</h2>
        <p>
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
        </p><p>
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
                <th>Petisco</th>
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
            <img src="icons/contato.png">
          </button>
        </div>
      </div>
      <div id="contato">
        <h2>Contato</h2>
      </div>
      <div id="sobre">
        <h2>Sobre</h2>
      </div>
    </section>
    <footer>
      <p>&copy;Jarves-2019</p>
    </footer>
    <script type="text/javascript" src="scripts/main.js">

    </script>
  </body>
</html>
