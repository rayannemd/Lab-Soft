
<?php include 'conexoeshealthlife/menu.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      http-equiv="Content-Security-Policy"
      content="default-src 'self'; script-src 'self'"
      />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Healthy Life</title>
  </head>

  <body>
<!--     <header>
      <img src="assets/logo.svg" alt="Logo HealthyLife" />
      <nav>
        <ul>
          <a href="">
            <li>Tela Inicial</li>
          </a>
          <a href="indiceIMC.html">
            <li>IMC</li>
          </a>
          <a href="indiceIAC.html">
            <li>IAC</li>
          </a>
          <a href="">
            <li>Histórico</li>
          </a>
          <div>
            <a href=""><img src="assets/Icon-color.svg" alt="" /></a>
            <a href=""><img src="assets/faq 1.svg" alt="" /></a>
          </div>
        </ul>
      </nav>
    </header>
 -->
    <main>
      <div class="division-main">
        <div class="content-main">
          <aside class="aside-top">
            <!-- <img src="assets/3pontos.svg" alt=""> -->
            <h1>Healthy Life</h1>
            <strong>Para uma vida mais saudável.</strong>
            <p>
              Totalmente desenvolvido a promover funções, cálculos<br />
              e diagnósticos precisos a favor de clínicas e academias,<br />
              assim, tendo maior responsabilidade com a vida da nossa Sociedade.
            </p>
            <a id="index" href="indiceIMC.php">Ir aos índices</a>
            <div class="imgs">
              <a href=""
                ><img src="../src/assets/insta.svg" alt="instagram"
              /></a>
              <a href=""><img src="../src/assets/tweeter.svg" alt="" /></a>
              <a href=""><img src="../src/assets/facebook.svg" alt="" /></a>
            </div>
          </aside>
          <div class="effects-icons-page">
            <img
              id="iconRandom"
              src="../src/assets/effect-icon-page.svg"
              alt=""
            />
            <img
              id="cursiveBarIcon"
              src="../src/assets/cursive-bar-icon.svg"
              alt=""
            />
            <img
              id="iconRandomRotated"
              src="../src/assets/effect-icon-page.svg"
              alt=""
            />
            <img id="points" src="../src/assets/3pontos.svg" alt="" />
          </div>
          <article>
            <img src="assets/imgs/medical-image.png" alt="" />
          </article>
        </div>
        <div class="secondSession">
          <aside class="aside-down">
            <img src="assets/imgs/circle-medicine.png" alt="" />
            <div class="informations">
              <h1>IAC</h1>
              <p>
                O Índice de Adiposidade Corporal, mais conhecido como IAC, é um
                método utilizado para medir a gordura corporal. Para o cálculo
                desse índice são utilizadas medidas antropométricas, como
                circunferência do quadril e altura.
              </p>
             <!--  <a href="indiceIAC.html">Calcular IAC</a> -->
            </div>
          </aside>
          <div effects-icons-page>
            <img
              id="iconRounded"
              src="../src/assets/effect-icon-page.svg"
              alt=""
            />

            <img
              id="iconRotate"
              src="../src/assets/effect-icon-page.svg"
              alt=""
            />
          </div>
          <article class="article-down">
            <div id="info-article" class="informations">
              <h1>IMC</h1>
              <p>
                O Índice de Massa Corporal, conhecido pela sigla IMC, é um
                cálculo simples que permite medir se alguém está ou não com o
                peso ideal.
              </p>
              <!-- <a href="indiceIMC.php">Calcular IMC</a> -->
            </div>
            <img src="assets/imgs/circle-ambulance.png" alt="" />
          </article>
        </div>
      </div>
    </main>

    <footer>
      <h2>Todos os direitos reservados 3° B &copy 2023</h2>
    </footer>

    <script
      src="https://kit.fontawesome.com/d0f9e83783.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
