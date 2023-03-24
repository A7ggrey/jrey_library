
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', (e) => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {

	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
}

if (email === '') {

	setErrorFor(email, 'Username is required');
} else {

	setSuccessFor(email);
}


if (emailValue === '') {} else {}


	function setErrorFor(input, message) {

		const display = input.parentElement;
		const small = display.querySelector('small');

		small.innerText = message;

		display.className = 'display error';
	}