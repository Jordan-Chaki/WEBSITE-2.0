function validateForm() {
    var a = document.forms["register"]["fname"].value;
    if (a == "") {
      alert("First name required.");
      fname.focus();
      return false;
    }
  var b = document.forms["register"]["lname"].value;
  if (b ==""){
      alert("Last name required.");
      lname.focus();
      return false;
  }

  var c = document.forms["register"]["mname"].value;
  if (c ==""){
      alert("Middle name is required.");
      mname.focus();
      return false;
  }
 
  var d = document.forms["register"]["uname"].value;
  if(d==""){
      alert("Username is required.");
      uname.focus();
      return false;
  }

  var e = document.forms["register"]["email"].value;
  if(e ==""){
      alert("Email is required");
      email.focus();
      return false;
  }

  var f = document.forms["register"]["resume"].value;
  if (f ==""){
      alert("Resume not uploaded");
      resume.focus();
      return false;
  }

  var g = document.forms["register"]["password"].value;
  if (g ==""){
      alert("Password is required.");
      password.focus();
      return false;
  }
    


 
  var h = document.forms["register"]["cpassword"].value;
  if( h ==""){
      alert("Please confirm your Password.");
      cpassword.focus();
      return false;

  }

  
  if(g != h){
      alert("Passwords don't match");
      cpassword.focus();
      return false;
  }
  //

  var i = document.forms["register"]["telno"].value;
  if( i ==""){
      alert("Telephone number is required");
      telno.focus();
      return false;

  }
  var j = document.forms["register"]["tsapno"].value;
  if( j ==""){
      alert("Whatsapp number is required.");
      tsapno.focus();
      return false;

  }
  var k = document.forms["register"]["instagram"].value;
  if( k ==""){
      alert("Instagram name is required.");
      instagram.focus();
      return false;

  }
  var l = document.forms["register"]["twitter"].value;
  if( l ==""){
      alert("Twitter name is required.");
      twitter.focus();
      return false;

  }
  var m = document.forms["register"]["facebook"].value;
  if( m ==""){
      alert("Facebook Name is required.");
      facebook.focus();
      return false;

  }
  var h = document.forms["register"]["linkedin"].value;
  if( h ==""){
      alert("Linkedin account name required.");
      linkedin.focus();
      return false;

  }
  //

  else
  {
    return true;
    }



 

}


