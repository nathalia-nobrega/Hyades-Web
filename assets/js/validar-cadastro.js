const enviar = document.getElementById("enviar")

enviar.addEventListener("click", (e) => {
    e.preventDefault()

    const email = document.getElementById("email")
    const senha = document.getElementById("senha")
    const senhaconfirmar = document.getElementById("senhaconfirmar")
    const nome = document.getElementById("nome")
    const nascimento = document.getElementById("nascimento").value
    

    const emailValue = email.value.trim()
    const senhaValue = senha.value.trim()
    const senhaconfirmarValue = senhaconfirmar.value.trim()
   
    const nomevalue = nome.value.trim()
    

    if (emailValue == '') {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (senhaValue == '' || senhaValue.length <= 5) {
        senha.classList.add("errorInput")
    } else {
        senha.classList.remove("errorInput")
    }

    if (senhaconfirmarValue == '' || senhaValue != senhaconfirmarValue) {
        senhaconfirmar.classList.add("errorInput")
    } else {
        senhaconfirmar.classList.remove("errorInput")
    }

    if (emailValue.indexOf("@") == -1 || emailValue.indexOf(".") == -1 || emailValue.indexOf(".") + emailValue.indexOf("@") == 1) {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }


    if (nomevalue == '') {
        nome.classList.add("errorInput")
    } else {
        nome.classList.remove("errorInput")
    }

    
   
})