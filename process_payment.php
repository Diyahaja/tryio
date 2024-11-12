<?php
// Connection parameters
$host = "localhost";
$db_name = "db_sewatv";
$username = "root";
$password = "";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $telepon = $_POST["telepon"];

        // Check if the file was uploaded without errors
        if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
            $foto = $_FILES["foto"]["name"];

            // Move the uploaded file to a specified destination
            move_uploaded_file($_FILES["foto"]["tmp_name"], "upload/" . $foto);

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO pembayaran (nama, telepon, foto) VALUES (:nama, :telepon, :foto)");
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':telepon', $telepon);
            $stmt->bindParam(':foto', $foto);

            // Execute the statement
            $stmt->execute();

            // Customize the WhatsApp message with an image link
            $imageLink = "http://sewatv/upload/$foto"; // Replace yourdomain.com with your actual domain
            $whatsappMessage = "Pesanan%0A%0A";
            $whatsappMessage .= "Nama: $nama%0A";
            $whatsappMessage .= "Telepon: $telepon%0A";
            $whatsappMessage .= "Foto: $imageLink"; // Provide a link to the image

            // Redirect to WhatsApp
            $whatsappLink = "https://api.whatsapp.com/send?phone=+6285601220162&text=$whatsappMessage";
            header("Location: $whatsappLink");
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "Error uploading file. Please try again.";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close the connection in the finally block to ensure it happens regardless of success or failure
    if (isset($conn)) {
        $conn = null;
    }
}
?>
