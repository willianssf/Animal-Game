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
      })
  })
}

//guarda no banco o bicho selecionado
function salvar(){
var g = document.querySelector("#bicho > li");

  g.forEach(h =>{
    h.addEventListener('click', e=>{
      i = e.path[1].id;

      cadastro.transaction(function(armazenar){
        armazenar.executeSql("INSERT INTO usuarios (bicho) VALUES (?)",[i]);
      })
    })
  })
}