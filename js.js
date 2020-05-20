let x = document.querySelectorAll("#bicho > li");

  x.forEach(y =>{
      y.addEventListener('click', e=>{
        z = e.path[1].id;

        var $wrapper = document.querySelector('.conteudoModal'),
        htmlTemporario = $wrapper.innerHTML,
        htmlNovo = 'Voce escolheu o ';

        htmlTemporario = htmlNovo+z+", vamos comprar agora!";

       $wrapper.innerHTML = htmlTemporario;
      })
  })
