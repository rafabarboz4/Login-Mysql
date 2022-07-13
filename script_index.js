//Algumas animações
function handleFoco(){
    var email = document.getElementById('email_input')
    var senha = document.getElementById('password_input')
    
    email.addEventListener("focus",()=>{
    email.style.borderColor = "#4A5F6A"
    });
    email.addEventListener("blur",()=>{
    email.style.borderColor = "#ccc"
    });

    senha.addEventListener("focus",()=>{
    senha.style.borderColor = "#4A5F6A"
    });
    senha.addEventListener("blur",()=>{
    senha.style.borderColor = "#ccc"
    });
}
