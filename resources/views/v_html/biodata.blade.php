<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Biography</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
        
        :root {
            --gold: #d4af37;
            --gold-light: #f0e68c;
            --black: #111111;
            --dark-gray: #222222;
            --light-gray: #aaaaaa;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--black);
            color: var(--white);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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
        }
        
        .header-content {
            text-align: center;
            padding: 20px;
            max-width: 800px;
            z-index: 2;
        }
        
        .header-content h1 {
            font-family: 'Cinzel', serif;
            font-size: 4.5rem;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 20px;
            letter-spacing: 4px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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
            background-color: var(--dark-gray);
        }
        
        .about-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 50px;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 5px solid var(--gold);
        }
        
        .about-content {
            flex: 2;
            min-width: 300px;
        }
        
        .section-title {
            font-family: 'Cinzel', serif;
            font-size: 2.5rem;
            color: var(--gold);
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
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
        
        .info-item {
            margin-bottom: 20px;
            padding-left: 15px;
            border-left: 3px solid var(--gold);
        }
        
        .info-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold-light);
            margin-bottom: 5px;
            font-size: 1.2rem;
        }
        
        .info-item p {
            color: var(--light-gray);
            font-size: 1.1rem;
        }
        
        /* Education Section */
        .education {
            padding: 100px 0;
            background-color: var(--black);
        }
        
        .education-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .education-items {
            margin-top: 40px;
        }
        
        .edu-item {
            background-color: rgba(34, 34, 34, 0.8);
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid var(--gold);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .edu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2);
        }
        
        .edu-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold);
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        
        .edu-item p {
            color: var(--light-gray);
            margin-bottom: 5px;
        }
        
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--dark-gray);
            text-align: center;
        }
        
        .contact-title {
            text-align: center;
        }
        
        .contact-items {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 50px;
        }
        
        .contact-item {
            background-color: var(--black);
            padding: 30px;
            border-radius: 10px;
            min-width: 250px;
            transition: transform 0.3s ease;
            border: 1px solid var(--gold);
        }
        
        .contact-item:hover {
            transform: translateY(-10px);
        }
        
        .contact-item i {
            font-size: 2.5rem;
            color: var(--gold);
            margin-bottom: 20px;
        }
        
        .contact-item h3 {
            font-family: 'Cinzel', serif;
            color: var(--gold);
            margin-bottom: 10px;
        }
        
        .contact-item p {
            color: var(--light-gray);
        }
        
        /* Footer */
        footer {
            background-color: var(--black);
            padding: 30px 0;
            text-align: center;
            border-top: 1px solid #333;
        }
        
        footer p {
            color: var(--light-gray);
            font-size: 0.9rem;
        }
        
        footer a {
            color: var(--gold);
            text-decoration: none;
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
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="header-content">
            <h1>BIOGRAPHY OF STUDENT</h1>
            <p>University Bina Sarana Informatika </p>
        </div>
        <div class="scroll-btn">
            <i class="fas fa-chevron-down"></i>
        </div>
    </header>
    
    <!-- About Section -->
    <section class="about" id="about">
        <div class="container about-container">
            <div class="about-image">
                <img src="foto.jpg" alt="Student Photo">
            </div>
            <div class="about-content">
                <h2 class="section-title">Personal Information</h2>
                
                <div class="info-item">
                    <h3>Full Name</h3>
                    <p id="nama">Egi Agung Juanta</p>
                </div>
                
                <div class="info-item">
                    <h3>Date of Birth</h3>
                    <p id="tanggal-lahir">29 Maret 2002</p>
                </div>
                
                <div class="info-item">
                    <h3>Gender</h3>
                    <p id="jenis-kelamin">Male</p>
                </div>
                
                <div class="info-item">
                    <h3>About Me</h3>
                    <p>I am a student who has the intention to learn knowledge to become a person with more experience..</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Education Section -->
    <section class="education" id="education">
        <div class="container education-container">
            <h2 class="section-title">Academic Background</h2>
            
            <div class="education-items">
                <div class="edu-item">
                    <h3>Education Level</h3>
                    <p id="pendidikan">Master</p>
                </div>
                
                <div class="edu-item">
                    <h3>Faculty</h3>
                    <p id="fakultas">Informatics Engineering</p>
                </div>
                
                <div class="edu-item">
                    <h3>Study Program</h3>
                    <p id="program-studi">Informatics Technology</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title contact-title">Contact Information</h2>
            
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
                    <i class="fas fa-phone"></i>
                    <h3>Social Media</h3>
                    <p id="Instagram">egiagungjuanta</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <span id="current-year">2025</span> Student Portfolio. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Update the information
        document.getElementById('nama').textContent = "Egi Agung Juanta";
        document.getElementById('tanggal-lahir').textContent = "29 Maret 2002";
        document.getElementById('jenis-kelamin').textContent = "Male";
        document.getElementById('pendidikan').textContent = "Doctor;
        document.getElementById('fakultas').textContent = "Informatics Engineering";
        document.getElementById('program-studi').textContent = "Information Technology";
        document.getElementById('email').textContent = "egiagung1212@gmail.com";
        document.getElementById('telepon').textContent = "089663348900";
        document.getElementById('instagram').textContent = "egiagungjuanta";
        
        // Update current year
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        // Smooth scrolling
        document.querySelector('.scroll-btn').addEventListener('click', function() {
            document.querySelector('#about').scrollIntoView({ 
                behavior: 'smooth' 
            });
        });
    </script>
</body>
</html>