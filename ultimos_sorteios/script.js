$(document).ready(function(){

    $("#selectData").change(function(){
        var dataSorteio = $("#selectData option:selected");
        var displayInfo = dataSorteio[0].innerText;

        $.ajax({
            url:'sorteados.php',
            method:'POST',
            data: {
                dataSrt: displayInfo
            },
            beforeSend: function(){
                $("#srt").css({'display':'block'});
                $("#srt").html("Carregando...");
            },
           success: function(data){
                $("#srt").css({'display':'block'});
                $("#srt").html(data);
            },
            error: function(data){
                $("#srt").css({'display':'block'});
                $("#srt").html("Erro ao carregar a lista.");
            }
        });
    });


})
