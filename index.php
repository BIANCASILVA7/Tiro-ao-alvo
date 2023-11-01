<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    <title>Tiro ao alvo</title>
</head>

<body>

    <header>
        <h1>Tiro ao alvo</h1>
        <nav class="menu">
            <div class="div-acertos-erros-total">
                <h3>acertos</h3>
                <p id="acertos"><b>0</b></p>
            </div>

            <div class="div-acertos-erros-total">
                <h3>erros</h3>
                <p id="erros"><b>0</b></p>
            </div>

            <div class="div-acertos-erros-total">
                <h3>total</h3>
                <p id="total"><b>0</b></p>
            </div>
        </nav>
    </header>

    <section>
        <div id="cenario">
            <div id="alvo">
                <audio src="sons/som_zumbi.mp4"></audio>
            </div>
        </div>
    </section>

    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Fim de jogo meu caro jogador!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="inserir.php" method="post">
                    <div class="form-group">
                       <label for="nome" class="modal-inserirname">Insira seu nome:</label>
                       <input type="text" name="nome" id="nome">
                       <input type="hidden" name="acertos" id="acertos2">
                       <input type="hidden" name="erros" id="erros2">
                    </div>
                 <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
            </div>

          </div>
        </div>
    </div>

    <div class="footer">
        <div class="paragrafos">
            <div class="p1">
                <p><b>Desenvolvido por:</b>
                <p>Bianca da Silva Pereira</p>
                <p>Emily Lima de Mendonça</p>
                <p>Iara Santana da Silva</p>
            </div>

            <div class="p2">
                <p><b>Atividade</b></p>
                <p>Disciplina: Programação para Internet</p>
                <p>Professor: Marcelo Figueiredo Barbosa Júnior</p>
                <p> IFRN - Campus Santa Cruz/RN</p>

            </div>
        </div>
        <p style="text-align: center; margin-top: 5px;">Todos os direitos reservados ⓒ</p>
    </div>
</body>

<script src="script.js"></script>
</html>