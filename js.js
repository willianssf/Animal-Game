function pegaBicho(){
var bicho = document.querySelectorAll("#bicho > li");

    bicho.forEach(y =>{
      y.addEventListener('click', function(e){
        var z = e.path[1].id;
        console.log(z);
        z.text();
      });                    
  });
}




    
            

     
//guarda no banco o bicho selecionado
/*function salvar(){
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
*/
function text(){
var $wrapper = document.querySelector('.conteudoModal'),
            htmlTemporario = $wrapper.innerHTML,
            htmlNovo = 'Você escolheu o ';
            htmlTemporario = htmlNovo+z+", vamos comprar agora!";
            $wrapper.innerHTML = htmlTemporario;   
            
            //var a = document.getElementById("Comprar");
           // a.addEventListener('click', e=>{
             // e = z;
             // alert(e);
            //})
}