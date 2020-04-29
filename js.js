let x = document.querySelectorAll("#bicho > li");

  x.forEach(y =>{
      y.addEventListener('click', e=>{
        alert(e.path[1].id);
      })
  })