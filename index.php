<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDonte</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="shortcut icon" href="Resources/blood.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Playwrite+CO:wght@100..400&display=swap" rel="stylesheet">   
<!-- Start of Async Drift Code -->
<script>
    "use strict";
    
    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('cy9hhiv5b677');
    </script>
    <!-- End of Async Drift Code -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <!--Navbar-->
    <nav>
        </label>
        <a href="index.php"><h1><span style="font-family:Playwrite CO", cursive;>I</span><span style="color: red;">Donate</span></h1></a>
        </div>
        <ul id="menuList">
            <li><a href="">Home</a></li>
            <li><a href="login.php">Admin Login</a></li>
            <li><a href="booking.php">Donor Appointment</a></li>
            <li><a href="request.php">Blood Request</a></li>
            <li><a href=""></a></li>
        </ul>
        <div class="menu-icon">
            <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
        </div>
    </nav>
    <!--Landing-->
    <div class="landing">
    <div class="words">
    <div data-aos="zoom-in">
    <h1>DONATE AND SAVE A LIFE</h1>
    <p>You don't have to be a doctor to save a life.Your donation can make a life-changing difference.</p>
    </div>
    <div class="loader"></div>
    <a href="booking.php"><button class="first-btn">Book an Appointment</button></a>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Benefit as a donor
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Benefits as a donor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Health Check-up:</li>
          <p>Before donating blood, donors receive a mini-physical, including checks on blood pressure, hemoglobin levels,
             and general health. This can help identify any underlying health issues.</p>
          <li>Reduced Risk of Heart Disease:</li>
          <p>Regular blood donation can help reduce iron levels in the blood, which may lower the risk of heart disease and certain cancers.</p>
          <li>Calorie Burning:</li>
          <p>Donating blood can burn approximately 650 calories per pint, helping with weight management.</p>
          <li>Psychological Benefits:</li>
          <p>Helping others can boost your mood and mental well-being, providing a sense of accomplishment and altruism.</p>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Understood</button>
      </div>
    </div>
  </div>
</div>
  </div>
    </div>
    <!--About Us-->
    <div class="about">
      <div class="about_img" data-aos="fade-right" data-aos-easing="ease-in-sine">
        <img src="Resources/About.jpg" alt="About"  data-tilt>
      </div>
      <div data-aos="fade-left" class="about_words" data-aos-easing="ease-in-sine" >
      <h4>ABOUT US</h4> 
      <p>At IDonate, we're committed to transforming blood donation by seamlessly connecting donors with hospitals in need. 
        Empowering you to schedule donations, find nearby drives, and respond to hospitals requesting blood, we're here to 
        make a life-saving impact, together.</p>
      </div>
    </div>
     <!--Donation Process-->
    <div class="plan">
        <h3>Donation Process In 3 Easy Steps</h3>
        <p>The donation Process from booking  an appointment until the time you leave</p>
        <hr> 
 
   <div class="container">
    <div class="appointment" data-aos="fade-right"  data-aos-easing="ease-in-sine"><h4>BOOKING APPOINTMENT</h4></div>
    <div class="screen"><h4>BLOOD SCREENING</h4> </div>
    <div class="donor" data-aos="fade-left" data-aos-easing="ease-in-sine" ><h4>BLOOD DONATION</h4></div>
</div>
</div>

<div class="table-container">
        <h1>Blood Donation Days, Times, and Centers</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Donation Centers</th>
                    <th>Address</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mon - Sat</td>
                    <td>10:00 AM - 4:00 PM</td>
                    <td>City Blood Bank</td>
                    <td>123 Main St, Cityville</td>
                    <td>233 482 277 35</td>
                </tr>
                <tr>
                    <td>Mon - Sat</td>
                    <td>10:00 AM - 4:00 PM</td>
                    <td>Transfusion Ghana</td>
                    <td>456 Elm St, Cityville</td>
                    <td>233 482 277 35</td>
                </tr>
                <tr>
                    <td>Mon - Sat</td>
                    <td>10:00 AM - 4:00 PM</td>
                    <td>Blood Bank KATH</td>
                    <td>789 Maple St, Cityville</td>
                    <td>233 482 277 35</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="faqs" style="width:50% margin:auto;">
      <h1 style:color:darkred;>FAQs</h1>
    <div class="accordion" id="accordionExample" >
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Who is eligible for blood donations?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>An eligible blood donor?</strong><br> Eligible blood donors are typically healthy individuals aged 17-65 years, weighing at least 50 kg, with no major medical conditions, infections, or risky behaviors.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Who can request for blood?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>who can request for Blood?</strong><br> Registered hospitals can request blood from the blood bank using their assigned hospital IDs along with other required details.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Who is a donor?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Donor? </strong><br> A donor is someone who voluntarily gives something of value, such as money, goods, time, or, in the case of blood donation, blood, to help others or support a cause.
      </div>
    </div>
  </div>
</div>
</div>
<div class="i">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028851.3762013!2d-3.9351654052734024!3d6.696319791772654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb97ddd70e8927%3A0x3673d24c22bf181!2sBlood%20Bank%20KATH!5e0!3m2!1sen!2sgh!4v1725275955613!5m2!1sen!2sgh" width="100%" height="600" style="border:0; margin-top:70px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>
</div> 
</body>
<script src="javascript.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>
<footer>
  &COPY;2024 IDonate | All Rights Reserved.
</footer>
</html>