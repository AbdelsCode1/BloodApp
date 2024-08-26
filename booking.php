<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blood Donation Appointment Booking</title>
<link rel="stylesheet" href="Appointment.css">
<link rel="shortcut icon" href="Resources/blood.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+CO:wght@100..400&display=swap" rel="stylesheet">
<style>
  body{
    background-image: url(Resources/login-back.jpg);
  }
  .container{
    justify-content: center;
    margin: auto;
  }
.container{
    margin: auto;
    width: 32lvw;
    padding: 20px;
    border-radius: 12px;
    background-color: white;
    
  
  }

  h2{
    text-align: center;
    margin-top: -30px;
    padding-top:30px ;
    color: brown;
    margin-bottom: 50px;
  }
  
  input{
    padding: 10px;
    width: 30lvw;
    border:none ;
    border-bottom: 1px solid red;
    outline: none;
  }

  input:active{
    border: none;
    outline: none;
  }

button{
   height: 8lvh;
   width: 31lvw;
   font-size: 16px;
   border-radius: 6px;
   background-color: rgba(128, 0, 0, 0.783);
   border-color: 1px aliceblue solid;
   color: white;
   outline: none;
   border: none;
  
}

button:hover{
  background-color: rgb(128, 0, 0);
}

@media (max-width:600px){

  .container{
    margin: auto;
    padding: 90px;
    place-content: center;
    margin-top: 90px;
 
  }

  .sub-container{
    margin: auto;
  }


  h2{
    font-size: 14px;
  }

  button{
      font-size: 14px;
  }
}

</style>
</head>
<body>
<div class="container">
  <div class="sub-container"></div>
  <h2>APPOINTMENT BOOKING</h2> 
   <form id="appointmentForm" action="https://api.web3forms.com/submit" method="POST">
    <input type="hidden" name="access_key" value="5dac5cbd-7785-42f7-886d-986c9c6bc80c">
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>
  

    <label for="appointmentDate">Preferred Date:</label>
    <input type="date" id="appointmentDate" name="appointmentDate" required><br><br>
    
    <label for="appointmentTime">Preferred Time:</label>
    <input type="time" id="appointmentTime" name="appointmentTime" required><br><br>
    
    <button>Book Appointment</button>
  </form>
</div>

<script src="script.js"></script>
</body>
</html>