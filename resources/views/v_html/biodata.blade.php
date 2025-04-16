<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Biography</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
        
        :root {
            --primary: #3a86ff;
            --primary-dark: #2563eb;
            --secondary: #8338ec;
            --accent: #ff006e;
            --background-light: #f0f4ff;
            --background-dark: #111827;
            --text-light: #f3f4f6;
            --text-dark: #1f2937;
            --gold: #ffd700;
            --gold-light: #ffea00;
            --success: #10b981;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--background-dark) 0%, #1a202c 100%);
            color: var(--text-light);
            line-height: 1.6;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("https://cdn.jsdelivr.net/gh/pattern-library/pattern-library@main/patterns/circuit-board.svg");
            background-size: 300px;
            opacity: 0.05;
            z-index: -1;
            pointer-events: none;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .icon-float {
            position: absolute;
            opacity: 0.15;
            z-index: -1;
            animation: float 8s ease-in-out infinite;
            color: var(--primary);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        /* Header Section */
        .header {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), 
                        url('https://w.wallhaven.cc/full/gj/wallhaven-gj5ld7.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: var(--gold-light);
            border-radius: 50%;
            animation: particle-animation 15s infinite linear;
            opacity: 0.5;
        }

        @keyframes particle-animation {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.5;
            }
            90% {
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }
        
        .header-content {
            text-align: center;
            padding: 20px;
            max-width: 800px;
            z-index: 2;
            animation: fadeIn 1.5s ease-out;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .header-content h1 {
            font-family: 'Cinzel', serif;
            font-size: 4.5rem;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 20px;
            letter-spacing: 4px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
            display: inline-block;
        }

        .header-content h1::before,
        .header-content h1::after {
            content: '✦';
            font-size: 2rem;
            color: var(--gold-light);
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .header-content h1::before {
            left: -40px;
        }

        .header-content h1::after {
            right: -40px;
        }
        
        .header-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: var(--gold-light);
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .scroll-btn {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--gold);
            font-size: 2rem;
            cursor: pointer;
            animation: bounce 2s infinite;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .scroll-btn span {
            font-size: 0.8rem;
            margin-top: 5px;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        /* About Section */
        .about {
            padding: 100px 0;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 15px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
        }

        .about-decoration {
            position: absolute;
            font-size: 15rem;
            color: rgba(255, 255, 255, 0.03);
            z-index: 0;
            pointer-events: none;
        }

        .decoration-tl {
            top: 0;
            left: 0;
            transform: translate(-30%, -30%);
        }

        .decoration-br {
            bottom: 0;
            right: 0;
            transform: translate(30%, 30%);
        }
        
        .about-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 50px;
            position: relative;
            z-index: 1;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border: 5px solid rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
            transform: rotate(-2deg);
            position: relative;
        }

        .about-image img:hover {
            transform: scale(1.02) rotate(0);
            border-color: var(--gold);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -15px;
            left: -15px;
            width: calc(100% + 30px);
            height: calc(100% + 30px);
            border: 2px dashed rgba(255, 215, 0, 0.3);
            border-radius: 16px;
            z-index: -1;
        }
        
        .about-content {
            flex: 2;
            min-width: 300px;
            position: relative;
        }
        
        .section-title {
            font-family: 'Cinzel', serif;
            font-size: 2.5rem;
            color: var(--gold);
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, var(--gold), transparent);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--primary);
            margin-bottom: 30px;
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .info-item {
            margin-bottom: 25px;
            padding-left: 20px;
            border-left: 3px solid var(--primary);
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            padding: 15px 20px;
            border-radius: 0 8px 8px 0;
            backdrop-filter: blur(5px);
        }

        .info-item:hover {
            border-left-color: var(--gold);
            transform: translateX(5px);
            background: rgba(255, 255, 255, 0.08);
        }
        
        .info-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold-light);
            margin-bottom: 8px;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .info-item h3 i {
            margin-right: 10px;
            color: var(--primary);
        }
        
        .info-item p {
            color: var(--text-light);
            font-size: 1.1rem;
        }
        
        /* Education Section */
        .education {
            padding: 100px 0;
            background: linear-gradient(135deg, #0f172a 0%, #020617 100%);
            position: relative;
            overflow: hidden;
        }

        .education::before,
        .education::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(rgba(58, 134, 255, 0.2), transparent 70%);
            z-index: 0;
        }

        .education::before {
            top: -150px;
            left: -150px;
        }

        .education::after {
            bottom: -150px;
            right: -150px;
            background: radial-gradient(rgba(255, 0, 110, 0.15), transparent 70%);
        }
        
        .education-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .education-items {
            margin-top: 40px;
            position: relative;
        }

        .education-items::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 30px;
            width: 3px;
            background: linear-gradient(to bottom, var(--primary) 0%, var(--accent) 100%);
            z-index: 0;
            opacity: 0.3;
            display: none;
        }
        
        .edu-item {
            background: rgba(34, 34, 34, 0.5);
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid var(--primary);
            transition: all 0.3s ease;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .edu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(58, 134, 255, 0.2);
            border-left-color: var(--gold);
        }

        .edu-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, transparent 100%);
            pointer-events: none;
            border-radius: 12px;
        }
        
        .edu-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold);
            margin-bottom: 15px;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .edu-item h3 i {
            margin-right: 10px;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .edu-item p {
            color: var(--text-light);
            margin-bottom: 10px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .edu-item p i {
            margin-right: 10px;
            color: var(--gold-light);
            font-size: 0.9rem;
            width: 20px;
            text-align: center;
        }
        
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .contact-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("https://cdn.jsdelivr.net/gh/pattern-library/pattern-library@main/patterns/topography.svg");
            background-size: 500px;
            opacity: 0.03;
            z-index: 0;
        }
        
        .contact-title {
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .contact-items {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 50px;
            position: relative;
            z-index: 1;
        }
        
        .contact-item {
            background: rgba(17, 24, 39, 0.8);
            padding: 30px;
            border-radius: 12px;
            min-width: 250px;
            transition: all 0.3s ease;
            border: 1px solid rgba(58, 134, 255, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }
        
        .contact-item:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
            box-shadow: 0 10px 30px rgba(58, 134, 255, 0.15);
        }

        .contact-item::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }

        .contact-item:hover::before {
            opacity: 1;
        }
        
        .contact-item i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .contact-item:hover i {
            color: var(--gold);
            transform: scale(1.1);
        }
        
        .contact-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold-light);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .contact-item h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .contact-item:hover h3::after {
            width: 50%;
        }
        
        .contact-item p {
            color: var(--text-light);
            font-weight: 300;
        }
        
        /* Footer */
        footer {
            background-color: #0f172a;
            padding: 30px 0;
            text-align: center;
            border-top: 1px solid #334155;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 2px, transparent 2px);
            background-size: 30px 30px;
            pointer-events: none;
            opacity: 0.3;
        }
        
        footer p {
            color: var(--text-light);
            font-size: 0.9rem;
            opacity: 0.7;
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        footer a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--gold);
        }

        .footer-icons {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .footer-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-icon:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-5px);
        }
        
        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .header-content h1 {
                font-size: 3rem;
            }
            
            .header-content p {
                font-size: 1.2rem;
            }
            
            .about-container {
                flex-direction: column;
            }
            
            .section-title {
                font-size: 2rem;
            }

            .header-content h1::before,
            .header-content h1::after {
                display: none;
            }
        }

        /* Custom animated background effect */
        .bg-animated-gradient {
            animation: gradientAnimation 15s ease infinite;
            background-size: 400% 400%;
            background-image: linear-gradient(
                -45deg, 
                rgba(58, 134, 255, 0.15) 0%, 
                rgba(131, 56, 236, 0.15) 25%, 
                rgba(255, 0, 110, 0.15) 51%, 
                rgba(58, 134, 255, 0.15) 100%
            );
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50% }
            50% { background-position: 100% 50% }
            100% { background-position: 0% 50% }
        }
    </style>
