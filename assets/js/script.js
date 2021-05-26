$( document ).ready(function() {
    var w = window.innerWidth;

    if(w > 767){
        $('#menu-jk').scrollToFixed();
    }else{
        $('#menu-jk').scrollToFixed();
    }

})
// ========================= login slide script ===============================//
var x=document.getElementById("login_div");
var y=document.getElementById("signup_div");
var z=document.getElementById("btn");
function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
    document.getElementById("gsign").style.display="none";
}
function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
    document.getElementById("gsign").style.display="block";
}
/*function Home(){
    window.location="home.php";
}*/

function check(input){
    if(input.value != document.getElementById('password_field1').value){
        input.setCustomValidity('Password not Matching.');
    } 
    else {
    // input is valid -- reset the error message
    input.setCustomValidity('Matched :)');
}
}