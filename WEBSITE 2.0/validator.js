

//form name=RegForm


function validateForm() {
    var a = document.forms["RegForm"]["fname"].value;
    if (a == "") {
      alert("Name must be filled out");
      fname.focus();
      return false;
    }
  var b = document.forms["RegForm"]["jobpost"].value;
  if (b ==""){
      alert("Job Post is required.");
      jobpost.focus();
      return false;
  }

  var c = document.forms["RegForm"]["email"].value;
  if (c ==""){
      alert("Email is required.");
      email.focus();
      return false;
  }
 
  var d = document.forms["RegForm"]["telno"].value;
  if(d==""){
      alert("Phone number is required.");
      telno.focus();
      return false;
  }

  var e = document.forms["RegForm"]["Linkac"].value;
  if(e ==""){
      alert("Linked In account required.");
      Linkac.focus();
      return false;
  }

  var f = document.forms["RegForm"]["password"].value;
  if (f ==""){
      alert("Password is required");
      password.focus();
      return false;
  }

  var g = document.forms["RegForm"]["cpassword"].value;
  if (g ==""){
      alert("Please confirm Your Password.");
      cpassword.focus();
      return false;
  }
 
  var h = document.forms["RegForm"]["gender"].value;
  if( h ==""){
      alert("Gender is required.");
      gender.focus();
      return false;

  }

  var i = document.forms["RegForm"]["textarea"].value;
  if(i ==""){
      alert("Required to describe the work");
      exampleFormControlTextarea1.focus();
      return false;
  }

  if(f != g){
      alert("Passwords don't match");
      cpassword.focus();
      return false;
  }
  else
  {
    return true;
    }
  



}


 

 