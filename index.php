<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration Form</title>
</head>
<body>
<h2>User Registration Form</h2>
<form method="post">
    <!-- Firstname -->
    <div class="as-input">
        <label for="firstname">Firstname (3-20 characters):</label>
        <input
                type="text"
                id="firstname"
                name="firstname"
                required pattern=".{3,20}"
                title="Le prénom doit contenir entre 3 et 20 caractères"
        >
    </div>
    <!-- Lastname -->
    <div class="as-input">
        <label for="lastname">Lastname (3-20 characters):</label>
        <input
                type="text"
                id="lastname"
                name="lastname"
                required
                pattern=".{3,20}" title="Le nom doit contenir entre 3 et 20 caractères"
        >
    </div>

    <!-- Password -->
    <div class="as-input">
        <label for="password">Password (au moins 8 caractères, 1 majuscule, <br>1 caractère spécial):</label>
        <input
                type="password"
                id="password"
                name="password"
                required
                pattern="^(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).{8,}$"
                title="Le mot de passe doit contenir au moins 8 caractères, 1 majuscule et 1 caractère spécial"
        >
    </div>

    <!-- Email -->
    <div class="as-input">
        <label for="email">Email:</label>
        <input
                type="email"
                id="email"
                name="email"
                required
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                title="Veuillez saisir une adresse e-mail valide"
        >
    </div>

    <!-- Phone Number -->
    <div class="as-input">
        <label for="phone">Phone Number:</label>
        <input
                type="tel"
                id="phone"
                name="phone"
                pattern="[0-9]{10}"
                required
                title="Le numéro de téléphone doit contenir 10 chiffres"
        >
    </div>

    <!-- Birthday -->
    <div class="as-input">
        <label for="birthday">Birthday:</label>
        <input
                type="date"
                id="birthday"
                name="birthday"
                required
        >
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
</body>
</html>
