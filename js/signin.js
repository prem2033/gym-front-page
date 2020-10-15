function validateForm() {
  let name = document.forms["myForm"]["name"].value;
  let phone = document.forms["myForm"]["phone"].value;
  let email = document.forms["myForm"]["email"].value;
  let password = document.forms["myForm"]["password"].value;
  let nameflag = false;
  let phoneflag = false;
  let emailflag = false;
  let passwordflag = false;
  if (validateName(name.trim())) { //&& ValidatePhoneNumber(phone) && ValidateEmail(email) && validatePassword(password)) 
    nameflag = true;
  }
  if (ValidatePhoneNumber(phone.trim())) {
    phoneflag = true;
  }
  if (ValidateEmail(email.trim())) {
    emailflag = true;
  }
  if (validatePassword(password.trim())) {
    passwordflag = true;
  }
  if (nameflag && phoneflag && emailflag && passwordflag) {
    return true;
  }
  else {
    return false;
  }
}
//validate email
function ValidateEmail(inputText) {
  let mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (inputText.match(mailformat)) {
    document.getElementById('mail').style.removeProperty('box-shadow');
    return true;
  }
  else {
    //focus on input field
    // document.myForm.email.focus();
    document.getElementById('mail').style.boxShadow = "0 0 10px red";
    return false;
  }
}
//validate phone number
function ValidatePhoneNumber(phone) {
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if (phone.match(phoneno)) {
    document.getElementById('phone').style.removeProperty('box-shadow');
    return true;
  }
  else {
    document.getElementById('phone').style.boxShadow = "0 0 10px red";
    return false;
  }
}
//valiadte name
function validateName(name) {
  var namregx = /^[A-Za-z\s]+$/;
  if (name.match(namregx)) {
    document.getElementById('name').style.removeProperty('box-shadow');
    // document.getElementById('name-error').innerText="";
    return true;
  } else {
    document.getElementById('name').style.boxShadow = "0 0 10px red";
    // document.getElementById('name-error').innerText="name";
    return false;
  }
}
//validate password
function validatePassword(password) {
  if (password == "") {
    document.getElementById('password').style.boxShadow = "0 0 10px red";
    return false;
  } else {
    document.getElementById('password').style.removeProperty('box-shadow');
    return true;
  }
}
//toggle password
function passwordVisible() {
  var pass = document.getElementById("password");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}

//valiadte the from while login
function validatebeforelogin(){
  let email = document.forms["myForm"]["email"].value;
  let password = document.forms["myForm"]["password"].value;
  let emailflag = false;
  let passwordflag = false;
  if (ValidateEmail(email.trim())) {
    emailflag = true;
  }
  if (validatePassword(password.trim())) {
    passwordflag = true;
  }
  if (emailflag && passwordflag) {
    return true;
  }
  else {
    // document.getElementById('erorr-msg').innerText="wrong credentials";
    return false;
  }
}



