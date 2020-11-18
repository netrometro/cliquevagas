<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clique Vagas Caruaru</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="pesquisa.css" />
  </head>
  <body class="bg2">
    <div class="modal">
      <div class="janela">
        <div class="titulomodal bg1">Salvar pesquisa</div>
        <div class="conteudo"><p>Cadastre seu e-mail que lhe enviaremos uma oportunidade assim que ela for cadastrada.</p></div>
        <div class="formsalvarpesquisa">
          <form action="" method="post">
            <input type="text" placeholder="Digite seu e-mail" />
            <input type="submit" value="Salvar" />
            <button type="button" onclick="cancel()">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
    <header>
    <div class="titulo bg1"><img src="images/logo.png" /> Click Vagas Caruaru</div>  
    <div class="armario">
      <div class="gaveta">
        <form action='#' method='post'>
          <div class="caixatexto">
            <input type="text" placeholder="Procure sua vaga" />
            <button type="button" onclick="modal()"><i class="material-icons">grade</i></button>
          </div>
        </form>
      </div>
    </div>
    </header>

    <div class="container card">
      <h3>SENAC</h3>

      <h4>Auxiliar de Eletricista, Instalador Fotovoltáico.</h4>

      <p>Auxiliar de eletricista experiência de 1 ano, ter curso
        de eletricista predial e disponibilidade para trabalhar
        durante a madrugada.<br/>
        Instador fotovotáico, curso de eletrotécnica e 
        experiência de 2 anos.</p>

      <p>Enviar currículo para eletrica220v.caruaru@gmail.com</p>

    </div>

    <script src="pesquisa.js"></script>
  </body>
</html>