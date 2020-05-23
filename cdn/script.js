$(document).ready(function(){

        //variaveis locais
        var _seletorLinkAbrir = $(".jmodalabrir");
        var _seletorLinkClose = $(".jmodalfechar");
        var _containerModal = $(".jmodal");

        //Abrindo janela modal
        _seletorLinkAbrir.click(function(){
            _containerModal.fadeToggle(0);
            return false;
        });

        //Fechando janela modal
        _seletorLinkClose.click(function(){
            _containerModal.fadeToggle(0);
            return false;
        });
})
//Seleciona o bicho pretendido
function pegaBicho(){
    var bicho = document.querySelectorAll("#bicho > li");
        bicho.forEach(y =>{
        
          y.onclick = function(e){
            
            $("#bicho").on("change", function() {
                var self = $(this);
                var values = self.val();
            
                $("#bicho").not(self).each(function() {
                    var _values = $(this).val();
                    for(var v = _values.length; v--;) {
                        if (values.indexOf(_values[v]) >= 0) {
                            _values.splice(v, 1); 
                        } 
                    }
                    $(this).val(_values);
                });
            });
            var x = e.path[1].id;
            text(x);
            compraBicho(x);
             }  
         });
    }                    
//Mensagem de confirmação de compra
     function text(bicho){
        var $wrapper = document.querySelector('.conteudoModal'),
        htmlTemporario = $wrapper.innerHTML,
        htmlNovo = 'Você escolheu o ';
        htmlTemporario = htmlNovo+bicho+", vamos comprar agora!";
        $wrapper.innerHTML = htmlTemporario;   
    }
//Salva no banco
    function compraBicho(c){
        var f = document.getElementById("Comprar");
            f.onclick = function(){
                cadastro.transaction(function(armazenar){
                    armazenar.executeSql("INSERT INTO usuarios (bicho) VALUES (?)",[c]);
                })
            }
    }
 
    
   


   


