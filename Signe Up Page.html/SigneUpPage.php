<?php
  include '../HeaderFooter/header.php'
?>

<!-- Body Start -->
<br>
<hr>
<br>

<br>
<h1 style="text-align: center; position:relative; width: 100%;">Sign Up Page</h1>
<br>

<div id="devCont_middle" style="height: 5rem;">         
</div>
        
<br>

<form action="action_page.php" style="border: none; box-shadow:1px 1px 2px #444; padding-left: 10%; padding-right: 10%; padding-bottom: 5%;">
  <div class="container1">
    <h1 style="font-family: 'Courier New', Courier, monospace; font-size: 3rem;">Sign Up</h1>
    <p style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Please fill in this form to create an account.</p>
    <hr>
    
    <label for="Fname"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" id="textinput"  required>

    <label for="Lname"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" id="textinput"  required>

    <label for="email"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="textinput"  required>

    <label for="Telno"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Telephone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phonenumber" id="textinput"  required>

    <label for="psw"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  id="textinput"  required>

    <label for="psw-repeat"><b style="font-family: 'Courier New', Courier, monospace; font-size: 2rem;">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="textinput" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p style="font-family: 'Courier New', Courier, monospace; font-size: 1rem;">By creating an account you agree to our <a href="#" style="color:dodgerblue; font-family: 'Courier New', Courier, monospace; font-size: 1rem;">Terms & Privacy</a>.</p>

    <div style="height: 40px; position: relative; border: none;">
      <div style="margin: 0; position: absolute; top: 60%; left: 30%; right: 26%; -ms-transform: translateY(-50%); transform: translateY(-50%); width: 15rem;">
        <button formaction="\iwtProject\index.php" class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer;">Cacel</button>
      </div> 
      <div style="margin: 0; position: absolute; top: 60%; left: 55%; right: 0%; -ms-transform: translateY(-50%); transform: translateY(-50%); width:15rem;">
        <button formaction="\iwtProject\Signe Up Page.html\SigneUpPage.php" class="navbar__btn button1" style="display: flex; box-shadow: 2px 2px 1px 1px #000; align-items: flex-start; cursor: pointer; ">Sigh Up</button>
      </div>
    </div>
  </div>
</form>

<style>

/* * {box-sizing: border-box}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
} */

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container1 {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<br>

<div id="devCont_middle" style="height: 5rem;">         
</div>

<br> 
<!-- Body End -->



<?php
  include '../HeaderFooter/footer.php'
?>