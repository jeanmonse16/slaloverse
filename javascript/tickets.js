console.log("hola mundo")

const NAME = document.getElementById("nombre")
const LASTNAME = document.getElementById("apellido")
const EMAIL = document.getElementById("correo")

const TITLE = document.createElement("H1")


const TITLE2 = document.createElement("H1")


const SUPEREMAIL = document.createElement("H5")
const CONTAINER1 = document.getElementById("ticketName")
const CONTAINER2 = document.getElementById("ticketemail")


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