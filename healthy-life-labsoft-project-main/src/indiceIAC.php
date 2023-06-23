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
        >IAC
        <div class="straight"></div
      ></span>
      <h1>Cálculo IAC</h1>
      <p>
        IAC é a sigla para Índice de Adiposidade Corporal, ele foi desenvolvido
        a partir de pesquisas que associaram a gordura corporal às medidas dos
        quadris de diferentes grupos. O índice é calculado da seguinte maneira:
        divide-se a medida do quadril do paciente pela sua altura elevada ao
        quadrado, depois é só diminuir 18. Diz-se que o indivíduo tem gordura
        corporal normal quando o resultado do IAC está entre 21 e 32, se
        mulheres e entre 8 e 20, se homens. Quer descobrir seu IAC? Insira a
        medida do seu quadril e sua altura nos campos abaixo e compare com os
        índices da tabela. Importante: siga os exemplos e use pontos como
        separadores.
      </p>
      <form action="conexoeshealthlife/salvariac.php" method="post" class="form-control">
      <div class="inputField">
        <div style="display: flex; justify-content: space-between">
          <article style="display: flex; flex-direction: column; gap: 5rem">
          <div style="display: flex; gap: 5rem">
              <div class="inputButton">
                <label for="">Usuário</label>
                <input type="text" id="useriac" placeholder="Usuário" name="username"/>
              </div>
            </div>
        </div>
            <div style="display: flex; gap: 5rem">
              <div class="inputButton">
                <label for="">Quadril (ex: 69.5)</label>
                <input type="number" id="hipCircumference" placeholder="Circ. do Quadril" />
                <input type="submit" onclick="calcIAC()" class="btnCalc"> Calcular </input>
              </div>
              <div class="inputButton">
                <label for="">Altura (ex: 1.68)</label>
                <input type="number" id="height" placeholder="Altura" />
                <input type="submit" onclick="clearFields()"> Limpar </input>
              </div>
            </div>
            <div id="resultField">
              Seu IAC é:
              <input type="hidden" value="" id="result_iac" name="iac" />
              <div style="color: var(--cian-second); padding: 0 1rem" id="result"></div>
            </div>
          </article>
          <aside>
            <img style="width: 40rem; height: 25rem;" src="assets/imgs/tableIAC.png" alt="" />
          </aside>
        </div>
      </div>
      </form>
      <img
        style="height: 7rem; position: absolute; top: 11rem; left: 40rem"
        src="assets/3pontos.svg"
        alt=""
      />
      <img
        style="height: 7rem; position: absolute; bottom: 5rem; left: 55rem"
        src="assets/3pontos.svg"
        alt=""
      />
      <img
        style="height: 8rem; position: absolute; top: 8rem; right: 8rem"
        src="assets/effect-icon-page.svg"
        alt=""
      />
      <img
        style="height: 8rem; position: absolute; bottom: 3rem; left: -5rem"
        src="assets/effect-icon-page.svg"
        alt=""
      />
    </main>

    
    <script src="js/calcIAC.js" defer></script>
  </body>
</html>
