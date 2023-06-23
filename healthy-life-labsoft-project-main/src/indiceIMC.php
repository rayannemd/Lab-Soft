<?php include "conexoeshealthlife/menu.php"?>
<?php include "conexoeshealthlife/listarbd.php"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/indices.css" />
    <title>Índices</title>
  </head>
  <body class="indices">
<!--     <header>
      <img src="assets/logo.svg" alt="Logo HealthyLife" />
      <nav>
        <ul>
          <a href="./index.html">
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
    <main class="main-indices">
      <span
        >IMC
        <div class="straight"></div></span>
      <h1>Cálculo IMC</h1>
      <p>
        IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela
        Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.
        O índice é calculado da seguinte maneira: divide-se o peso do paciente
        pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso
        normal quando o resultado do IMC está entre 18,5 e 24,9. Quer descobrir
        seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os
        índices da tabela. Importante: siga os exemplos e use pontos como
        separadores.
      </p>
      <form action="conexoeshealthlife/salvarimc.php" method="post" class="form-control">
      <div class="inputField">
        <div style="display: flex; justify-content: space-between;">
        <article style="display: flex; flex-direction: column; gap: 5rem;">
          <div style="display: flex; gap: 5rem;">
          <div class="inputButton">
              <div class="inputButton">
                <label for="">Usuário</label>
                <input type="text" id="useriac" placeholder="Usuário" name="username" />
              </div>
            </div>
          </div>
            <div style="display: flex; gap: 5rem;">
          <div class="inputButton">
            <label for="">Peso (ex: 70.5)</label>
            <input type="number" id="weight" placeholder="Peso" />
            <input type="submit" onclick="calcIMC()" class="btnCalc">Calcular</input>
          </div>
          <div class="inputButton">
            <label for="">Altura (ex: 1.70)</label>
            <input type="number" id="height" placeholder="Altura" />
            <input type="submit" onclick="clearFields()">Limpar</input>
          </div>
        </div>
        <input type="hidden" value="" id="result_imc" name="imc" />
          <div id="resultField">Seu IMC é: <div style="color: var(--cian-second); padding: 0 .5rem;" id="result"></div></div>
        </article>
        <aside>
          <img src="assets/imgs/tableIMC.png" alt="">
        </aside>
      </div>
      </div>
      </form>
      <img style="height: 7rem; position: absolute; top: 11rem; left: 40rem;" src="assets/3pontos.svg" alt="">
      <img style="height: 7rem; position: absolute; bottom: 5rem; left: 55rem;" src="assets/3pontos.svg" alt="">
      <img style="height: 8rem; position: absolute; top:8rem; right: 8rem;" src="assets/effect-icon-page.svg" alt="">
      <img style="height: 8rem; position: absolute; bottom: 3rem; left: -5rem;" src="assets/effect-icon-page.svg" alt="">
    </main>

    
    <script src="js/calcIMC.js" defer></script>
  </body>
</html>
