const form = document.getElementById('form')
const username = document.getElementById('name_input')
const email = document.getElementById('email_input')
const password = document.getElementById('password_input')
const password_confirm = document.getElementById('password_confirm_input')

form.addEventListener("submit",(e) =>{
    checkInputs()
})

function checkInputs(){
    const usernameValue = username.value
    const emailValue = email.value
    const passwordValue = password.value
    const passwordconfirmValue = password_confirm.value

    if(usernameValue == '' || emailValue == '' || passwordValue == ''|| passwordconfirmValue == ''){
        alert('[Error] Está faltando algum campo. Verifique os dados.')
    }
    if(passwordValue != passwordconfirmValue){
        alert('[Error] Senhas diferentes.')
    }
}