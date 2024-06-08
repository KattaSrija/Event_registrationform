<?php
include("register.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    form{
    width: 100%;
    border: 1px solid black;
    padding: 30px 30px 30px 30px;
    border-radius: 20px;
    margin: 4% auto;
    background-color: rgb(58, 91, 237);
    
}
    .container {
      max-width: 600px;
      margin-top: 50px;
    }
    input[type="submit"],input[type="reset"]
{
width:50%;
}
    input[type="submit"]{
   font-weight: bold;
   font-size: 18px;
    background-color: green;
}
input[type="submit"]:hover{
	background: green;
	border-color:black ;
}
    .is-invalid {
      border-color: #dc3545;
    }
    input[type="reset"]{
    font-weight: bold;
    font-size: 18px;
     background-color: rgb(233, 11, 11);
 }
    input[type="reset"]:hover{
        
	background: red;
	border-color:black ;
}
    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: 0.25rem;
      font-size: 80%;
      color: #dc3545;
    }
    .button-container{
    display:flex;
    width: 95%;
    height: 45px;
    position: center;
    border: 1px solid black;
}
    .is-invalid ~ .invalid-feedback {
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4" style="text-align: center;">Registration Form</h2>
    <form id="registrationForm" action="register.php" method="POST" onsubmit="return validate()">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" value="" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required>
        <div class="invalid-feedback">Full name is required.</div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" value="" class="form-control" id="email" name="email" placeholder="Enter email" required>
        <div class="invalid-feedback">Valid email is required.</div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" value="" class="form-control" id="address" name="address" placeholder="Enter address" required>
        <div class="invalid-feedback">Address is required.</div>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" value="" class="form-control" id="phone" name="phone" placeholder="Enter phone number" pattern="\d{10}" required>
        <div class="invalid-feedback">Phone number must be 10 digits.</div>
      </div>
      <div class="form-group">
        <label for="branch">Branch</label>
        <select class="form-control" name="branch" id="branch" required>
          <option value="">Select branch</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="Civil">Civil</option>
          <option value="Mechanical">Mechanical</option>
        </select>
        <div class="invalid-feedback">Branch selection is required.</div>
      </div>
      <div class="form-group">
        <label for="comments">Comments</label>
        <textarea class="form-control" value="" name="comments" id="comments" rows="3"></textarea>
      </div>
      <div class="button-container">
        <input type="submit" value="SUBMIT">
    
        <input type="reset" value="RESET"></div>
    </form>
  </div>
  <script>
  function validate()
            {
                var isstudentnamevalid=true;
                var isaddressvalid=true;
             
           
                var isbranchvalid=true;
                var isemailvalid=true;
                var isphonevalid=true;

                if(document.getElementById("fullname").value=="")
                {
                    isstudentnamevalid=false;
                   
                }
                
                
                
                if(document.getElementById("address").value=="")
                {
                    isaddressvalid=false;
                   
                }
                


                if(document.getElementById("branch").value=="")
                {
                    isbranchvalid=false;
                    
                }
            
               
                if(document.getElementById("email").value=="")
                {
                    isemailvalid=false;
                   
                }
                else if( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value)==false)
                {
                    isemailvalid=false;
                    
                }
               
                if(document.getElementById("phone").value=="")
                {
                    isphonevalid=false;
                    document.getElementById("isphonevalid").innerHTML="&#x2716; <br>please enter phone number";
                    document.getElementById("isphonevalid").style.color="red";
                }
                else if(/^[6-9]\d{9}$/.test(document.getElementById("phone").value)==false)
                {
                    isphonevalid=false;
                    
                }
               




                if(isphonevalid==false || isstudentnamevalid == false || isaddressvalid ==false || isbranchvalid==false || isemailvalid==false)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            }

          
        </script>
  ><!--<script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var isValid = true;

      var fullName = document.getElementById('fullName');
      var email = document.getElementById('email');
      var address = document.getElementById('address');
      var phoneNumber = document.getElementById('phoneNumber');
      var branch = document.getElementById('branch');

      if (fullName.value.trim() === '') {
        isValid = false;
        fullName.classList.add('is-invalid');
      } else {
        fullName.classList.remove('is-invalid');
      }

      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!emailPattern.test(email.value.trim())) {
        isValid = false;
        email.classList.add('is-invalid');
      } else {
        email.classList.remove('is-invalid');
      }

      if (address.value.trim() === '') {
        isValid = false;
        address.classList.add('is-invalid');
      } else {
        address.classList.remove('is-invalid');
      }

      var phonePattern = /^\d{10}$/;
      if (!phonePattern.test(phoneNumber.value.trim())) {
        isValid = false;
        phoneNumber.classList.add('is-invalid');
      } else {
        phoneNumber.classList.remove('is-invalid');
      }

      if (branch.value === '') {
        isValid = false;
        branch.classList.add('is-invalid');
      } else {
        branch.classList.remove('is-invalid');
      }
a  });
  </script>-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
 
