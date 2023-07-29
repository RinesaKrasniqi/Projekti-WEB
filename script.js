
var counter =1;
setInterval(function(){
    document.getElementById('radio' + counter).checked=true;
    counter++;
    if(counter>3){
        counter=1;
    }
},2000);


function validoSignUp(){
    var emri=document.getElementById('nameInput').value;
    var emriregex=/^[A-Za-z]{3,15}$/
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
  var emailregex=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
  var phone=document.getElementById('Phone-Number-1').value;
  var phoneregex=/^[0-9]{9}$/
  
  if(emriregex.test(emri)){
     
  }else{
     alert("name should have 1 capital letter to the name, a space, and a capital letter for surname!");
  }
  if(emailregex.test(email)){
     
  }else{
     alert("email should be in this format: name@---.com/edu");
  }
  if(phoneregex.test(phone)){
     
  }else{
     alert("phone number should have at least 9 numbers in it!");
  }
}