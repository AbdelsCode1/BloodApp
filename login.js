const SignUpButton = document.querySelector("#Register-btn");
const LogInButton = document.querySelector("#LogIn-btn");
const SignIn = document.querySelector(".register-box");
const SignUp = document.querySelector(".login-box");

SignUpButton.addEventListener("click", function(){
  SignIn.style.display="none";
  SignUp.style.display="block";

});