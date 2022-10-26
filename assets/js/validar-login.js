const entrar = document.getElementById("form")

entrar.addEventListener("submit", (e) => {
    e.preventDefault()

    const email = document.getElementById("email")
    const senha = document.getElementById("senha")

    if(validar()) {
        e.target.submit()
    }

    
})

function validar(){

    let status = true

    if (email.value == ''){
        email.classList.add("errorInput")
        status = false
    } else {
        email.classList.remove("errorInput")
    }

    if (senha.value == '') {
        senha.classList.add("errorInput")
        status = false
    } else {
        senha.classList.remove("errorInput")
    }

    if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || email.value.indexOf(".") + email.value.indexOf("@") == 1) {
        email.classList.add("errorInput")
        status = false
    } else {
        email.classList.remove("errorInput")
    }

    return status
}