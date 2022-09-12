(function() {
    let boton = document.getElementById("botoncolor");
    boton.addEventListener("click", myf1);
    boton.addEventListener("mouseover", function(){boton.textContent="¡Hola!"});
    boton.addEventListener("mouseout", function(){boton.textContent="No te vayas"});

    let contador = 0;

    function myf1() {
      if (contador % 2 ==0) {
          boton.style.backgroundColor= "red";
      } else {
          boton.style.backgroundColor = "blue";
      }
      contador += 1;
    }
})();