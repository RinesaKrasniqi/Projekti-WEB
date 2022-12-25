/*var counter =1;
setInterval(function(){
    document.getElementById('radio' + counter).checked=true;
    counter++;
    if(counter>3){
        counter=1;
    }
},5000); */


function valido(){
    var username=document.getElementById('usernameInput').value;
    var usernameRegex=/^[A-Za-z]{5,}[0-9]{1,}$/
    var password=document.getElementById('passwordInput').value;
    var passwordRegex=/^[A-Z][a-z]{5,}[0-9]{1,}$/

    if(usernameRegex.test(username)){
        alert("Username is valid");
    }else{
        alert("Username is not valid, it should contain capital letters, at least 5 letters, and a number!");
    }
    if(passwordRegex.test(password)){
        alert("Password is valid");
    }else{
        alert("Password is not valid, it should contain 1 capital letters, at least 5 letters, and a number!")
    }
    
}

function validoSignUp(){
     var 
}


