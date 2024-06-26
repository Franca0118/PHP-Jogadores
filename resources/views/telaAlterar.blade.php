
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
            <input type="text" name="id" id="id"  class="input" value="<?=$jogador->id?>" readonly>
            <label for="id" class="placeholder">Id do jogador</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="nomeJogador" id="nomeJogador" class="input" value="<?=$jogador->nomeJogador?>">
            <label for="nomeJogador" class="placeholder">Nome do jogador</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="nascionalidadeJogador" id="nascionalidadeJogador" class="input" value="<?=$jogador->nacionalidadeJogador?>">
            <label for="nacionalidadeJogador" class="placeholder">Nacionalidade</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="numCamisaJogador" id="numCamisaJogador" class="input" value="<?=$jogador->numCamisaJogador?>">
            <label for="numCamisaJogador" class="placeholder">Numero da camisa</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="timeJogador" id="timeJogador" class="input" value="<?=$jogador->timeJogador?>">
            <label for="timeJogador" class="placeholder">Time do jogador</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="cartoesVermelhosJogador" id="cartoesVermelhosJogador" class="input" value="<?=$jogador->numCartoesJogador?>">
            <label for="cartoesVermelhosJogador" class="placeholder">Numero de cartoes vermelhos</label>
        </span>
        <span class="grupoInput">
            <input type="text" name="lesoesJogador" id="lesoesJogador" class="input" value="<?=$jogador->numLesoesJogador?>">
            <label for="lesoesJogador" class="placeholder">Numero de lesoes do jogador</label>
        </span>
        
        
        
        
        
        
        
        
        
        <Button>ALTERAR</Button>  
   

        
    </form>
</div>
</body>
</html>