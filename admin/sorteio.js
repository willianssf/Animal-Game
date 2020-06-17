function gerar(){

    //escolha aleatoria do animal para o sorteio
    var meuArray = [
        'Avestruz', 'Porco'
    ];
    var Rand = meuArray[(Math.random() * meuArray.length) | 0];
    alert("O animal sorteado foi "+"\n"+ Rand);

    //envia o bicho para coleta_bicho.php e imprimi na modal os ganhadores
    $(document).ready(function(){
        $.ajax({
            url:'coleta_bicho.php',
            method:'POST',                    
            dataType: 'html',
            data:{
                bicho: Rand
            },
            success: function(data){
                $("#gerar").attr("disabled", true);
                $("#sorteados").html(data);
            },
            error: function(){
                alert("Ninguem acertou!");
            }
        });
    //Atualiza a pagina com o botao "Continuar"
    $("#save_reset").click(function(){
        document.location.reload(true);
    });
    })
}