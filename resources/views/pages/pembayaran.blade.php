<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sewa Kos | GreenKost</title>
    <style>
        :root {
            --primary: #2E7D32;
            --secondary: #388E3C;
            --accent: #8BC34A;
            --light: #F1F8E9;
            --dark: #1B5E20;
            --text: #333333;
            --white: #FFFFFF;
            --shadow: rgba(46, 125, 50, 0.1);
            --gradient: linear-gradient(135deg, #2E7D32 0%, #388E3C 100%);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #F1F8E9 0%, #E8F5E8 100%);
            color: var(--text);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: calc(200px + 100%) 0; }
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            animation: slideInUp 0.6s ease-out;
        }

        .header h1 {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 32px;
            margin: 0 0 10px 0;
            font-weight: 700;
            animation: pulse 2s infinite;
        }

        .header p {
            color: var(--secondary);
            font-size: 18px;
            margin: 0;
            opacity: 0.8;
        }

        .payment-card {
            background: var(--white);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 8px 32px var(--shadow);
            border: 1px solid rgba(46, 125, 50, 0.1);
            animation: slideInUp 0.6s ease-out;
            animation-fill-mode: both;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .payment-card:nth-child(2) { animation-delay: 0.1s; }
        .payment-card:nth-child(3) { animation-delay: 0.2s; }
        .payment-card:nth-child(4) { animation-delay: 0.3s; }

        .payment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -200px;
            width: 200px;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: shimmer 3s infinite;
        }

        .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px var(--shadow);
        }

        .payment-title {
            color: var(--dark);
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: 600;
            position: relative;
            padding-bottom: 12px;
        }

        .payment-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--gradient);
            border-radius: 2px;
            animation: slideInUp 0.8s ease-out;
        }

        .summary {
            background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 2px solid rgba(46, 125, 50, 0.1);
            transition: all 0.3s ease;
        }

        .summary:hover {
            border-color: var(--accent);
            transform: scale(1.01);
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .summary-item:hover {
            background-color: rgba(46, 125, 50, 0.05);
            border-radius: 6px;
            padding: 8px 12px;
        }

        .summary-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .total {
            font-weight: bold;
            font-size: 20px;
            color: var(--primary);
            padding: 15px 0;
            border-top: 2px solid var(--accent);
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.05) 0%, rgba(139, 195, 74, 0.05) 100%);
            border-radius: 8px;
            margin: 10px -10px 0 -10px;
            padding: 15px 20px;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .payment-method {
            border: 2px solid #e0e0e0;
            padding: 20px 15px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: var(--white);
            position: relative;
            overflow: hidden;
        }

        .payment-method::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(46, 125, 50, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .payment-method:hover::before {
            left: 100%;
        }

        .payment-method:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(46, 125, 50, 0.15);
        }

        .payment-method.active {
            border: 2px solid var(--primary);
            background: linear-gradient(135deg, var(--light) 0%, rgba(139, 195, 74, 0.1) 100%);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(46, 125, 50, 0.2);
        }

        .payment-method svg {
            height: 35px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .payment-method:hover svg {
            transform: scale(1.1);
        }

        .payment-method p {
            margin: 0;
            font-weight: 600;
            color: var(--dark);
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
            animation: slideInUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .form-group:nth-child(2) { animation-delay: 0.1s; }
        .form-group:nth-child(3) { animation-delay: 0.2s; }
        .form-group:nth-child(4) { animation-delay: 0.3s; }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
            font-size: 16px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
            transform: translateY(-2px);
        }

        .form-group input:hover, .form-group select:hover {
            border-color: var(--accent);
        }

        .btn {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 18px 30px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
            animation: slideInUp 0.6s ease-out 0.4s;
            animation-fill-mode: both;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(46, 125, 50, 0.4);
        }

        .btn:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }
            
            .payment-card {
                padding: 20px;
                margin-bottom: 20px;
            }
            
            .header h1 {
                font-size: 28px;
            }
            
            .payment-methods {
                grid-template-columns: 1fr;
            }
            
            .payment-method {
                padding: 15px;
            }
        }

        /* Loading animation for interactive elements */
        .loading {
            position: relative;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin: -10px 0 0 -10px;
            border: 2px solid transparent;
            border-top: 2px solid var(--white);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Pembayaran Sewa Kos</h1>
            <p>Selesaikan pembayaran untuk mengamankan tempat kos Anda</p>
        </div>

        <div class="payment-card">
            <div class="payment-title">Ringkasan Pesanan</div>
            <div class="summary">
                <div class="summary-item">
                    <span>Nama Kos:</span>
                    <span><strong>Green Valley Residence</strong></span>
                </div>
                <div class="summary-item">
                    <span>Tipe Kamar:</span>
                    <span><strong>Standard (AC)</strong></span>
                </div>
                <div class="summary-item">
                    <span>Harga Sewa:</span>
                    <span><strong>Rp 2.500.000</strong></span>
                </div>
                <div class="summary-item total">
                    <span>Total Pembayaran:</span>
                    <span>Rp 2.500.000</span>
                </div>
            </div>
        </div>

        <div class="payment-card">
            <div class="payment-title">Metode Pembayaran</div>
            <div class="payment-methods">
                <div class="payment-method active" onclick="selectPayment(this)">
                    <svg width="50" height="35" viewBox="0 0 50 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="8" width="46" height="28" rx="4" fill="#2E7D32" stroke="#1B5E20" stroke-width="1"/>
                        <rect x="6" y="12" width="38" height="3" rx="1" fill="white"/>
                        <rect x="6" y="18" width="15" height="2" rx="1" fill="white"/>
                        <rect x="6" y="22" width="12" height="2" rx="1" fill="white"/>
                        <rect x="30" y="18" width="8" height="6" rx="2" fill="white"/>
                        <circle cx="8" cy="4" r="3" fill="#8BC34A"/>
                        <circle cx="16" cy="4" r="3" fill="#8BC34A"/>
                        <circle cx="24" cy="4" r="3" fill="#8BC34A"/>
                        <path d="M6 4L12 8L18 4" stroke="#388E3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>Transfer Bank</p>
                </div>
                <div class="payment-method" onclick="selectPayment(this)">
                    <svg width="50" height="35" viewBox="0 0 50 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="5" y="5" width="40" height="25" rx="8" fill="#388E3C"/>
                        <circle cx="15" cy="17.5" r="6" fill="white" opacity="0.9"/>
                        <circle cx="35" cy="17.5" r="6" fill="white" opacity="0.9"/>
                        <path d="M20 17.5C20 19.5 21.5 21 23.5 21H26.5C28.5 21 30 19.5 30 17.5C30 15.5 28.5 14 26.5 14H23.5C21.5 14 20 15.5 20 17.5Z" fill="white"/>
                        <circle cx="25" cy="17.5" r="2" fill="#388E3C"/>
                        <path d="M12 12L18 18M18 12L12 18" stroke="#388E3C" stroke-width="2" stroke-linecap="round"/>
                        <path d="M32 12L38 18M38 12L32 18" stroke="#388E3C" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <p>E-Wallet</p>
                </div>
                <div class="payment-method" onclick="selectPayment(this)">
                    <svg width="50" height="35" viewBox="0 0 50 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="6" width="44" height="23" rx="3" fill="#8BC34A" stroke="#2E7D32" stroke-width="1"/>
                        <rect x="7" y="10" width="36" height="2" rx="1" fill="white"/>
                        <rect x="7" y="14" width="20" height="1.5" rx="0.75" fill="white" opacity="0.8"/>
                        <rect x="7" y="17" width="15" height="1.5" rx="0.75" fill="white" opacity="0.8"/>
                        <rect x="7" y="20" width="25" height="1.5" rx="0.75" fill="white" opacity="0.8"/>
                        <rect x="35" y="14" width="8" height="6" rx="1" fill="white"/>
                        <rect x="37" y="16" width="4" height="1" rx="0.5" fill="#8BC34A"/>
                        <rect x="37" y="18" width="4" height="1" rx="0.5" fill="#8BC34A"/>
                        <circle cx="12" cy="2" r="1.5" fill="#2E7D32"/>
                        <circle cx="18" cy="2" r="1.5" fill="#2E7D32"/>
                        <circle cx="24" cy="2" r="1.5" fill="#2E7D32"/>
                        <circle cx="30" cy="2" r="1.5" fill="#2E7D32"/>
                        <circle cx="36" cy="2" r="1.5" fill="#2E7D32"/>
                        <path d="M8 32L12 28L16 32" stroke="#2E7D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 32L24 28L28 32" stroke="#2E7D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 32L36 28L40 32" stroke="#2E7D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>Virtual Account</p>
                </div>
            </div>

            <div class="form-group">
                <label for="bank">Pilih Bank</label>
                <select id="bank">
                    <option value="">-- Pilih Bank --</option>
                    <option value="bca">BCA</option>
                    <option value="mandiri">Mandiri</option>
                    <option value="bni">BNI</option>
                    <option value="bri">BRI</option>
                </select>
            </div>
        </div>

        <div class="payment-card">
            <div class="payment-title">Data Pemesan</div>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" placeholder="Masukkan nomor telepon" required>
            </div>
        </div>

        {{-- tambahkan upload bukti pembayaran --}}
        <div class="payment-card">
            <div class="payment-title">Upload Bukti Pembayaran</div>
            <div class="form-group">
                <label for="payment-proof">Pilih File</label>
                <input type="file" id="payment-proof" accept="image/*" required>
            </div>
        </div> 

        <button class="btn" onclick="processPayment()">Bayar Sekarang</button>
    </div>

    <script>
        function selectPayment(element) {
            // Remove active class from all payment methods
            document.querySelectorAll('.payment-method').forEach(method => {
                method.classList.remove('active');
            });
            
            // Add active class to selected method
            element.classList.add('active');
            
            // Add a small bounce animation
            element.style.animation = 'none';
            element.offsetHeight; // Trigger reflow
            element.style.animation = 'pulse 0.6s ease-out';
        }

        function processPayment() {
            const btn = document.querySelector('.btn');
            const originalText = btn.textContent;
            
            // Add loading state
            btn.classList.add('loading');
            btn.textContent = 'Memproses...';
            btn.disabled = true;
            
            // Simulate payment processing
            setTimeout(() => {
                btn.classList.remove('loading');
                btn.textContent = '✓ Pembayaran Berhasil!';
                btn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #66BB6A 100%)';
                
                // Reset after 3 seconds
                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.disabled = false;
                    btn.style.background = 'var(--gradient)';
                }, 3000);
            }, 2000);
        }

        // Add floating animation to cards on scroll
        window.addEventListener('scroll', () => {
            const cards = document.querySelectorAll('.payment-card');
            cards.forEach((card, index) => {
                const rect = card.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
                
                if (isVisible) {
                    card.style.transform = `translateY(${window.scrollY * 0.05 * (index + 1)}px)`;
                }
            });
        });

        // Add form validation with smooth animations
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value) {
                    this.style.borderColor = '#4CAF50';
                    this.style.background = 'rgba(76, 175, 80, 0.05)';
                } else {
                    this.style.borderColor = '#e0e0e0';
                    this.style.background = 'var(--white)';
                }
            });
        });
    </script>
</body>
</html>