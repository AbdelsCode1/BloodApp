
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap 5 icons CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Admin Crud</title>
    <link rel="stylesheet" href="style admin.css">
    <link rel="shortcut icon" href="Resources/blood.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Playwrite+CO:wght@100..400&display=swap" rel="stylesheet">   
  </head>
  <body>
    
<header>
<div class="logo">
<a href="index.php"><h1><span style="font-family:Playwrite CO", cursive;>I</span><span style="color: black;">Donate</span></h1></a>
</div>
<div class="other">
<img src="image/3135715.png" alt="Profile">
<p>Administrator</p>
<a href="login.php"><button>Logout</button></a>
</div>
</header>
<div class="title">
<h1>Blood Donation Management System</h1>
</div>
    <section class="p-3">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">New Donor <i class="bi bi-people"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Blood Group</th>
                            <th>Donation Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="data"></tbody>
                </table>
            </div>
        </div>
    </section>


    <!--Modal Form-->
    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Fill the Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <label for="imgInput" class="upload">
                                <input type="file" name="" id="imgInput">
                                <i class="bi bi-plus-circle-dotted"></i>
                            </label>
                            <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="img">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" name="" id="name" required>
                            </div>
                            <div>
                                <label for="age">Age:</label>
                                <input type="number" name="" id="age" required>
                            </div>
                            <div>
                                <label for="city">City:</label>
                                <input type="text" name="" id="city" required>
                            </div>
                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" name="" id="email" required>
                            </div>
                            <div>
                                <label for="phone">Number:</label>
                                <input type="text" name="" id="phone" minlength="11" maxlength="11" required>
                            </div>
                            <div>
                                <label for="post">Blood Group:</label>
                                <input type="text" name="" id="post" required>
                            </div>
                            <div>
                                <label for="sDate">Donation Date:</label>
                                <input type="date" name="" id="sDate" required>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="myForm" class="btn btn-primary submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!--Read Data Modal-->
    <div class="modal fade" id="readData">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Donor's Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="showImg">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" name="" id="showName" disabled>
                            </div>
                            <div>
                                <label for="age">Age:</label>
                                <input type="number" name="" id="showAge" disabled>
                            </div>
                            <div>
                                <label for="city">City:</label>
                                <input type="text" name="" id="showCity" disabled>
                            </div>
                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" name="" id="showEmail" disabled>
                            </div>
                            <div>
                                <label for="phone">Number:</label>
                                <input type="text" name="" id="showPhone" minlength="11" maxlength="11" disabled>
                            </div>
                            <div>
                                <label for="post">Blood Group:</label>
                                <input type="text" name="" id="showPost" disabled>
                            </div>
                            <div>
                                <label for="sDate">Donation Date:</label>
                                <input type="date" name="" id="showsDate" disabled>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
  <footer>
  &COPY;2024 IDonate | All Rights Reserved.
</footer>
</html>