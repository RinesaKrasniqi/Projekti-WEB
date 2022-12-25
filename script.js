/*var array =[
    'C:/Users/Lenovo/OneDrive/Desktop/Projekt/Changes/Images/dentist-patient-kid.jpg',
    'C:/Users/Lenovo/OneDrive/Desktop/Projekt/Changes/Images/dentist-patient.jpg',
    'C:/Users/Lenovo/OneDrive/Desktop/Projekt/Changes/Images/dental-office.png'
    
    
   
];
​
​
var index=0;
var koha=1000;
function krijoSlider(){
   document.getElementById('imazhi').src=array[index];
   index++;
   if(index==array.length){
       index=0;
   }
​
   setTimeout("krijoSlider()",koha);
​
}
krijoSlider();*/
​
var counter =1;
setInterval(function(){
    document.getElementById('radio' + counter).checked=true;
    counter++;
    if(counter>3){
        counter=1;
    }
},2000); 
​
​
function valido(){
    var username=document.getElementById('usernameInput').value;
    var usernameRegex=/^[A-Za-z]{5,}[0-9]{1,}$/
    var password=document.getElementById('passwordInput').value;
    var passwordRegex=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/
​
    if(usernameRegex.test(username)){
        
    }else{
        alert("This username doesn't exist, check again!");
    }
    if(passwordRegex.test(password)){
        
    }else{
        alert("Password doesn't exit, try again!");
    }
    
}
​
​
function validoSignUp(){
    var emri=document.getElementById("name").value;
    var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
    var email=document.getElementById("email").value;
    var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
    var user=document.getElementById("usernameInput").value;
    var userregex=/^[A-Z][a-z0-9]{3,15}$/
    var password=document.getElementById("passwordInput").value;
    var passregex=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/
​
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
​
​
}
​
function validoContact(){
  var emri=document.getElementById("Name-1").value;
  var emriregex=/^[A-Z][a-z]{3,15}\s[A-Z][a-z]{3,15}$/
  var email=document.getElementById("Email-1").value;
  var emailregex=/[a-z]+@([a-z]+\.)+(edu|com)/
  var phone=document.getElementById("Phone-Number-1").value;
  var phoneregex=/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/
  var date=document.getElementById("datepicker").value;
  var dateregex=/^((?:19|20)[0-9][0-9])-(0?[1-9]|1[012])-(0?[1-9]|[12][0-9]|3[01])$/
  
​
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
  
  if(dateregex.test(date)){
     
  }else{
     alert("There are no free appointments for that day, try another one!");
  }
  
​
  
  
}