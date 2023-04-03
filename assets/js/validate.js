function validateContact()
{
var name=document.getElementById("name").value;
var mobile=document.getElementById("mobile").value;
var email=document.getElementById("email").value;
var message=document.getElementById("message").value;

var nameErr = mobileErr = emailErr = messageErr  = true;

// Validate name
if(name.trim()== "") {
    document.getElementById("nameErr").innerHTML="** Please enter your name";
} else {
    var regex = /^[a-zA-Z\s]+$/;                
    if(regex.test(name) === false) {
        document.getElementById("nameErr").innerHTML="** Please enter a valid name";
    } else {
        document.getElementById("nameErr").innerHTML="";
        nameErr = false;
    }
}

// Validate mobile number
if(mobile.trim()== "") {
    document.getElementById("mobileErr").innerHTML="**Please enter your mobile number";
} else {
    var regex = /^[1-9]\d{9}$/;
    if(regex.test(mobile) === false) {
        document.getElementById("mobileErr").innerHTML="** Please enter a valid 10 digit mobile number";
    } else{
        document.getElementById("mobileErr").innerHTML="";
        mobileErr = false;
    }
}

// Validate email address
if(email.trim()== "") {
    document.getElementById("emailErr").innerHTML="** Please enter your email address";
} else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if(regex.test(email) === false) {
        document.getElementById("emailErr").innerHTML="** Please enter a valid email address";
    } else{
        document.getElementById("emailErr").innerHTML="";
        emailErr = false;
    }
}


//validate message
if(message.trim()==""){
    document.getElementById("messageErr").innerHTML="** Please enter your message";
}
else {      
    document.getElementById("messageErr").innerHTML="";
    messageErr = false;
}

if((nameErr || mobileErr || emailErr || messageErr) == true ) {
    return false;}
else
{
    alert(" Thank You For Contact Me !! ");
	return true;
    
}
}



//validateHire()



function validateHire()
{

var org=document.getElementById("org").value;

var orgErr  = true;


//validate org
if(org.trim()==""){
    document.getElementById("orgErr").innerHTML="** Please enter your organization name";
}
else {      
    document.getElementById("orgErr").innerHTML="";
    orgErr = false;
}


if( orgErr == true) {
    return false;
}
else
{
    alert(" Thank You For This Offer !! ");
	return true;
}
}