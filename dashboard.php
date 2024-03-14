<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracknow.lk</title>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" ></script>

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
            width: auto; height: 280px;
            border-bottom-left-radius:52px;
            border-bottom-right-radius: 52px; 
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
           
            border-radius: 12px;
            font-weight: 700;
        }
        .btn.loading {
          cursor: not-allowed;
          opacity: 0.5;
        }

        .cover-image {
            width:5.625rem;
            height:5.625rem;
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
            width: 12rem;
            height: 2.75rem;
            border-radius: 5px;
            background: #EBEBEB;
            margin: auto; /* Center the intro box horizontally */
            padding: 10px; /* Add padding for better readability */
            font-size:1.375rem;
            font-weight: 700;
        }

        .ftxt-2{
            width: 7rem;
            height: 2.75rem;
            border-radius: 5px;
            background: #CB89FF;
            margin: auto; /* Center the intro box horizontally */
            padding: 10px; /* Add padding for better readability */
            font-size:1.1875rem;
            font-weight: 800;
        }

        .mtxt{
            width: 14rem;
            height: 2.75rem;
            border-radius: 5px;
            background:#B4B0B0;
            font-weight: 700; 
            font-size: 1rem;
            border-color: #004999;

        }

        .mtxt:hover {
            color: #fff !important;

        }
        

        #phone-number-input::placeholder {
            color: #ACABAB;

        }
                        
        
        .main-content {
            text-align: center; /* Align the text center within the container */
        }    
        
        .thumbs {
          display: inline-block;
          margin-left: -1em;
          margin-right: 1em;
          color:  #fff;
          background-color: #CB89FF;
          font-size: 2em;
          vertical-align: text-bottom;
        }

        .line{
            width: 90%;
            height: 0.25em;
            border-radius: 5px;
            background: #EBEBEB;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 10px;
            margin-bottom:10px;
            
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

        .poptxt{
            color: #454343;
            margin: auto; /* Center the intro box horizontally */
            margin-top: 25px;
            font-size: 1rem;
            font-weight: 700;
        }

        .mptxt{
            color:#CB89FF;
            font-weight: 800; 
            font-size: 1rem;
            margin-top: 0%;
            text-decoration: none;
            border-color: #004999;

        }

        a:hover {
            color: #D90429 !important; 
        }
 
        .modal-dialog {
          margin: 15rem 5rem auto;
          display: block;
          width: 20.3125rem; 
          height: 25.25rem; 
          border-radius: 1.25rem;
          
        }

        .modal-titlet {
            font-size:1rem;
            weight:700;
        }

        .modal-content {
          background-color: #F1F1F1; /* Change to the desired color */
        }

       #otp-authcode-input::placeholder {
            color: #ACABAB;

        }

        .popbtxt{
            width: 8.625rem;
            height: 2.75rem;
            border-radius: 5px;
            background: #CB89FF;
            margin: 2rem 5rem auto; /* Center the intro box horizontally */
            padding: 10px; /* Add padding for better readability */
            font-size:1.15rem;
            font-weight: 800;
        }

        .pbtxt{
            width: 12rem;
            height: 2.75rem;
            border-radius: 5px;
            margin: auto; /* Center the intro box horizontally */
            padding: 10px; /* Add padding for better readability */
            font-size:1.375rem;
            font-weight: 700;
        }

        .d-flex.align-items-center {
              display: flex;
              align-items: center;
            }

            .justify-content-start {
              justify-content: flex-start;
            }



 </style>
</head>
<body class="mb-0 max-width p-0" >
    <div id="spinner-overlay">
              <div class="spinner"></div>
          </div>


        <div class="justify-content-center col-lg-12 col-md-12 col-sm-5 mb-0">
                    <header role="banner " class="text-white  d-block" >
                           <div class="container text-center py-4 headertxt">
                                <h1>Home</h1>

                            </div>
                            <div class="row container d-flex align-items-center mx-auto ">
  <div class="col-lg-3 col mx-auto  text-white p-3 py-4 d-flex align-items-center justify-content-start">
    <h1 class="me-3">Welcome <br>0766113218</h1>
  </div>
  <div class="col-md-4 mx-auto container img-responsive ms-auto d-flex" style="width: 60px; height: 60px;">
    <img src="Place Marker.png" alt="Place Marker" />
  </div>
