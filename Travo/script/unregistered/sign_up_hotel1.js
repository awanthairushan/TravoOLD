var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('retype-password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
// function phonenumber(inputtxt)
// {
//   var phoneno = /^\d{10}$/;
//   if(inputtxt.value.match(phoneno))
//   {
//       return true;
//   }
//   else
//   {
//      alert("Not a valid Phone Number");
//      return false;
//   }
//   }