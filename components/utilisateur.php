<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const fields = [
            { id: 'floating_email', errorId: 'emailError', message: 'L\'adresse email est requise.', type: 'email' },
            { id: 'floating_password', errorId: 'passwordError', message: 'Le mot de passe est requis.' },
            { id: 'floating_repeat_password', errorId: 'confirmPasswordError', message: 'Les mots de passe ne correspondent pas.' },
            { id: 'floating_first_name', errorId: 'firstNameError', message: 'Le prénom est requis.' },
            { id: 'floating_last_name', errorId: 'lastNameError', message: 'Le nom de famille est requis.' },
            { id: 'floating_phone', errorId: 'phoneError', message: 'Le format du numéro de téléphone est incorrect.' }
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            input.addEventListener('blur', function () {
                validateField(input, field);
            });

            input.addEventListener('keydown', function (e) {
                if (e.key === 'Tab') {
                    if (!validateField(input, field)) {
                        e.preventDefault();
                        input.focus();
                    }
                }
            });
        });

        form.addEventListener('submit', function (event) {
            let isValid = true;

            // Reset aria-invalid attributes and error messages
            document.querySelectorAll('[aria-invalid="true"]').forEach((input) => {
                input.setAttribute('aria-invalid', 'false');
            });
            document.querySelectorAll('.error-message').forEach((msg) => {
                msg.textContent = '';
            });

            // Validate fields
            fields.forEach(field => {
                const input = document.getElementById(field.id);
                if (!validateField(input, field)) {
                    isValid = false;
                }
            });

            // Validate Confirm Password
            const password = document.getElementById('floating_password');
            const confirmPassword = document.getElementById('floating_repeat_password');
            if (password.value && password.value !== confirmPassword.value) {
                confirmPassword.setAttribute('aria-invalid', 'true');
                document.getElementById('confirmPasswordError').textContent = 'Les mots de passe ne correspondent pas.';
                isValid = false;
            }

            // Validate Phone
            const phone = document.getElementById('floating_phone');
            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phone.value)) {
                phone.setAttribute('aria-invalid', 'true');
                document.getElementById('phoneError').textContent = 'Le format du numéro de téléphone est incorrect.';
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
            }
        });

        function validateField(input, field) {
            if (!input.value) {
                input.setAttribute('aria-invalid', 'true');
                document.getElementById(field.errorId).textContent = field.message;
                return false;
            } else {
                if (field.type === 'email') {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(input.value)) {
                        input.setAttribute('aria-invalid', 'true');
                        document.getElementById(field.errorId).textContent = 'Veuillez entrer une adresse email valide.';
                        return false;
                    }
                }
                input.setAttribute('aria-invalid', 'false');
                document.getElementById(field.errorId).textContent = '';
                return true;
            }
        }
    });
</script>
<title>Page utilisateur - Voyages en France</title>

<?php
$breadcrumbs = [
    ['text' => 'Accueil', 'link' => '?page=home'],
    ['text' => 'Page utilisateur']
];

include 'components/ariane.php';
?>

<h1 class="text-2xl text-center font-bold mt-5 mb-3">Formulaire d'inscription</h1>
<p class="text-center text-gray-500 mb-5">Veuillez remplir le formulaire ci-dessous pour vous inscrire.</p>

<form class="max-w-lg mx-auto p-5 bg-white rounded-lg shadow-lg" aria-label="Formulaire d'inscription" novalidate>
    <!-- Champ Prénom -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input type="text" name="floating_first_name" id="floating_first_name" aria-required="true"
            aria-invalid="false" aria-describedby="firstNameError"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Votre prénom" required />
        <small id="firstNameError" aria-live="assertive" class="error-message text-xs text-red-600 mt-1"></small>
    </div>

    <!-- Champ Nom de famille -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_last_name" class="block text-sm font-medium text-gray-700">Nom de famille</label>
        <input type="text" name="floating_last_name" id="floating_last_name" aria-required="true"
            aria-invalid="false" aria-describedby="lastNameError"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Votre nom" required />
        <small id="lastNameError" aria-live="assertive" class="error-message text-xs text-red-600 mt-1"></small>
    </div>
    
    <!-- Champ Email -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
        <input type="email" name="floating_email" id="floating_email" aria-required="true" aria-invalid="false"
            pattern=".+@example\.com"
            aria-describedby="emailError"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Votre email" required />
        <small id="emailError" aria-live="assertive" class="error-message text-xs text-red-600 mt-1"></small>
    </div>

    <!-- Champ Mot de passe -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input type="password" name="floating_password" id="floating_password" aria-required="true"
            aria-invalid="false"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Votre mot de passe" required />
        <small id="passwordError" aria-live="assertive" class="error-message text-xs text-red-600 mt-1"></small>
    </div>

    <!-- Champ Confirmer mot de passe -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_repeat_password" class="block text-sm font-medium text-gray-700">Confirmer le mot de
            passe</label>
        <input type="password" name="repeat_password" id="floating_repeat_password" aria-required="true"
            aria-invalid="false"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Confirmez votre mot de passe" required />
        <small id="confirmPasswordError" aria-live="assertive"
            class="error-message text-xs text-red-600 mt-1"></small>
    </div>

    

    <!-- Champ Numéro de téléphone -->
    <div class="relative z-0 w-full mb-6 group">
        <label for="floating_phone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
        <input type="tel" pattern="[0-9]{10}" name="floating_phone" id="floating_phone" aria-required="true"
            aria-invalid="false" aria-describedby="phoneError"
            class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Votre numéro de téléphone" required />
        <small id="phoneError" aria-live="assertive" class="error-message text-xs text-red-600 mt-1"></small>
    </div>

    <button type="submit" aria-label="Soumettre le formulaire d'inscription"
        class="w-full px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto sm:px-8 sm:py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Envoyer le formulaire d'inscription
    </button>
</form>