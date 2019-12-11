console.log("hola mundo")

const NAME = document.getElementById("nombre")
const LASTNAME = document.getElementById("apellido")
const EMAIL = document.getElementById("correo")

const TITLE = document.createElement("H1")
const TITLE2 = document.createElement("H1")
const SUPEREMAIL = document.createElement("H5")
const PRINTDESCUENTO = document.createElement("p")
const PRINTTOTAL = document.createElement("p")

const CONTAINER1 = document.getElementById("ticketName")
const CONTAINER2 = document.getElementById("ticketemail")
const CONTAINER3 = document.getElementById("descuento")
const CONTAINER4 = document.getElementById("total")

const EDAD = document.getElementById("edad")



function ModificaNombreTicket(e){
    console.log("hola mundo1")
    TITLE.innerText = NAME.value
    CONTAINER1.appendChild(TITLE)
}

function ModificaApellidoTicket(e){
    console.log("hola mundo2")
    TITLE2.innerText = LASTNAME.value
    CONTAINER1.appendChild(TITLE2)
}

function ModificaEmailTicket(e){
    console.log("hola mundo3")
    SUPEREMAIL.innerText = EMAIL.value
    CONTAINER2.appendChild(SUPEREMAIL)
}

function Descontar(e){
    console.log("hola mundo4")
        if(EDAD.value < 18 || EDAD.value > 60){
            PRINTDESCUENTO.innerText = 0.10
            CONTAINER3.appendChild(PRINTDESCUENTO)
            PRINTTOTAL.innerText = 0.10 * 500 + " camatiums"
            CONTAINER4.appendChild(PRINTTOTAL)
        }else{
        PRINTTOTAL.innerText = "500 camatiums"
        CONTAINER4.appendChild(PRINTTOTAL)
    }
}
