<?php
/*
Template Name: Contact Page
*/
get_header(); // Include header.php

// Dummy contact information
$phone = "+38344123456";
$email = "leartademi7@gmail.com";
$location = "Prishtine, Kosovo";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost"; // Replace with your database server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "my_contact_database"; // Replace with your database name
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Set parameters and execute the statement
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $message = $_POST['your-message'];
    $stmt->execute();

    // Check if the data is inserted successfully
    if ($stmt->affected_rows > 0) {
        $status = "success";
        $message_text = "Your message has been sent successfully!";
    } else {
        $status = "error";
        $message_text = "Failed to send message. Please try again later.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!-- Contact Content Goes Here -->
<div id="contact" class="section">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-between">
            <!-- Contact Information -->
            <div class="w-full md:w-1/2 md:pr-8 mb-8 md:mb-0">
                <h2 class="font-mono text-2xl font-bold mb-4">Let's Talk:</h2>
                <div class="flex items-center mb-4">
                    <i class="fas fa-phone-alt text-blue-500 mr-2"></i>
                    <p class="text-gray-700">Phone: <?php echo $phone; ?></p>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-envelope text-blue-500 mr-2"></i>
                    <p class="text-gray-700">Email: <?php echo $email; ?></p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                    <p class="text-gray-700">Location: <?php echo $location; ?></p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="w-full md:w-1/2">
                <h2 class="font-mono text-2xl font-bold mb-4">Get in Touch:</h2>
                <form method="post" class="space-y-4">
                    <div>
                        <label class="block mb-1">Your Name (required)</label>
                        <input type="text" name="your-name" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block mb-1">Your Email (required)</label>
                        <input type="email" name="your-email" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block mb-1">Your Message</label>
                        <textarea name="your-message" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-150 ease-in-out ">Send</button>
                </form>
                <?php if (isset($status)): ?>
                    <div id="status-message" class="<?php echo $status === 'success' ? 'bg-green-500' : 'bg-red-500'; ?> text-white px-4 py-2 mt-4 rounded-lg shadow-lg">
                        <?php echo $message_text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); // Include footer.php ?>
