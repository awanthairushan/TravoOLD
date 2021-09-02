var checkpassword = function() {
  if (document.getElementById('password').value ==
document.getElementById('retype-password').value) {
    document.getElementById('pmessage').style.color = 'green';
    document.getElementById('pmessage').innerHTML = 'matching';
  } else {
    document.getElementById('pmessage').style.color = 'red';
    document.getElementById('pmessage').innerHTML = 'not matching';
  }
}
