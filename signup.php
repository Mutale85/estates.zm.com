<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - EstateTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .password-toggle {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">EstateTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Sign Up for EstateTrack</h2>
                        <form id="signupForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" id="password" required minlength="8">
                                    <button class="btn btn-outline-secondary password-toggle" type="button" onclick="togglePassword('password')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" id="confirmPassword" required minlength="8">
                                    <button class="btn btn-outline-secondary password-toggle" type="button" onclick="togglePassword('confirmPassword')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </form>
                        <p class="mt-3 text-center">Already have an account? <a href="login.html">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 EstateTrack. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }

        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Check if passwords match
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            if (password.length < 8) {
                alert('Password must be at least 8 characters long!');
                return;
            }

            const formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);

            fetch('include/createAccount.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Sign up successful!');
                    window.location.href = './';
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        });

        // Add real-time password matching check
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchMessage = document.getElementById('passwordMatchMessage');

            if (!matchMessage) {
                const div = document.createElement('div');
                div.id = 'passwordMatchMessage';
                this.parentNode.appendChild(div);
            }

            if (password === confirmPassword) {
                matchMessage.textContent = 'Passwords match!';
                matchMessage.style.color = 'green';
            } else {
                matchMessage.textContent = 'Passwords do not match';
                matchMessage.style.color = 'red';
            }
        });
    </script>
</body>
</html>