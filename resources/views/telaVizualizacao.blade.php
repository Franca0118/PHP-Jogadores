<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizacao</title>
    <link rel="stylesheet" href="table.css">
    <link rel="icon" href="https://imagepng.org/bola/bola/">
</head>

<body>
    <div id='divListaRest' class="tudo">

    <table id="tablePricipal">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Nacionalidade</td>
                <td>Camisa</td>
                <td>Time</td>
                <td>Cartoes</td>
                <td>Lesoes</td>
            </tr>

<?php         
    $ListaVar = 0;

    $maxTabela = count($valorTela);
    if (strval($maxTabela)[-1] == '0')
    {
        $maxTabela -= 10;
    } else {
        $maxTabela = strval(intval(count($valorTela)/10));
        $maxTabela .= "0";
    }
    

    try {
        $ListaVar = $_GET['valorPag'];
        if ($ListaVar < 0) {
            $ListaVar = 0;
        } else if ($ListaVar > count($valorTela)) {
            //nada
        }
    } catch (Exception $e) {
        // nada
    }
?>

        @for($i = $ListaVar; $i < ($ListaVar + 10); $i++)

            @if ($i > count($valorTela) - 1)    
                @break
            @endif

                <tr>
                    <td>{{ $valorTela[$i]->id }}</td>
                    <td>{{ $valorTela[$i]->nomeJogador }}</td>
                    <td>{{ $valorTela[$i]->nacionalidadeJogador }}</td>
                    <td>{{ $valorTela[$i]->numCamisaJogador }}</td>
                    <td>{{ $valorTela[$i]->timeJogador }}</td>
                    <td>{{ $valorTela[$i]->numCartoesJogador }}</td>
                    <td>{{ $valorTela[$i]->numLesoesJogador }}</td>
                    <td><button class="buttonDelete" id="/delete?idDelete=<?= $valorTela[$i]->id ?>">
                    <img src="lixo.png"></button></td>
                    <td><a href="/atualizarFRONT?idAtualizar=<?= $valorTela[$i]->id ?>"><button><img
                    src="editar.png"></button></a></td>
                </tr>

            @endfor
        </table>
    </div>


    <div class="botões">
        <a href="?valorPag=<?=0?>"><button><< </button></a>
        <a href="?valorPag=<?=$ListaVar - 10?>"><button>< </button></a>
        <h3><?=$ListaVar/10?></h3>
        <a href="?valorPag=<?=$ListaVar + 10?>"><button> > </button></a>
        <a href="?valorPag=<?=$maxTabela?>"><button> >> </button></a>
    </div>

        
    <script>
        document.querySelectorAll(".buttonDelete").forEach((botao) => {
            botao.addEventListener('click', () => {
                var alertDeConfirmacao = confirm('O jogador vai ser deletado');
                if (alertDeConfirmacao) {
                    window.location.href = botao.id
                }
            })
        })
    </script>
    
    <div id="meusBotoesNoCanto">
        <a href="/"><button>Volar a tela inicial</button></a>
        <a href="/cadastro"><button>Criar jogadores</button></a>
    </div>
</body>
</html>