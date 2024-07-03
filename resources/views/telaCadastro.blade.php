<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="formcss.css">
    <link rel="icon" href="https://imagepng.org/bola/bola/">
</head>

<body id="meuBody">

    <div id="minhaDiv">
        <form action="/telaCriarBACK" method="post" id="meuForms">
            @csrf
            <h2>CRIAR JOGADOR</h2>
            <span class="grupoInput">
                <label for="nomeJogador" class="placeholder">Nome do jogador</label>
                <input type="text" name="nomeJogador" id="nomeJogador" class="input" maxlength="15" required>
            </span>
            <span class="grupoInput">
                <label for="nacionalidadeJogador" class="placeholder">Nacionalidade</label>
                <input type="text" name="nacionalidadeJogador" id="nascionalidadeJogador" class="input" maxlength="15" required>   
            </span>
            <span class="grupoInput">
                <label for="numCamisaJogador" class="placeholder">Numero da camisa</label>
                <input type="number" name="numCamisaJogador" id="numCamisaJogador" class="input" required>
                
            </span>
            <span class="grupoInput">
                <label for="timeJogador" class="placeholder">Time do jogador</label>
                <input type="text" name="timeJogador" id="timeJogador" class="input" maxlength="15" required>
                
            </span>
            <span class="grupoInput">
                <label for="cartoesVermelhosJogador" class="placeholder">Numero de cartoes vermelhos</label>
                <input type="number" name="cartoesVermelhosJogador" id="cartoesVermelhosJogador" class="input" required> 
            </span>
            <span class="grupoInput">
                <label for="lesoesJogador" class="placeholder">Numero de lesoes do jogador</label>
                <input type="number" name="lesoesJogador" id="lesoesJogador" class="input"  required> 
            </span>
            <Button id="btnSubimmit">Criar</Button>
        </form>


    </div>




    <script>
        var nome = document.querySelectorAll("input")[1]
        var Nacionalidade = document.querySelectorAll("input")[2]
        var Numero = document.querySelectorAll("input")[3]
        var Time = document.querySelectorAll("input")[4]
        var cartoes = document.querySelectorAll("input")[5]
        var lesoes = document.querySelectorAll("input")[6]

        document.querySelector("#meuForms").addEventListener('submit', async (envento) => {
            event.preventDefault();
 
            var alertDeConfirmacao = confirm(`Voce vai criar o seguinte jogador: \n` +
                `Nome: ${nome.value}\n` +
                `Nacionalidade: ${Nacionalidade.value}\n` +
                `Numero: ${Numero.value}\n` +
                `Time: ${Time.value}\n` +
                `cartoes: ${cartoes.value}\n` +
                `lesoes: ${lesoes.value}\n`
            );
            if (alertDeConfirmacao) {
                document.querySelector("#meuForms").submit()
            }
        })
    </script>
</body>

</html>