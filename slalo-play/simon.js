

const boton = document.getElementById('btnEmpezar')
const violeta = document.getElementById('violeta')
const celeste = document.getElementById('celeste')
const verde = document.getElementById('verde')
const naranja = document.getElementById('naranja')
const ULTIMO_NIVEL = 3


class Juego
{
  constructor()
  {
    this.init = this.init.bind(this)
    this.init()
    this.secuence()
    setTimeout(this.siguienteNivel(),2000)
  }

  init()
  {
    this.togglebotonEmpezar()
    this.colores =
     {
      celeste,
      violeta,
      naranja,
      verde
    }
    this.nivel = 1;
    this.colorElegido = this.colorElegido.bind(this)
    this.siguienteNivel = this.siguienteNivel.bind(this)
  }

  togglebotonEmpezar()
  {
    if(boton.classList.contains("hide"))
    {
      boton.classList.remove("hide")
    }
    else
      {
        boton.classList.add("hide")
      }

  }


  secuence()
  {
    this.secuencia = new Array(ULTIMO_NIVEL).fill(0).map(n => Math.floor( Math.random() * 4))
  }

  siguienteNivel()
  {
        this.subnivel = 0
        this.iluminarSecuencia()
        this.agregarEventosClick()
    }



    transformarNumeroAColor(numero){
        switch (numero)
        {
            case 0:
                return'celeste'
            case 1:
                return'violeta'
            case 2:
                return'naranja'
            case 3:
                return'verde'
        }
    }

    transformarColorANumero(color){
        switch (color)
        {
            case "celeste":
                return 0
            case "violeta":
                return 1
            case "naranja":
                return 2
            case "verde":
                return 3
        }
    }

    iluminarSecuencia(){ // let mantiene la variable a diferencia de var que siempre pisa la misma variable, usar siempre conts antes que let y usar siepre let antes de var.
        for (let i = 0; i < this.nivel; i++){
            const color = this.transformarNumeroAColor(this.secuencia[i])
            setTimeout(() =>
            {console.log(color)
            this.iluminarColor(color)} , 1000 * i)
        }
    }

    iluminarColor(color){
        this.colores[color].classList.add('light')
        setTimeout(() => this.apagarColor(color), 350)
    }

    apagarColor(color){
        this.colores[color].classList.remove('light')
    }

    agregarEventosClick()
    {
      this.colores.celeste.addEventListener("click", this.colorElegido)
      this.colores.violeta.addEventListener("click", this.colorElegido)
      this.colores.verde.addEventListener("click", this.colorElegido)
      this.colores.naranja.addEventListener("click", this.colorElegido)
    }

    eliminarEventosClick()
    {
      this.colores.celeste.removeEventListener("click", this.colorElegido)
      this.colores.violeta.removeEventListener("click", this.colorElegido)
      this.colores.verde.removeEventListener("click", this.colorElegido)
      this.colores.naranja.removeEventListener("click", this.colorElegido)
    }


    colorElegido(ev)
    {
      const nombreColor = ev.target.dataset.color
      const numeroColor = this.transformarColorANumero(nombreColor)



      this.iluminarColor(nombreColor)
      if(numeroColor === this.secuencia[this.subnivel])
       {
         this.subnivel++
         if(this.subnivel == this.nivel)
          {
            this.nivel++
            this.eliminarEventosClick()

            if(this.nivel == (ULTIMO_NIVEL + 1))
            {
             //AQUI ES DONDE SE GANA
             this.Ganar()
            }

            else
             {
                setTimeout( () => Swal.fire({
                                       title: 'Avanzaste de nivel!!! son tres niveles.',
                                       animation: false,
                                       customClass: {
                                       popup: 'animated tada'
                                       }
                                       }), 450 )
                setTimeout(this.siguienteNivel, 3000)
                console.log("no se te ocurra copiarte de aqui")
             }

          }

       }
       else{
         //aqui es donde se pierde
         this.Perder()
       }

    }

    Ganar()
    {
      swal.fire("platzi","felicidades,haz completado el juego!", "success")
      .then(this.init)
    }

    Perder()
    {
      swal.fire("platzi", "Lo sentimos, has perdido", "error")
      .then( () =>
      {
        this.init()
        this.eliminarEventosClick()

      })
    }
}



function escribir(login){
document.getElementById('container').innerHTML='Bienvenido/a al juego  ' + login + "!";
}




 function empezarJuego()
{
  Swal.fire
  ({
  title: 'Ingresa tu nombre para jugar!',
  input: 'text',
  inputAttributes:
  {
    autocapitalize: 'off'
  },
  showCancelButton: false,
  confirmButtonText: 'aceptar',
  showLoaderOnConfirm: true,
  preConfirm: (login) =>
  {
    return escribir(login)
  }
}).then( () => window.juego = new Juego() )

}