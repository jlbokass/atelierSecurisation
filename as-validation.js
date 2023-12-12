function validateForm() {
      // Validation du prénom (entre 3 et 20 caractères)
      let firstname = document.getElementById("firstname").value;
      let firstnameError = document.getElementById("firstnameError");
      if (firstname.trim() === "" || firstname.length < 3 || firstname.length > 20) {
        firstnameError.innerHTML = "Le prénom doit contenir entre 3 et 20 caractères.";
        return false;
      } else {
        firstnameError.innerHTML = "";
      }

    // Validation du nom (non vide)
    let lastname = document.getElementById("lastname").value;
    let lastnameError = document.getElementById("lastnameError");
    if (lastname.trim() === "" || lastname.length < 3 || lastname.length > 20) {
        lastnameError.innerHTML = "Le nom ne peut pas être vide.";
        return false;
    } else {
        lastnameError.innerHTML = "";
    }

      // Validation du mot de passe (au moins 8 caractères, 1 majuscule, 1 caractère spécial)
      let password = document.getElementById("password").value;
      let passwordError = document.getElementById("passwordError");
      let passwordPattern = /^(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).{8,}$/;
      if (!passwordPattern.test(password)) {
        passwordError.innerHTML = "Le mot de passe doit contenir au moins 8 caractères, 1 majuscule et 1 caractère spécial.";
        return false;
      } else {
        passwordError.innerHTML = "";
      }

    // Validation de l'email
    let email = document.getElementById("email").value;
    let emailError = document.getElementById("emailError");
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        emailError.innerHTML = "Veuillez saisir une adresse e-mail valide.";
        return false;
    } else {
        emailError.innerHTML = "";
    }

    // Validation du numéro de téléphone (10 chiffres)
    let phone = document.getElementById("phone").value;
    let phoneError = document.getElementById("phoneError");
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        phoneError.innerHTML = "Le numéro de téléphone doit contenir 10 chiffres.";
        return false;
    } else {
        phoneError.innerHTML = "";
    }

    // Validation de la date de naissance
    let birthday = document.getElementById("birthday").value;
    let birthdayError = document.getElementById("birthdayError");
    if (!birthday) {
        birthdayError.innerHTML = "Veuillez saisir une date de naissance.";
        return false;
    } else {
        birthdayError.innerHTML = "";
    }

    // Validation de la description (optionnelle)
    let description = document.getElementById("description").value;
    let descriptionError = document.getElementById("descriptionError");

      return true; // Le formulaire est soumis si toutes les validations sont réussies
    }