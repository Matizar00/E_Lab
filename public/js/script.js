const form = document.querySelector('form')
const emailInput = form.querySelector('input[name="email"]')
const passwordInput = form.querySelector('input[name="password"]')
const confirmedPasswordInput = form.querySelector('input[name="confirmedPassword"]')
function isEmail(email) {
	return /\S+@\S+\.\S+/.test(email)
}

function arePasswordsSame(password, confirmedPassword) {
	return password === confirmedPassword
}

function markValidation(element, condition) {
	!condition
		? (element.style = 'border: 3px solid red; border-radius: 1em; box-shadow: 0 0 0.2em red; outline: none;')
		: (element.style = 'null')
}

function validateEmail() {
	setTimeout(function () {
		markValidation(emailInput, isEmail(emailInput.value))
	}, 1000)
}

function validatePassword() {
	setTimeout(function () {
		const condition = arePasswordsSame(passwordInput.value, confirmedPasswordInput.value)
		markValidation(confirmedPasswordInput, condition)
	}, 1000)
}

emailInput.addEventListener('keyup', validateEmail)
confirmedPasswordInput.addEventListener('keyup', validatePassword)
