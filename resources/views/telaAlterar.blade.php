<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="formcss.css">
    <link rel="icon" href="https://imagepng.org/bola/bola/">
</head>

<body id="meuBody">

    <div id="minhaDiv">
        <form action="/atualizarBACK" method="post">
            @csrf


            <span class="grupoInput">
            <label for="id" class="placeholder">Id do jogador</label>
                <input type="text" name="id" id="id" class="input" value="<?=$jogador->id?>" readonly>
                
            </span>
            <span class="grupoInput">
                <label for="nomeJogador" class="placeholder">Nome do jogador</label>
                <input type="text" name="nomeJogador" id="nomeJogador" class="input" value="<?=$jogador->nomeJogador?>"  maxlength="15" required>
                
            </span>
            <span class="grupoInput">
                <label for="nacionalidadeJogador" class="placeholder">Nacionalidade</label>
                <input type="text" name="nascionalidadeJogador" id="nascionalidadeJogador" class="input"
                    value="<?=$jogador->nacionalidadeJogador?>" maxlength="15" required>
            </span>
            <span class="grupoInput">
                <label for="numCamisaJogador" class="placeholder">Numero da camisa</label>
                <input type="number" name="numCamisaJogador" id="numCamisaJogador" class="input"
                    value="<?=$jogador->numCamisaJogador?>"  maxlength="15" required>
            </span>
            <span class="grupoInput">
                <label for="timeJogador" class="placeholder">Time do jogador</label>
                <input type="text" name="timeJogador" id="timeJogador" class="input" value="<?=$jogador->timeJogador?>"  maxlength="15" required>
            </span>
            <span class="grupoInput">
                <label for="cartoesVermelhosJogador" class="placeholder">Numero de cartoes vermelhos</label>
                <input type="number" name="cartoesVermelhosJogador" id="cartoesVermelhosJogador" class="input"
                    value="<?=$jogador->numCartoesJogador?>"  maxlength="15" required>
            </span>
            <span class="grupoInput">
                <label for="lesoesJogador" class="placeholder">Numero de lesoes do jogador</label>
                <input type="number" name="lesoesJogador" id="lesoesJogador" class="input"
                    value="<?=$jogador->numLesoesJogador?>"  maxlength="15" required>
            </span>









            <Button>ALTERAR</Button>



        </form>
    </div>
</body>

</html>