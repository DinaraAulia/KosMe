<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kos Me, Choose Me!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00B98E;
            --primary-dark: #008C6D;
            --primary-light: #E6F7F2;
            --secondary-color: #6C7BFF;
            --text-color: #333333;
            --light-gray: #F8F9FA;
            --border-radius: 10px;
        }
        
        body {
            background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .register-container {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }
        
        .register-form-container {
            width: 100%;
            padding: 1.75rem;
        }
        
        .register-image-content {
            position: relative;
            z-index: 2;
        }
        
        .register-header {
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .register-header h2 {
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.25rem;
            font-size: 1.5rem;
        }
        
        .register-header p {
            color: #6c757d;
            font-size: 0.85rem;
        }
        
        .logo {
            width: 60px;
            height: auto;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        .form-floating {
            margin-bottom: 1rem;
        }
        
        .form-floating label {
            color: #6c757d;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 0.75rem 0.5rem;
            border: 1px solid #ced4da;
            height: 48px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        textarea.form-control {
            height: 80px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 185, 142, 0.25);
        }
        
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
            border: none;
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, var(--primary-dark), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 185, 142, 0.3);
        }
        
        .btn-google {
            background-color: #fff;
            color: #555;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            font-size: 0.9rem;
        }
        
        .btn-google:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 0.75rem 0;
            color: #adb5bd;
            font-size: 0.8rem;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .divider::before {
            margin-right: 0.75rem;
        }
        
        .divider::after {
            margin-left: 0.75rem;
        }
        
        .login-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 0.85rem;
        }
        
        .login-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .form-check-label {
            font-size: 0.8rem;
        }
        
        .password-toggle {
            cursor: pointer;
            color: #adb5bd;
            transition: color 0.3s ease;
        }
        
        .password-toggle:hover {
            color: var(--primary-color);
        }
        
        .progress {
            height: 6px;
            margin-top: 8px;
            border-radius: 3px;
        }
        
        .progress-bar {
            transition: width 0.3s ease;
        }
        
        .password-strength-text {
            font-size: 0.75rem;
            margin-top: 5px;
        }
        
        .steps-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 12px;
        }
        
        .step-circle {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 0.8rem;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        .step.active .step-circle {
            background-color: var(--primary-color);
            color: white;
        }
        
        .step.completed .step-circle {
            background-color: var(--primary-color);
            color: white;
        }
        
        .step-label {
            margin-top: 6px;
            font-size: 0.7rem;
            color: #6c757d;
            text-align: center;
        }
        
        .step.active .step-label {
            color: var(--primary-color);
            font-weight: 500;
        }
        
        .step-connector {
            flex: 1;
            height: 2px;
            background-color: #e9ecef;
            position: relative;
            top: 12px;
            z-index: 1;
        }
        
        .step-connector.active {
            background-color: var(--primary-color);
        }
        
        .register-form {
            display: none;
        }
        
        .register-form.active {
            display: block;
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .terms-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.8rem;
        }
        
        .terms-link:hover {
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-control, .btn, .register-header, .divider {
            animation: fadeInUp 0.5s ease-out forwards;
        }
        
        .register-header {
            animation-delay: 0.1s;
        }
        
        .confirmation-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .confirmation-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        
        .confirmation-text {
            font-size: 0.85rem;
        }
        
        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
                max-width: 380px;
            }
            
            .register-form-container {
                padding: 1.5rem 1.25rem;
            }
            
            .steps-indicator {
                margin-bottom: 0.75rem;
            }
            
            .step {
                margin: 0 8px;
            }
            
            .step-label {
                font-size: 0.65rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-container">
            <div class="register-form-container">
                <div class="register-header">
                    <img src="/home/img/logo_kosme.png" alt="KosKita Logo" class="logo rounded-circle">
                    <h2>Daftar Akun Baru</h2>
                    <p class="mb-0">Lengkapi data diri Anda untuk membuat akun</p>
                </div>
                
                <div class="steps-indicator">
                    <div class="step active" id="step-1-indicator">
                        <div class="step-circle">1</div>
                        <div class="step-label">Data Diri</div>
                    </div>
                    <div class="step-connector" id="connector-1"></div>
                    <div class="step" id="step-2-indicator">
                        <div class="step-circle">2</div>
                        <div class="step-label">Akun</div>
                    </div>
                    <div class="step-connector" id="connector-2"></div>
                    <div class="step" id="step-3-indicator">
                        <div class="step-circle">3</div>
                        <div class="step-label">Selesai</div>
                    </div>
                </div>
                
                <form id="registerForm">
                    <!-- Step 1: Personal Information -->
                    <div class="register-form active" id="step-1">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="fullName" placeholder="Nama Lengkap" required>
                            <label for="fullName"><i class="fas fa-user me-2"></i>Nama Lengkap</label>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon" required>
                                    <label for="phone"><i class="fas fa-phone me-2"></i>Nomor Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control" id="gender" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <option value="male">Laki-laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                    <label for="gender"><i class="fas fa-venus-mars me-2"></i>Jenis Kelamin</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-floating">
                            <textarea class="form-control" id="address" placeholder="Alamat"></textarea>
                            <label for="address"><i class="fas fa-map-marker-alt me-2"></i>Alamat</label>
                        </div>
                        
                        <div class="mt-3">
                            <button type="button" class="btn btn-primary w-100 py-2" id="nextToStep2">
                                Lanjutkan <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Step 2: Account Information -->
                    <div class="register-form" id="step-2">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                            <label for="email"><i class="fas fa-envelope me-2"></i>Email</label>
                        </div>
                        
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                            <div class="position-absolute end-0 top-50 translate-middle-y me-3">
                                <i class="password-toggle fas fa-eye-slash" id="togglePassword"></i>
                            </div>
                        </div>
                        
                        <div class="form-floating">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password" required>
                            <label for="confirmPassword"><i class="fas fa-lock me-2"></i>Konfirmasi Password</label>
                            <div class="position-absolute end-0 top-50 translate-middle-y me-3">
                                <i class="password-toggle fas fa-eye-slash" id="toggleConfirmPassword"></i>
                            </div>
                        </div>
                        
                        <div class="mt-3 d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary w-50 py-2" id="backToStep1">
                                <i class="fas fa-arrow-left me-2"></i> Kembali
                            </button>
                            <button type="button" class="btn btn-primary w-50 py-2" id="nextToStep3">
                                Lanjutkan <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Step 3: Confirmation -->
                    <div class="register-form" id="step-3">
                        <div class="text-center mb-3">
                            <div class="bg-light rounded-circle mx-auto mb-2 confirmation-icon">
                                <i class="fas fa-user-check fa-2x text-primary"></i>
                            </div>
                            <h4 class="confirmation-title">Satu Langkah Lagi!</h4>
                            <p class="text-muted confirmation-text">Silakan periksa kembali data Anda sebelum mendaftar</p>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="termsAccept" required>
                            <label class="form-check-label" for="termsAccept">
                                Saya setuju dengan <a href="#" class="terms-link">Syarat & Ketentuan</a> dan <a href="#" class="terms-link">Kebijakan Privasi</a>
                            </label>
                        </div>
                        
                        <div class="mt-3 d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary w-50 py-2" id="backToStep2">
                                <i class="fas fa-arrow-left me-2"></i> Kembali
                            </button>
                            <button type="submit" class="btn btn-primary w-50 py-2" id="registerSubmit">
                                Daftar Sekarang <i class="fas fa-check ms-2"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="divider">atau daftar dengan</div>
                    
                    <button type="button" class="btn btn-google w-100 py-2 mb-2">
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/6.0.0/google.svg" alt="Google" width="16" height="16">
                        Daftar dengan Google
                    </button>
                    
                    <p class="text-center mt-2">Sudah punya akun? <a href="/login" class="login-link">Login sekarang</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Multi-step form functionality
        document.addEventListener('DOMContentLoaded', function() {
            const step1 = document.getElementById('step-1');
            const step2 = document.getElementById('step-2');
            const step3 = document.getElementById('step-3');
            
            const step1Indicator = document.getElementById('step-1-indicator');
            const step2Indicator = document.getElementById('step-2-indicator');
            const step3Indicator = document.getElementById('step-3-indicator');
            
            const connector1 = document.getElementById('connector-1');
            const connector2 = document.getElementById('connector-2');
            
            const nextToStep2 = document.getElementById('nextToStep2');
            const backToStep1 = document.getElementById('backToStep1');
            const nextToStep3 = document.getElementById('nextToStep3');
            const backToStep2 = document.getElementById('backToStep2');
            
            // Navigation between steps
            nextToStep2.addEventListener('click', function() {
                step1.classList.remove('active');
                step2.classList.add('active');
                step2Indicator.classList.add('active');
                connector1.classList.add('active');
            });
            
            backToStep1.addEventListener('click', function() {
                step2.classList.remove('active');
                step1.classList.add('active');
                step2Indicator.classList.remove('active');
                connector1.classList.remove('active');
            });
            
            nextToStep3.addEventListener('click', function() {
                step2.classList.remove('active');
                step3.classList.add('active');
                step3Indicator.classList.add('active');
                connector2.classList.add('active');
            });
            
            backToStep2.addEventListener('click', function() {
                step3.classList.remove('active');
                step2.classList.add('active');
                step3Indicator.classList.remove('active');
                connector2.classList.remove('active');
            });
            
            // Form submission
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Pendaftaran berhasil! Silakan cek email Anda untuk verifikasi akun.');
                // Here would be your AJAX call to handle registration
            });
            
            // Password visibility toggle
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                const toggleIcon = this;
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                }
            });
            
            document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
                const passwordInput = document.getElementById('confirmPassword');
                const toggleIcon = this;
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                }
            });
            
            // Add subtle animation to logo
            const logo = document.querySelector('.logo');
            logo.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.1) rotate(5deg)';
            });
            
            logo.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>