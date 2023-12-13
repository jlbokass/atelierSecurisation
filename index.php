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
    <form method="post" id="form" class="form">
        <h2>User Registration Form</h2>
        <!-- Firstname -->
        <div class="form-control">
            <label for="firstname">Firstname (3-20 characters):</label>
            <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    placeholder="Enter your firstname"
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
            ></textarea>
        </div>
        <!-- Submit button -->
        <button type="submit">Submit</button>
    </form>
</div>
<script src="as-validation.js"></script>
</body>
</html>
