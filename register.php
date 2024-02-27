
<?php
require_once 'vendor/autoload.php'; // Include the Twilio SDK

//56ETVBGMTEKKDB2D3N159SKN

// Initialize database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "location_tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize Twilio client
$sid = 'AC428a6938f7dd9d66b780f973f61ec375';
//SK3ce04dd6b41dda663bcf499d4defc486
$token = '990c06ce6572b1a5e49ff2ce5a145e8e';
//vkuy3PIaGgY0gh1lcAQlFmJxCO3lwOAa
$twilio_phone_number = '+18882921711';
$client = new Twilio\Rest\Client($sid, $token);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the phone number and OTP
    $phoneNumber = $_POST["phoneNumber"];
    $otp = $_POST["otp"];

    // Validate the phone number and OTP
    if (preg_match("/^07[0-9]{8}$/", $phoneNumber) && verifyOTP($phoneNumber, $otp)) {
        // Save the phone number in the users table (assuming the users table has a primary key called 'phone_number')
        $stmt = $conn->prepare("INSERT INTO users (phone_number) VALUES (?)");
        $stmt->bind_param("s", $phoneNumber);

        if ($stmt->execute()) {
            echo "Phone number saved successfully.";
        }
    } else {
        echo "Invalid phone number or OTP.";
    }
}

// Function to verify the OTP
function verifyOTP($phoneNumber, $entered_otp)
{
    global $conn;

    // Fetch the OTP for the phone number from the otp_verification table
    $stmt = $conn->prepare("SELECT otp FROM otp_verification WHERE phone_number = ? ORDER BY id DESC LIMIT 1");
    $stmt->bind_param("s", $phoneNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $db_otp = $row['otp'];

    // Check if the OTP matches
    if ($entered_otp == $db_otp) {
        return true;
    } else {
        return false;
    }
}

// Generate and send the OTP if the phone number is not submitted yet
$phoneNumber = isset($_GET['phoneNumber']) ? $_GET['phoneNumber'] : '';
if (empty($phoneNumber)) {
?>
    <form method="post">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" name="phoneNumber" id="phoneNumber" pattern="[0-9]{10}" required />
        <label for="otp">OTP</label>
        <input type="text" name="otp" id="otp" value="" /> <!-- Add OTP input here -->
        <input type="submit" value="Send OTP" />
</form>
<?php
} else {
    // Generate a random OTP
    $otp = rand(100000, 999999);

    // Save the phone number and OTP in the database
    $stmt = $conn->prepare("INSERT INTO otp_verification (phone_number, otp) VALUES (?, ?)");
    $stmt->bind_param("si", $phoneNumber, $otp);

    if ($stmt->execute()) {
        // Send the OTP as an SMS using Twilio
        try {
            $message = "Your OTP is " . $otp;
            $client->messages->create(
                $phoneNumber,
                array(
                    'from' => $twilio_phone_number,
                    'body' => $message
                )
            );

            // Display the OTP verification form
            ?>
            <form method="post">
                <label for="otp">Enter OTP</label>
                <input type="text" name="otp" id="otp" required />
                <input type="hidden" name="phoneNumber" value="<?php echo $phoneNumber; ?>" />
                <input type="submit" value="Verify OTP" />
          </form>
            <?php
        } catch (Exception $e) {
            echo "Error sending OTP: " . $e->getMessage();
        }
    } else {
        echo "Error saving OTP.";
    }
}
?>
         