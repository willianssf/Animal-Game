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

function pegarBicho(){

    let x = document.querySelectorAll("#bicho > li");
   
     x.forEach(y =>{
         y.addEventListener('click', e=>{
           z = e.path[1].id;
   
           var $wrapper = document.querySelector('.conteudoModal'),
           htmlTemporario = $wrapper.innerHTML,
           htmlNovo = 'Você escolheu o ';
   
           htmlTemporario = htmlNovo+z+", vamos comprar agora!";
   
          $wrapper.innerHTML = htmlTemporario;
         });
     });
   }
   
 