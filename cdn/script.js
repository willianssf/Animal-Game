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





   


