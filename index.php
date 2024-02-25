<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the mobile number from the form
  $mobileNumber = $_POST['mobileNumber'];

  // Simulate sending an authentication code (in a real app, this would be sent via SMS or another method)
  $authCode = "1234"; // Replace with actual authentication code generation logic

  // Store the mobile number and auth code in session
  session_start();
  $_SESSION['mobileNumber'] = $mobileNumber;
  $_SESSION['authCode'] = $authCode;

  // Redirect the user to the authentication page
  header("Location: register1.php");
  exit();
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
            border-radius: 12px;
            font-weight: 700;
        }
        .cover-image {
            width:17rem;
            height: 16rem;
            object-fit: cover;
        }
        .intro-box {
            width: 22.5rem;
            height: 4.5rem;
            border-radius: 5px;
            background: #EBEBEB;
            color: #3F3F3F;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 25px;
            padding: 10px; /* Add padding for better readability */
            font-size: .7rem;
            font-weight: 700;
        }



        .maintxt{
            width: 22.5rem;
            height: 2.3rem;
            border-radius: 5px;
            background: #EBEBEB;
            color: #3F3F3F;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 5px;
            margin-bottom:30px;
            padding: 10px; /* Add padding for better readability */
            font-size: .7rem;
            font-weight: 700;
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
            color:gray;/*#9B9B9B;--maintxt, #959494--subtxt*/
            opacity: 50%;
            font-weight: 700; 
            font-size: 1rem;

        }
        .stxt{
            color:gray;/*#9B9B9B;--maintxt, #959494--subtxt*/
            font-weight: 400; 
            font-size: 1rem;
            margin-top: -33px;
            opacity: 80%;

        }

        #phone-number-input::placeholder {
            color: #ACABAB;

        }
                        
         .ccircle {
          display: inline-block;
          margin-left: -1em;
          margin-right: 1em;
          color:  #CB89FF;
          font-size: 2em;
          vertical-align: text-bottom;
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
                                <h1>Tracknow.lk</h1>
                            </div>
                        </header>
        </div>

        <div class="container py-4">
         <div data-aos="fade-up">
            <img src="cover.png" alt="Cover Image" class="cover-image mx-auto d-block wow fadeInDown animated animated" data-wow-delay=".3s" >
            <p class=" intro-box text-center d-block sinhala  wow pulse infinite"  style="margin-bottom:-25px; animation-duration:3s; animation-delay:1.2s; animation-iteration-count:infinite;"><!--intro text-->
                 ඔයාගේ පවුලේ අය, යහලුවන් හෝ ඔයා ආදරය කරන අයට<br> කරදරයක් නොවී එයාල ඉන්නේ කොහෙද කියල දැන ගන්න.<br> දැන්ම TrackNow.lk එකට ලියාපදිංචි වෙන්න.</p>
        </div>


        <main role="main" class="container py-4 jumbotron d-block mx-auto lead main-content">
            <!---main text-->
            <div class="text-center sinhala container" style=" font-size:.6rem; font-weight: 400; color:#434244; width:393px; height:auto;">

                <div class="row justify-content-left">

                    <div class="col-md-8 ">
                        <ul class="list-unstyled wow fadeInUp animated animated" data-wow-delay=".5s" style="margin-top:10%;">
                            
                            <li style="width: 35em; height: auto;"class="ps-3 d-flex "> <span class="ccircle"><i class="bi bi-check-circle-fill"></i></span>ඔබට අවශ්‍ය වන්නේ සොයන්නාගෙ දුරකථන අංකය පමණයි</li>

                            <li style="width: 36.3em; height: auto;"class="ps-3 d-flex"> <span class="ccircle"><i class="bi bi-check-circle-fill"></i></span>ඔබට ඕනෑම වෙලාවක ඔවුන් සිටින ස්ථානය දැනගන්න පුලුවන්</li>

                            <li style="width: 38.3em; height: auto;"class="ps-3 d-flex"> <span class="ccircle"><i class="bi bi-check-circle-fill"></i></span>සොයන්නාගේ නියමිත ස්ථානය Google Map ඔස්සේ බලන්න පුලුවන් </li>

                            <li style="width: 29.8em; height: auto;" class="ps-3 d-flex"> <span class="ccircle"><i class="bi bi-check-circle-fill"></i></span>සොයන්නාගේ දුරකථනය ක්‍රියාවිරහිත හෝ අන්තර්ජාල පහසුකම් නැති වුවත් Location Track කරන්න පුලුවන්</li>
                        </ul>

                    </div>

                </div>

            </div>
            <!---form-->
            <form action="register1.php" method="post">
                <div class="form-group sinhala">
                    <label for="phoneNumber" class="maintxt">ඔබගේ දුරකථන අංකය ඇතුලත් කර ඉදිරියට යන්න</label>
                    <input type="tel" class="form-control ftxt text-center" id="phone-number-input" placeholder="07X XXX XXXX" name="phone" name="phoneNumber" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block ">NEXT</button>
            </form>
            <p class="text-center mt-3  p-0 mtxt">
                            By clicking Register, you agree to our <a href="terms_and_conditions.html" style="text-decoration: none;">T&C</a>. You can unregister from the service anytime.</p>
            <p class="text-center p-3 stxt" >
                            LKR 8 + Tax Per Day</br></p>            
        </main>
    </div>
       




<script>
  const phoneInput = document.getElementById('phone-number-input');
  const exampleNumber = '07X XXX XXXX';

  phoneInput.addEventListener('input', () => {
    const inputValue = phoneInput.value.replace(/[^\d+]/g, '').slice(0, 12); // Remove non-digit characters and keep first 12 digits
    let formattedValue;

    if (inputValue.length > 0 && inputValue.length < 2) {
      formattedValue =  inputValue;
    } else {
      formattedValue = inputValue;
      formattedValue = formattedValue.replace(/^0/, '+94');
      // Add spaces between digits for display purposes
      formattedValue = formattedValue.replace(/(\d{4})(\d{3})(\d{4})/, '$1 $2 $3');
    }

    if (inputValue.length > exampleNumber.length) {
      phoneInput.setCustomValidity('Please enter a valid phone number.');
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


