const form = document.getElementById('form')
const username = document.getElementById('usuario')
const password = document.getElementById('senha')


form.addEventListener('submit', (e) => {
    e.preventDefault()

    checkInputs()
})

function checkInputs() {

    const usuarioValue = usuario.value.trim()
    const senhaValue = senha.value.trim()
   

    if(usuarioValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(usuario, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(usuario)
    }

    if(senhaValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(senha, 'Preencha esse campo')

    } else if(senhaValue.length < 8) { 
        setErrorFor(senha, 'Senha deve ter mais que 8 caracteres')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(senha)
		window.location.assign("principal.php");
    }

}
function setErrorFor(input, message) {
    const textfield = input.parentElement;
    const small = textfield.querySelector('small')

    small.innerText = message

    textfield.className = 'textfield error'
}

function setSuccessFor(input) {
    const textfield = input.parentElement;

    textfield.className = 'textfield success'
}
/*
function isEmail(email) {
    return /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email)
}


const form = document.getElementById('form')
const usuario = document.getElementById('usuario')
const senha = document.getElementById('senha')


//form.addEventListener('submit',checkInputs)
form.addEventListener("submit", function() {
	preventDefault()
	checkInputs()
	alert(form);
})

function checkInputs(){
	const usuarioValue = usuario.value.trim()
	const senhaValue   =  senha.value.trim()

	if(usuarioValue === ''){
		//mostra o erro
		//adicionar a classe error
		errorValidotion(usuario, 'Preencha esse campo')
	} else{
		//adicionar a classe de sucesso
		successValidation(usuario)
	}
}

function errorValidotion(input, message) {
	const textfield = input.parentElement;
	const small = textfield.querySelector('small')

	small.innerText = message 

	textfield.className = 'textfield error'
}

function successValidation(input) {
	const textfield = input.parentElement;

	textfield.className = "textfield success"
}
*/