</head>
<body>
    <!-- Floating Icons Background -->
    <div class="icon-float" style="top: 15%; left: 10%; font-size: 5rem;"><i class="fas fa-laptop-code"></i></div>
    <div class="icon-float" style="top: 60%; left: 5%; font-size: 3rem; animation-delay: 2s;"><i class="fas fa-graduation-cap"></i></div>
    <div class="icon-float" style="top: 25%; right: 8%; font-size: 4rem; animation-delay: 1s;"><i class="fas fa-book"></i></div>
    <div class="icon-float" style="top: 70%; right: 10%; font-size: 3.5rem; animation-delay: 3s;"><i class="fas fa-lightbulb"></i></div>

    <!-- Header Section -->
    <header class="header">
        <div class="particles">
            <!-- Generated particles -->
            <div class="particle" style="top: 20%; left: 20%; animation-delay: 0s;"></div>
            <div class="particle" style="top: 80%; left: 35%; animation-delay: 2s;"></div>
            <div class="particle" style="top: 40%; left: 70%; animation-delay: 4s;"></div>
            <div class="particle" style="top: 60%; left: 80%; animation-delay: 1s;"></div>
            <div class="particle" style="top: 30%; left: 25%; animation-delay: 3s;"></div>
            <div class="particle" style="top: 70%; left: 75%; animation-delay: 5s;"></div>
            <div class="particle" style="top: 75%; left: 10%; animation-delay: 7s;"></div>
            <div class="particle" style="top: 15%; left: 85%; animation-delay: 6s;"></div>
            <div class="particle" style="top: 55%; left: 50%; animation-delay: 8s;"></div>
            <div class="particle" style="top: 35%; left: 15%; animation-delay: 9s;"></div>
            <div class="particle" style="top: 85%; left: 65%; animation-delay: 10s;"></div>
            <div class="particle" style="top: 45%; left: 40%; animation-delay: 11s;"></div>
            <div class="particle" style="top: 25%; left: 60%; animation-delay: 12s;"></div>
            <div class="particle" style="top: 50%; left: 30%; animation-delay: 13s;"></div>
            <div class="particle" style="top: 10%; left: 45%; animation-delay: 14s;"></div>
        </div>
        <div class="header-content animate__animated animate__fadeIn">
            <h1>BIOGRAPHY OF STUDENT</h1>
            <p><i class="fas fa-university mr-2"></i> University Bina Sarana Informatika </p>
        </div>
        <div class="scroll-btn">
            <i class="fas fa-chevron-down"></i>
            <span>Explore</span>
        </div>
    </header>
    
    <!-- About Section -->
    <section class="about bg-animated-gradient" id="about">
        <div class="about-decoration decoration-tl">
            <i class="fas fa-code"></i>
        </div>
        <div class="about-decoration decoration-br">
            <i class="fas fa-terminal"></i>
        </div>
        <div class="container about-container">
            <div class="about-image">
                <img src="foto.jpg" alt="Student Photo">
            </div>
            <div class="about-content">
                <h2 class="section-title">Personal Information</h2>
                <p class="section-subtitle">Get to know me better through these key details</p>
                
                <div class="info-item">
                    <h3><i class="fas fa-user"></i> Full Name</h3>
                    <p id="nama">Egi Agung Juanta</p>
                </div>
                
                <div class="info-item">
                    <h3><i class="fas fa-calendar-day"></i> Date of Birth</h3>
                    <p id="tanggal-lahir">29 Maret 2002</p>
                </div>
                
                <div class="info-item">
                    <h3><i class="fas fa-venus-mars"></i> Gender</h3>
                    <p id="jenis-kelamin">Male</p>
                </div>
                
                <div class="info-item">
                    <h3><i class="fas fa-quote-left"></i> About Me</h3>
                    <p>I am a student who has the intention to learn knowledge to become a person with more experience..</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Education Section -->
    <section class="education" id="education">
        <div class="container education-container">
            <h2 class="section-title">Academic Background</h2>
            <p class="section-subtitle">My educational journey and academic qualifications</p>
            
            <div class="education-items">
                <div class="edu-item">
                    <h3><i class="fas fa-graduation-cap"></i> Education Level</h3>
                    <p id="pendidikan"><i class="fas fa-award"></i> Doctor</p>
                </div>
                
                <div class="edu-item">
                    <h3><i class="fas fa-university"></i> Faculty</h3>
                    <p id="fakultas"><i class="fas fa-laptop-code"></i> Informatics Engineering</p>
                </div>
                
                <div class="edu-item">
                    <h3><i class="fas fa-book"></i> Study Program</h3>
                    <p id="program-studi"><i class="fas fa-microchip"></i> Information Technology</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-pattern"></div>
        <div class="container">
            <h2 class="section-title contact-title">Contact Information</h2>
            <p class="section-subtitle">Feel free to reach out through any of these channels</p>
            
            <div class="contact-items">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p id="email">egiagung1212@gmail.com</p>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <p id="telepon">089663348900</p>
                </div>
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <h3>Social Media</h3>
                    <p id="Instagram">egiagungjuanta</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-icons">
                <a href="#" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="footer-icon"><i class="fab fa-github"></i></a>
                <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer-icon"><i class="fas fa-envelope"></i></a>
            </div>
            <p>&copy; <span id="current-year">2025</span> Student Portfolio. All Rights Reserved.</p>
            <p class="mt-2">Designed with <i class="fas fa-heart" style="color:var(--accent)"></i> by <a href="#">Egi Agung Juanta</a></p>
        </div>
    </footer>

    <script>
        // Create particles dynamically
        const particlesContainer = document.querySelector('.particles');
        for (let i = 0; i < 30; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.opacity = Math.random() * 0.5 + 0.1;
            particle.style.width = Math.random() * 4 + 2 + 'px';
            particle.style.height = particle.style.width;
            particlesContainer.appendChild(particle);
        }
        
        // Update the information
        document.getElementById('nama').textContent = "Egi Agung Juanta";
        document.getElementById('tanggal-lahir').textContent = "29 Maret 2002";
        document.getElementById('jenis-kelamin').textContent = "Male";
        document.getElementById('pendidikan').textContent = "Doctor";
        document.getElementById('fakultas').textContent = "Informatics Engineering";
        document.getElementById('program-studi').textContent = "Information Technology";
        document.getElementById('email').textContent = "egiagung1212@gmail.com";
        document.getElementById('telepon').textContent = "089663348900";
        document.getElementById('Instagram').textContent = "egiagungjuanta";
        
        // Update current year
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        // Smooth scrolling
        document.querySelector('.scroll-btn').addEventListener('click', function() {
            document.querySelector('#about').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });

        // Add animation to elements when they come into view
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.info-item, .edu-item, .contact-item');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if(elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Set initial state for animation
        document.querySelectorAll('.info-item, .edu-item, .contact-item').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'all 0.5s ease-out';
        });

        // Run animation on scroll
        window.addEventListener('scroll', animateOnScroll);
        
        // Run once on load
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>