</div>
                        </header>
                        
                        <div class=" mx-auto col-lg-4 col-md-7 container d-flex intro-box container mt-3 mb-3" style=" font-size:1.2rem; weight: 700; color:#676767; margin: 5px;">Your List - 
                        </div>
                       
        </div>

        

        <main role="main" class="container py-4 jumbotron d-block mx-auto lead main-content">
            <!---form-->
        <div class="container col-lg-4 mb-5 col-md-6 col-sm-5 d-block mx-auto">
            <form id="phoneForm"  method="post" class="form-inline py-4">
                <div class="d-flex align-items-center">
                    <input type="tel" class="form-control ftxt text-center mr-2" id="phone-number-input" placeholder="07X XXX XXXX" name="phone" name="phoneNumber" required>
                    <button type="button" class="btn btn-primary btn-lg btn-block ftxt-2" data-bs-toggle="modal" data-bs-target="#addUserModal">ADD</button>
                    <script>
                      document.getElementById('verifyFormSubmit').addEventListener('click', function (event) {
                        event.preventDefault();
                        document.getElementById('verifyForm').submit();
                      });
                    </script>
                </div>
            </form>

            <p class=" text-center text-dark mt-3  pt-2 mb-4  " style="font-size:1.625rem; font-weight: 400;">
                OR
                            
            </p>
        <button type="button" class="btn btn-primary btn-lg text-dark btn-block mtxt sinhala" onclick="redirectToDashboard()">පසුව එකතු කරන්න.</button>

        <script>
          function redirectToDashboard() {
            window.location.href = "dashboard.php";
          }
        </script>

            <p class="text-center text-dark " style="font-size:1rem; font-weight: 400;">Add later</p>
        </div>
                       
     </main>

     <!----popup------------------->
     
<div class=" modal container mx-auto justify-content-center col-lg-12 col-md-7 col-sm-5" tabindex="-1" id="addUserModal" >
  <div class="modal-dialog mx-auto justify-content-center ">
    <div class="modal-content">   
      
      <div class="modal-body">
        <button type="button" class="btn-close modal-header ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
        <h1 class=" text-center " style="font-size:2.125rem; weight:700;">VERIFY</h1>        

        
        <div data-aos="fade-up">
            
            <p class=" poptxt text-center d-block sinhala  wow pulse infinite"  style="margin-bottom:-25px; animation-duration:3s; animation-delay:1.2s; animation-iteration-count:infinite;"><!--intro text-->
                 ඔබගේ 0766113218 අංකයට ලැබුණු<br> OTP කේතය ඇතුලත් කරන්න.</p>
        </div>
       

        <form action="adduser.php" method="post" id="verifyForm">
          <div class="form-group sinhala" style="margin-top: 40px;">
            <input type="tel" class="form-control pbtxt text-center" id="otp-authcode-input" placeholder="XXX XXX" name="authcode" name="authNumber" pattern="[0-9]{6}" autocomplete="off" required >

          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 mb-3 popbtxt" id="verifyFormSubmit">VERIFY</button>
        </form>
        <p class="text-center ">
          <a href="#" class="mptxt" >Resend OTP</a>
        </p>
    </div>
      </div>
      </div>
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

const phoneForm = document.getElementById('phoneForm');
phoneForm.addEventListener('submit', (event) => {
  event.preventDefault();
  // Display the popup box here
  $('#addUserModal').modal('show');
});

const verifyFormSubmitButton = document.getElementById('verifyFormSubmit');


verifyFormSubmitButton.addEventListener('click', () => {
  verifyFormSubmitButton.classList.add('loading');
});

document.getElementById('verifyForm').addEventListener('submit', () => {
  setTimeout(() => {
    verifyFormSubmitButton.classList.remove('loading');
  }, 2000); // Simulate a delay in the server response
});

//--popup box

const otpInput = document.getElementById('otp-authcode-input');
const otpForm = document.getElementById('verifyForm');

        otpInput.addEventListener('input', () => {
          if (otpInput.value.length > 6) {
            otpInput.value = otpInput.value.slice(0, 6);
          }
        });

        otpForm.addEventListener('submit', (event) => {
            event.preventDefault();
            if (otpInput.validity.patternMismatch) {
                otpInput.setCustomValidity('Please enter a valid 6-digit OTP code.');
            } else {
                otpInput.setCustomValidity('');
            }
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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    

</body>
</html>


