<?php
// Initializing variables
$firstname = "";
$lastname = "";
$password = "";
$email = "";
$phone = "";
$description = "";
$errors = [];
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Récupération des données du formulaire
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $description = $_POST["description"];

    // Validate firstname
    if($firstname === '') {
        $errors[] = "Firstname can't be empty";
    }

    // Validate lastname
    if($lastname === '') {
        $errors[] = "Lastname can't be empty";
    }

    // Validate password
    if($password === '') {
        $errors[] = "Lastname can't be empty";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Veuillez saisir une adresse e-mail valide.";
    }

    // Validate phone number
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Le numéro de téléphone doit contenir 10 chiffres.";
    }

    // Validate lastname
    if($description === '') {
        $errors[] = "Description can't be empty";
    }

    // if no errors
    if (empty($errors)) {
        $servername = "localhost";
        $username = "root";
        $password = "dabok1977";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";
        }

        // Insert data into database
        /*$sql = "INSERT INTO `security_workshop`.`as-users` (`firstname`, `lastname`, `password`, `email`, `phone`, `description`) VALUES ('$firstname', '$lastname', '$password', '$email', '$phone', '$description')";*/

        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css">
    <title>User Registration Form</title>
</head>
<body>
<div class="container">
    <?php if (! empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form
            method="post"
            id="form"
            class="form"
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    >
        <h2>User Registration Form</h2>
        <!-- Firstname -->
        <div class="form-control">
            <label for="firstname">Firstname (3-20 characters):</label>
            <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    placeholder="Enter your firstname"
                    value="<?php echo $firstname;?>"
            >
            <small>Error message</small>
        </div>
        <!-- Lastname -->
        <div class="form-control">
            <label for="lastname">Lastname (3-20 characters):</label>
            <input
                    type="text"
                    id="lastname"
                    name="lastname"
                    placeholder="Enter your lastname"
                    value="<?php echo $lastname;?>"
            >
            <small>Error message</small>
        </div>

        <!-- Password -->
        <div class="form-control">
            <label for="password">Password (au moins 8 caractères, 1 majuscule, 1 caractère spécial):</label>
            <input
                    type="password"
                    id="password"
                    name="password"
            >
            <small>Error message</small>
        </div>

        <!-- Email -->
        <div class="form-control">
            <label for="email">Email:</label>
            <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="<?php echo $email;?>"
            >
            <small>Error message</small>
        </div>

        <!-- Phone Number -->
        <div class="form-control">
            <label for="phone">Phone Number:</label>
            <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="Enter your phone number"
                    value="<?php echo $phone;?>"
            >
            <small>Error message</small>
        </div>

        <!-- Description -->
        <div class="form-control">
            <label for="description">Description:</label>
            <textarea
                    id="description"
                    name="description"
                    rows="4"
                    cols="50"
                    placeholder="Enter your description"
            ><?php echo $description;?></textarea>
        </div>
        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>
</div>
<script src="as-validation.js"></script>
</body>
</html>
