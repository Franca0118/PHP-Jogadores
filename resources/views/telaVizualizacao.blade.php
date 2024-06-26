
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizacao</title>
    <link rel="stylesheet" href="table.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="https://imagepng.org/bola/bola/">
</head>
<body>
   <div id='divListaRest' class="tudo">

   <table id="tablePricipal">
           <tr>
           <td>Id</td>
           <td>nomeJogador</td>
           <td>nacionalidadeJogador</td>
           <td>numCamisaJogador</td>
           <td>timeJogador</td>
           <td>numCartoesJogador</td>
           <td>numLesoesJogador</td>
           </tr>

           <?php 
           
           $ListaVar = 0;
           $ValorNegativo = 0;
            try {
                $ListaVar= $_GET['valorPag'];
                if ($ListaVar < 0)
                {
                    $ListaVar = 0;
                } else if ($ListaVar > count($valorTela))
                {
                    //nada
                } 
            } catch (Exception $e){
               // nada
            }


            function tratamentoDeNegativo(){
                try {
                    $ListaVar= $_GET['valorPag'] ?? 0;
                } catch (Exception $e){
                    // nada
                }
                if ($ListaVar < 0)
                    {
                        $ValorNegativo = 0;
                    } else
                    {
                        $ValorNegativo = $ListaVar - 1;
                    }
                return $ValorNegativo;
            }


           ?>

           @for($i = $ListaVar ; $i < ($ListaVar + 10) ; $i++)
           
            @if ($i > count($valorTela)-1)
            
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
                <td><button class="buttonDelete" id="/delete?idDelete=<?= $valorTela[$i]->id ?>"><img src="lixo.png"></button></td>
                <td><a href="/atualizarFRONT?idAtualizar=<?= $valorTela[$i]->id ?>"><button><img src="editar.png"></button></a></td>
            </tr>
           
           @endfor
       
           
    </table>
   
        <div class="botões">
            <a href="?valorPag=<?=0?>"><button> << </button></a>
            <a href="?valorPag=<?=tratamentoDeNegativo() - 10?>"><button> < </button></a>
            <h3> <?=$ListaVar?> </h3>
            <a href="?valorPag=<?=$ListaVar + 10?>"><button> > </button></a>
            <a href="?valorPag=<?=count($valorTela)-10?>"><button> >> </button></a>
        </div> 

        
   </div>

   <script>
        
        
        document.querySelectorAll(".buttonDelete").forEach((botao)=>{
        botao.addEventListener('click', ()=>{
        Swal.fire({
            title: "Tem certeza?",
            text: "O jogador vai ser apagado!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sim"
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = botao.id
            }
          });
    })
})


   </script>
   <div id="meusBotoesNoCanto">
   <a href="/"><button>Volar a tela inicial</button></a>
   <a href="/cadastro"><button>Criar jogadores</button></a>

   </div>
</body>
</html>