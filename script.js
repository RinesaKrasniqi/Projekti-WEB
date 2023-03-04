
var counter =1;
setInterval(function(){
    document.getElementById('radio' + counter).checked=true;
    counter++;
    if(counter>3){
        counter=1;
    }
},2000);

function valido(){
    var username=document.getElementById('usernameInput').value;
    var usernameRegex=/^[A-Za-z]{5,}[0-9]{1,}$/
    var password=document.getElementById('passwordInput').value;
    var passwordRegex=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/

    if(usernameRegex.test(username)){
        
    }else{
        alert("This username doesn't exist, check again!");
    }
    if(passwordRegex.test(password)){
        
    }else{
        alert("Password doesn't exit, try again!");
    }
    
}



function validoSignUp(){
    var emri=document.getElementById('nameInput').value;
    var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
    var email=document.getElementById('email').value;
    var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
    var user=document.getElementById('username').value;
    var userregex=/^[A-Z][a-z0-9]{3,15}$/
    var password=document.getElementById('password').value;
    var passregex=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/

    if(emriregex.test(emri)){
       
    }else{
       alert("name should have 1 capital letter to the name, a space, and a capital letter for surname!");
    }
    if(emailregex.test(email)){
       
    }else{
       alert("email should be in this format: name.surname@---.com/edu");
    }
    if(userregex.test(user)){
       
    }else{
       alert("Username should have first letter a capital letter and 3 letters!");
    }
    if(passregex.test(password)){
       
    }else{
       alert("Enter password again, it should contain minimum eight characters, at least one letter and one number!");
    }

}

function validoContact(){
  var emri=document.getElementById('Name-1').value;
  var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
  var email=document.getElementById('Email-1').value;
  var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
  var phone=document.getElementById('Phone-Number-1').value;
  var phoneregex=/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/
  var service=document.getElementById('Service-1').value;
  var serviceregex=/^\s*$/
  var message=document.getElementById('Message').value;
  var messageregex=/^\s*$/

  if(emriregex.test(emri)){
     
  }else{
     alert("name should have 1 capital letter to the name, a space, and a capital letter for surname!");
  }
  if(emailregex.test(email)){
     
  }else{
     alert("email should be in this format: name.surname@---.com/edu");
  }
  if(phoneregex.test(phone)){
     
  }else{
     alert("phone number should be in this format: 000-000-000!");
  }
  if(serviceregex.test(service)){
     
  }else{
     alert("Please enter a service!");
  }
  if(messageregex.test(message)){
     
  }else{
     alert("Please enter a message!");
  }
  
  
  
}