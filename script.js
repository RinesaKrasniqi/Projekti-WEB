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
     var emri=document.getElementById("name").value;
     var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
     var email=document.getElementById("email").value;
     var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
     var user=document.getElementById("usernameInput").value;
     var userregex=/^[A-Z][a-z0-9]{3,15}$/
     var password=document.getElementById("passwordInput").value;
     var passregex=/^[A-Za-z0-9]{5,15}$/
     if(emriregex.test(emri)){
        alert("name is valid");
     }else{
        alert("name should have 1 capital letter to the name, a space, and a capital letter for surname!");
     }
     if(emailregex.test(email)){
        alert("email is valid");
     }else{
        alert("email should be in this format: name.surname@---.com/edu");
     }
     if(userregex.test(user)){
        alert("Username is valid");
     }else{
        alert("Username should have 1 capital letter and a number!");
     }
     if(passregex.test(password)){
        alert("password is valid");
     }else{
        alert("Password should have 5 or more letters!");
     }
}
function validoContact(){
   var emri=document.getElementById("Name-1").value;
   var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
   var email=document.getElementById("Email-1").value;
   var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
   var phone=document.getElementById("Phone-Number-1").value;
   var phoneregex=/^[0-9]{3}[0-9]{3}[0-9]{3}$/
   var date=document.getElementById("datepicker").value;
   var dateregex=/^[0-9]\/{2}[0-9]{2}\/[0-9]{4}$/
   if(emriregex.test(emri)){
      alert("name is valid");
   }else{
      alert("name should have 1 capital letter to the name, a space, and a capital letter for surname!");
   }
   if(emailregex.test(email)){
      alert("email is valid");
   }else{
      alert("email should be in this format: name.surname@---.com/edu");
   }
   if(phoneregex.test(phone)){
   }else{
      alert("phone number should be in this format: 000-000-000!");
   }
   if(phone.length<9){
      alert("Phone length should be 9 digits!");
   }
   if(dateregex.test(date)){
      alert("date is valid!");
   }else{
      alert("Date should be in this format: mm/dd/yyyy");
   }
   if(date.slice(-4)>2022 || date.slice(-4)<2022){
      alert("This year isnt valid!");
   }

}










