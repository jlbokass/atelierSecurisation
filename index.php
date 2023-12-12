<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>User Registration Form</title>
</head>
<body>

<form method="post" onsubmit="return validateForm();">
    <h2>User Registration Form</h2>
    <!-- Firstname -->
    <div class="as-input">
        <label for="firstname">Firstname (3-20 characters):</label>
        <input
                type="text"
                id="firstname"
                name="firstname"
        >
        <div id="firstnameError" class="error"></div>
    </div>
    <!-- Lastname -->
    <div class="as-input">
        <label for="lastname">Lastname (3-20 characters):</label>
        <input
                type="text"
                id="lastname"
                name="lastname"
        >
        <div id="lastnameError" class="error"></div>
    </div>

    <!-- Password -->
    <div class="as-input">
        <label for="password">Password (au moins 8 caractères, 1 majuscule, <br>1 caractère spécial):</label>
        <input
                type="password"
                id="password"
                name="password"
        >
        <div id="passwordError" class="error"></div>
    </div>

    <!-- Email -->
    <div class="as-input">
        <label for="email">Email:</label>
        <input
                type="email"
                id="email"
                name="email"
        >
        <div id="emailError" class="error"></div>
    </div>

    <!-- Phone Number -->
    <div class="as-input">
        <label for="phone">Phone Number:</label>
        <input
                type="tel"
                id="phone"
                name="phone"
        >
        <div id="phoneError" class="error"></div>
    </div>

    <!-- Birthday -->
    <div class="as-input">
        <label for="birthday">Birthday:</label>
        <input
                type="date"
                id="birthday"
                name="birthday"
        >
        <div id="birthdayError" class="error"></div>
    </div>

    <!-- Description -->
    <div class="as-textarea">
        <label for="description">Description:</label>
        <textarea
                id="description"
                name="description"
                rows="4"
                cols="50"
        ></textarea>
    </div>
    <!-- Submit button -->
    <input type="submit" value="Submit">
</form>
<script src="as-validation.js"></script>
</body>
</html>
