<?php
session_start();  // Retrieve the OTP code and mobile number from the form
$otpCode = $_POST['otp']; 
$mobileNumber = $_POST['mobile'];  // Check if the OTP code and mobile number match the ones stored in the session 

if ($otpCode == $_SESSION['otp'] && $_SESSION['mobile'] == $mobileNumber) {  // If they match, update the user status in the database 
    $db = new PDO('mysql:host=localhost;dbname=webapp', 'root', ''); 
    $stmt = $db->prepare('UPDATE mainusers SET status = :status WHERE mobile_number = :mobile_number'); 
    $stmt->bindParam(':status', $status); 
    $stmt->bindParam(':mobile_number', $mobileNumber); 
    $status = 'verified'; 
    $stmt->execute();  // Display a success message 
    echo 'Your mobile number has been verified.'; 
} 
else 
{  // If the OTP code or mobile number don't match, display an error message 
    echo 'Invalid OTP code or mobile number.'; 
} 
?>

<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracknow.lk</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1;0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,1;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
     <!--animate-->
<link href="wow/animatew.css" rel="stylesheet" type="text/css" media="all">

<script src="wow/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
 

    <!-- Add custom CSS if needed -->
    <style>
        body {
            font-family: 'Sofia Sans', sans-serif;
            align-items: grid;
            align-content: center;
           


            
        }
        header {
            width: auto; height: 76px; 
            background-color: #CB89FF; 
            font-weight: bold; 
            
        }

        .headertxt{
            animation: typewriter1 4s steps(40) infinite; 
            white-space: nowrap;
            overflow: hidden;
        }

        @keyframes typewriter1 {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .sinhala {
            font-family: 'Noto Sans Sinhala', sans-serif;
        }

        .jumbotron {
            background-color: #fff;
            color: dark;
            
            
        }

        .lead {
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #CB89FF;
            border-color: #004999;
            width: 20rem;
            height: 3.3rem;
            border-radius: 5px;
            font-weight: 700;
        }
        .cover-image {
            width:11.25rem;
            height: 9.64875rem;
            object-fit: cover;
        }
        .intro-box {
            
            
            color: #3F3F3F;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 25px;
            font-size: 1.121rem;
            font-weight: 600;
        }

        .ftxt{
            width: 20rem;
            height: 3.5rem;
            border-radius: 5px;
            background: #EBEBEB;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 5px;
            margin-bottom:30px;
            padding: 10px; /* Add padding for better readability */
            font-size:1.375rem;
            font-weight: 700;
        }
        .mtxt{
            color:#CB89FF;
            font-weight: 800; 
            font-size: 1.15rem;
            text-decoration: none;
             border-color: #004999;

        }
        a:hover {
            color: #D90429 !important; 
        }
        

        #phone-number-input::placeholder {
            color: #ACABAB;

        }
                        
        
        .main-content {
            text-align: center; /* Align the text center within the container */
        }

        .main-content .row {
            justify-content: left; /* Center the items horizontally */
        }

        .main-content ul.list-unstyled li {
            margin-bottom: 20px; /* Change the bottom margin as needed */
            font-size: 0.6rem; /* Adjust the font size */
            line-height: 1.5em; /* Adjust the line height for better readability */
            color: #666; /* Change the text color if needed */
        }
        #spinner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1000;
            
        }

        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid #CB89FF;
            width: 40px;
            height: 40px;
            animation: spin .6s linear infinite;

        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="mb-0 max-width p-0" >
    <div id="spinner-overlay">
              <div class="spinner"></div>
          </div>

        <div class="  justify-content-center col-lg-12 mb-0">
                    <header role="banner " class="text-white  d-block" >
                           <div class="container text-center py-4 headertxt">
                                <h1>Verify</h1>
                            </div>
                        </header>

                        <div class="sinhala intro-box  container text-dark text-center d-block mb-3 ">ඔබගේ දුරකථන අංකය තහවුරු කිරීම</div>
        </div>

        <div class="container py-4">
         <div data-aos="fade-up">
            <img src="Group 1.png" alt="Cover Image" class="cover-image mx-auto mt-3 mb-3 d-block wow fadeInDown animated animated" data-wow-delay=".3s" >
            <p class=" intro-box text-center d-block sinhala  wow pulse infinite"  style="margin-bottom:-25px; animation-duration:3s; animation-delay:1.2s; animation-iteration-count:infinite;"><!--intro text-->
                 ඔබගේ 0766113218 අංකයට ලැබුණු<br> OTP කේතය ඇතුලත් කරන්න.</p>
        </div>
       </div>


        <main role="main" class="container py-4 jumbotron d-block mx-auto lead main-content">
            <!---main text-->
            <div class="text-center intro-box sinhala container mb-3" style=" font-size:.9rem; weight: 400; color:#000000; margin-top: -10px;">Please enter code sent to your number            

                </div>

            </div>
            <!---form-->
        
            <form action="adduser.php" method="post">
                <div class="form-group sinhala" style="margin-top: 40px;">
                    <input type="tel" class="form-control ftxt text-center " id="phone-authcode-input" placeholder="XXX XXX" name="authcode" name="authNumber" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 mb-3">VERIFY</button>
            </form>
            <p class="text-center mt-3  pt-2  ">
                            <a href="#" class="mtxt ">Resend OTP</a>
            </p>
                       
        </main>
       




<script>
  const phoneInput = document.getElementById('phone-authcode-input');
  const exampleNumber = 'XXX XXX';

  phoneInput.addEventListener('input', () => {
    const inputValue = phoneInput.value.replace(/[^\d+]/g, '').slice(0, 6); // Remove non-digit characters and keep first 12 digits
    let formattedValue;

    if (inputValue.length > 0 && inputValue.length < 2) {
      formattedValue =  inputValue;
    } else {
      formattedValue = inputValue;
      formattedValue = formattedValue.replace(/(\d{3})(\d{3})/, '$1 $2');
    }

    if (inputValue.length > exampleNumber.length) {
      phoneInput.setCustomValidity('Please enter a valid code.');
    } else {
      phoneInput.setCustomValidity('');
    }

    phoneInput.value = formattedValue;
  });

  // Remove spaces between digits before sending the phone number to the server
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    const phoneInputValue = phoneInput.value;
    const phoneNumberWithoutSpaces = phoneInputValue.replace(/\s/g, '');
    phoneInput.value = phoneNumberWithoutSpaces;
  });
</script>

<script>
           // Event listener to detect when the page has fully loaded
    window.addEventListener('load', function () {
        // Hide the spinner after the page has loaded
        hideSpinner();
    });

    function showSpinner() {
        document.getElementById('spinner-overlay').style.display = 'flex';
    }

    function hideSpinner() {
        document.getElementById('spinner-overlay').style.display = 'none';
    }

    // Simulate loading by delaying the hiding of the spinner
    // Replace this with your actual loading logic
    setTimeout(function () {
        hideSpinner();
    }, 5000); // Adjust the delay as needed

</script>
<!--Bootstrap JS dependencies for Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>