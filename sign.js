
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event)
 {
  if(event.target == modal) {
    modal.style.display = "none";
  }
}
//const signUpButton = document.getElementById('signupbutton');
//const signinButton = document.getElementById('signinbutton');
//const signinForm =document.getElementById('signin');
//const signupForm =document.getElementById('signup');

//signUpButton.addEventListener('click',function(){
  //signinForm.style.display="none";
  //signupForm.style.display="block";
//})
//signinButton.addEventListener('click',function(){
  //signinForm.style.display="block";
  //signupForm.style.display="none";
//})