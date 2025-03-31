let form = documnet.getElementById("form1");
function sign(_form) {
    var Renter_Password= document.getElementById('Renter_Password').value;
    var Password = document.getElementById('Password').value;

    // Simple validation (in a real application, use secure methods)
    if ( Password === Renter_Password ) {
      alert('Login successful!');
      // You can redirect to another page or perform other actions after successful login.
      return true;
    } 
    else {
      alert('Login failed. Please check your username and password.');
      return false;
    }
}