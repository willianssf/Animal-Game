function gerar(){

    var meuArray = [
         'Cachorro', 'Cabra' 
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
                 //console.log(data)
               console.log(data) 
            }
        })
    })
}

//'Avestruz', 'Aguia', 'Burro', 'Borboleta','Carneiro', 'Camelo', 'Cobra', 'Coelho', 'Cavalo', 'Elefante', 'Galo', 'Gato', 'Jacare', 'Leao',
//'Macaco', 'Porco', 'Pavao', 'Peru'