
var navLinks = document.getElementById('navLinks')
function showMenu(){
    navLinks.style.right ='0'
}
function hideMenu(){
    navLinks.style.right ='-200px'
}
// for the login page

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
