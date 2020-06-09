function gerar(){

    var meuArray = [
        'Avestruz'
    ];
    var Rand = meuArray[(Math.random() * meuArray.length) | 0];

    alert(Rand);

    $(document).ready(function(){

        $.ajax({
            url:'coleta_bicho.php',
            method:'POST',                    
            dataType: 'html',
            data:{
                bicho: Rand
            },
            success: function(data){
                $("#mensagem").html(data);
            }
        })
    })
}