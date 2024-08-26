<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood  Request</title>
    <link rel="shortcut icon" href="Resources/blood.ico" type="image/x-icon">
    <style>
        body{
            align-items: center;
            height: 100vh;
            margin: 0;
           background-image: url(Resources/llleaves.svg);
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
        }

        input,select{
        padding: 10px;
        width: 30lvw;
        border:none ;
        border-bottom: 1px solid white;
        outline: none;
        color:white;
         
        }

        input:active{
        border: none;
        outline: none;
        }         
        .request{
            background-color:rgb(134, 0, 89);
            backdrop-filter: blur(10px);
            width:35%;
            border-radius: 4px;
            margin:120px auto;
            padding:50px;
            box-shadow: 10px 10px 5px rgb(82, 11, 77);
            color: white;
            margin: auto;
            text-align: center;
            margin-top: 0px;
    
        }

        h3{
            text-align: center;
            position: relative;
        }

        button{
            background-color: green;
            color: #f0f0f0;
            padding: 10px;
            width: 30lvw;
            margin-top:10px;
        }
        input, select{
            width: 30vw;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            background-color: transparent;
        }

        select{
          background-color:rgb(134, 0, 89);
        }

        select{
            width: 31.9vw;
        }

        img{
            width: 60px;
            display: inline;
            margin: 0;
            padding: 0px;
            background-blend-mode:lighten;
            border-radius:50px;
        }

@media screen and (max-width: 570px) {
    .request {
      width: 65%;
      margin-left:none;
      padding:40px;
      margin-top:50px;
    }
  }
    </style>
</head>
<body>
<form action="https://api.web3forms.com/submit" method="POST" class="request">
  <img src="Resources/blood.gif"></img>
  <h3>BLOOD REQUEST</h3>  
  <input type="hidden" name="access_key" value="5dac5cbd-7785-42f7-886d-986c9c6bc80c">
  <input type="text" name="ID" placeholder="Hospital ID">
  <br>
  <input type="text" name="Name" placeholder="Hospital Name">
  <br>
  <select name="bloodGroup" id="bloodGroup" aria-placeholder="bloodGroup">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select>
    <br>
  <input type="number" name="Quantity" placeholder="Unit of Blood">
  <br>
  <input type="tel" name="Tel number" placeholder="Telephone Number">
  <br>
  <button class="submit">Submit</button>
</form>
</body>
<script src="script.js"></script>
</html>