<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techie Crew | Digital Marketing Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #161515;
            --secondary: #626060;
            --dark: #706f6f;
            --light: #7e7d7d;
            --accent: #6a6a6a;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.6;
            color: #010101;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #464444;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            font-size: 1rem;
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: var(#6a6a6a);
        }

        .section-title p {
            font-size: 1rem;
            color: var(#060606);
            max-width: 600px;
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(#646161);
            color: rgb(98, 91, 91);
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #c18dc1;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgb(217, 4, 246);
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgb(255, 255, 255);
            transition: all 0.3s ease;
        }

        .header-scrolled {
            background: rgba(255, 255, 255, 0.98);
            padding: 10px 0;
            box-shadow: 0 5px 20px rgb(255, 255, 254);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img {
            height: 45px;
            width: 160px;
            background: var(#020307);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(252, 252, 252);
            font-weight: bold;
            font-size: 18px;
            margin-right: 10px;
            /* This is a placeholder - replace with your actual logo image */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="160" height="45" viewBox="0 0 160 45"><rect width="160" height="45" fill="%234a6cf7" rx="8"/><text x="80" y="28" font-family="Arial" font-size="18" font-weight="bold" fill="white" text-anchor="middle">LOGO HERE</text></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Instructions for replacing the logo */
        .logo-replacement {
            display: none;
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0,0,0,0.8);
            color: rgb(66, 64, 64);
            padding: 1px;
            border-radius: 0;
            font-size: 5px;
            max-width: 200px;
        }

        .logo:hover .logo-replacement {
            display: block;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: rgb(5, 7, 0);
        }

        .logo-text span {
            color: rgb(11, 11, 11);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(#1d1c1c);
            font-weight: 600;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--dark);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Hero Section */
        .hero {
            padding: 120px 0 60px;
            background: linear-gradient(135deg, #0c0c0c 0%, #ffffff 0%);
            position: relative;
            overflow: hidden;
             box-shadow: 0 15px 30px rgb(255, 255, 255);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            flex: 1;
            padding-right: 30px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #0d0d0d68;
        }

        .hero-text h1 span {
            color: #080808;
        }

        .hero-text p {
            font-size: 1.1rem;
            color: rgba(55, 55, 39, 0.989);
            margin-bottom: 30px;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(#edeaea);
            color: var(#f0eeee);
        }

        .btn-secondary:hover {
            background: var(#d7cfcf);
            color: rgb(168, 37, 37);
        }

        .hero-image {
            flex: 1;
            text-align:center;
        }
            /* Image Slider */
.slider-container {
    width: 400px;
    height: 400px;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgb(254, 254, 254);
}

.slider {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
}

.slide.active {
    opacity: 1;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
}

.slide-content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background: linear-gradient(transparent, rgb(255, 255, 255));
    color: white;
    border-radius: 0 0 20px 20px;
}

.slide-content h3 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.slide-content p {
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Slider Controls */
.slider-controls {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.slider-dot {
    width: 0px;
    height: 0px;
    border-radius: 50%;
    background: rgb(255, 255, 255);
    cursor: pointer;
    transition: all 0.3s ease;
}

.slider-dot.active {
    background: white;
    transform: scale(1.2);
}

.slider-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 15px;
    z-index: 10;
}

.slider-nav button {
    background: rgb(255, 255, 255);
    border: none;
    width: 0px;
    height: 0px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    color: #fcfcfc;
    font-size: 1.2rem;
}

.slider-nav button:hover {
    background: rgb(245, 243, 243);
    transform: scale(1.1);
}

/* Animation for slides */
@keyframes slideIn {
    from { opacity: 0; transform: translateX(30px); }
    to { opacity: 1; transform: translateX(0); }
}

.slide.active {
    animation: slideIn 7.1s ease-out;
}

        /* About Section */
        .about {
            background: linear-gradient(135deg, #f5f8ff 0%, #c8c5c586 0%);
             box-shadow: 0 15px 30px rgb(255, 255, 255);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 70px;
            box-shadow: 0 15px 30px rgb(255, 255, 255);
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #141414;
        }

        .about-text p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #000000;
        }
        /* About Section Slider */
.about-slider-container {
    width: 100%;
    max-width: 800px;
    margin: 40px auto;
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.about-slider {
    width: 100%;
    height: 400px;
    position: relative;
}

.about-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.8s ease-in-out;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 40px;
    text-align: center;
    background: linear-gradient(135deg, #f5f8ff 0%, #6363636c 100%);
}

.about-slide.active {
    opacity: 1;
}

.about-slide-icon {
    width: 80px;
    height: 80px;
    background: #060606;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgb(255, 255, 255);
    font-size: 2rem;
    margin-bottom: 25px;
    box-shadow: 0 10px 20px rgba(255, 255, 255, 0);
}

.about-slide h3 {
    font-size: 2rem;
    color: #060606;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 15px;
}

.about-slide h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: #090909;
}

.about-slide p {
    font-size: 1.2rem;
    color: #060606;
    line-height: 1.7;
    max-width: 600px;
}

/* About Slider Controls */
.about-slider-controls {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.about-slider-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0);
    cursor: pointer;
    transition: all 0.3s ease;
}

.about-slider-dot.active {
    background: rgba(255, 255, 255, 0);
    transform: scale(1.2);
}

.about-slider-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    z-index: 10;
}

.about-slider-nav button {
    background: rgba(255, 255, 255, 0);
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    color: #4a6df700;
    font-size: 1.2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.about-slider-nav button:hover {
    background: rgba(255, 255, 255, 0);
    transform: scale(1.1);
}

/* Animation for about slides */
@keyframes aboutSlideIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.about-slide.active {
    animation: aboutSlideIn 7.1s ease-out;
}

/* Responsive adjustments for about slider */
@media (max-width: 768px) {
    .about-slider {
        height: 350px;
    }
    
    .about-slide {
        padding: 30px 20px;
    }
    
    .about-slide h3 {
        font-size: 1.7rem;
    }
    
    .about-slide p {
        font-size: 1.1rem;
    }
}

@media (max-width: 576px) {
    .about-slider {
        height: 300px;
    }
    
    .about-slide {
        padding: 20px 15px;
    }
    
    .about-slide h3 {
        font-size: 1.5rem;
    }
    
    .about-slide p {
        font-size: 1rem;
    }
    
    .about-slide-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: linear-gradient(135deg, #060606 0%, #ffffff 0%);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgb(255, 255, 255);
            transition: all 0.3s ease;
            text-align: center;
            overflow: hidden;
            cursor: pointer;
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgb(255, 255, 255);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
            position: relative;
            z-index: 1;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #f5f8ff 0%, #c4c2c2 0%);;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -50px auto 20px;
            color: var(--primary);
            font-size: 1.8rem;
            position: relative;
            z-index: 1;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: rgb(0, 0, 0);
        }

        .service-card p {
            color: rgba(2, 2, 2, 0.947);
            margin-bottom: 20px;
        }

        .service-link {
            display: inline-block;
            color: rgb(9, 9, 9);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .service-link:hover {
            color: var(#0c0c0c);
            transform: translateX(5px);
        }

        /* Service Modal */
        .service-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(188, 184, 184);
            z-index: 2000;
            overflow-y: auto;
            padding: 20px;
        }

        .modal-content {
            background:linear-gradient(135deg, #ffffff 0%, #ffffff 0%);
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            animation: reverse 0.3s ease;
        }

        @keyframes modalFade {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 20px 30px;
            background: var(#a09e9e);
            color: rgb(245, 8, 8);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-size: 1.8rem;
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            color: rgb(249, 0, 0);
            font-size: 1.5rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .close-modal:hover {
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 30px;
        }

        .modal-image {
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-body p {
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .modal-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .feature-icon {
            color: rgb(222, 46, 46);
            font-size: 1.2rem;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .modal-footer {
            padding: 20px 30px;
            background:#b3b2b2;
            display: flex;
            justify-content: flex-end;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, #ffffff 0%, #9e9b9b44 0%);
            box-shadow: 0 15px 30px rgb(254, 255, 255);
        }

        .contact-content {
            display: flex;
            gap: 50px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-form {
            flex: 1;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #000202;
        }

        .contact-details p {
            color: #161616;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ff0202;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(#0fb1e2);
            outline: none;
            box-shadow: 0 0 0 3px rgb(250, 1, 1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Careers Section */
        /* Additional styles for careers page */
.job-openings {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.job-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 30px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.job-title {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

.job-department {
    color: #6a6a6a;
    font-weight: 600;
    margin-bottom: 15px;
    display: inline-block;
    background: #f5f8ff;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
}

.job-description {
    color: #666;
    margin-bottom: 20px;
    line-height: 1.6;
}

.job-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 10px;
}

.job-detail {
    display: flex;
    align-items: center;
    color: #555;
    font-size: 0.9rem;
}

.job-detail i {
    margin-right: 5px;
    color: #0b0b0b;
}

.apply-btn {
    display: inline-block;
    padding: 10px 20px;
    background: #000000;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
}

.apply-btn:hover {
    background: #928e8e;
    transform: translateY(-2px);
}

.career-form-container {
    display: none;
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    margin: 0 auto;
}

.career-form-container.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.form-header h3 {
    font-size: 1.8rem;
    color: #333;
    margin: 0;
}

.close-form {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: #666;
    transition: color 0.3s ease;
}

.close-form:hover {
    color: #333;
}

.back-to-jobs {
    display: inline-block;
    margin-top: 20px;
    color: #4a6cf7;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.back-to-jobs:hover {
    color: #3a5ce5;
    transform: translateX(-5px);
}
        /* Footer */
        footer {
            background: rgb(163, 164, 164);
            color: rgb(255, 255, 255);
            padding: 70px 0 20px;
            box-shadow: 0 15px 30px rgb(234, 73, 4);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 2px;
            background: rgb(0, 0, 0);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(0, 0, 0);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: blueviolet;
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 3px solid rgba(7, 7, 7, 0.99);
            color: #000000;
            font-size: 1rem;
        }

        /* Logo Replacement Instructions */
        .logo-instructions {
            background: #ec600f;
            border-left: 4px solid var(--primary);
            padding: 10px;
            margin: 20px 0;
            border-radius: 0 5px 5px 0;
        }

        .logo-instructions h4 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .logo-instructions code {
            background: #e9ecef;
            padding: 1px 4px;
            border-radius: 2px;
            font-family: monospace;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content,
            .about-content,
            .contact-content {
                flex-direction: column;
            }

            .hero-text,
            .about-text,
            .contact-info,
            .contact-form {
                padding-right: 0;
                margin-bottom: 40px;
            }

            .hero-text h1 {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 0;
            }

            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background:(199, 31, 31);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: all 0.5s ease;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hero-text h1 {
                font-size: 2.2rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
            
            .modal-content {
                margin: 20px auto;
            }
            
            .modal-features {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-btns {
                flex-direction: column;
                gap: 10px;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
            
            .logo-img {
                height: 50px;
                width: auto;
                max-width: 10px;
                border-radius: 10px;
                margin-right: 10px;
            }
            /* Instructions for replacing the logo */
            .logo-replacement {
                display: none;
                position: absolute;
                top: 10px;
                left: 10px;
                background: rgba(169, 163, 163, 0.97);
                color: rgb(13, 13, 13);
                padding: 1px;
                border-radius: 0;
                font-size: 5px;
                max-width: 200px;
            }   

            .logo:hover .logo-replacement {
            display: block;
            }
            
            .logo-text {
                font-size: 1.5rem;
            }
            
            .modal-header {
                padding: 15px 20px;
            }
            
            .modal-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
               <a href="#" class="logo">
    <img src="images/logo1.jpg" class="logo-img" alt="Techie Crew Logo">
    <div class="logo-text">Techie <span>Crew</span></div>
</a>
                <ul class="nav-links">
                    <li><a class="btn"href="#home">Home</a></li>
                    <li><a class="btn"href="#about">About Us</a></li>
                    <li><a class="btn"href="#services">Services</a></li>
                    <li><a class="btn"href="#contact">Contact Us</a></li>
                    <li><a class="btn"href="#careers">Career</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

   
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
            <div class="hero-image">
               <div class="slider-container">
        <div class="slider">
            <!-- Slide 1 -->
            <div class="slide active">
                <img src="images/logo.jpg" alt="Business Growth">
                <div class="slide-content">
                    <h></h3>
                    <p></p>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide">
                <img src="images/1.jpg" alt="Digital Transformation">
                <div class="slide-content">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide">
                <img src="images/2.jpg" alt="Marketing Strategy">
                <div class="slide-content">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="slide">
                <img src="images/3.jpg" alt="Team Development">
                <div class="slide-content">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="slide">
                <img src="images/4.jpg" alt="Team Development">
                <div class="slide-content">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        
        <!-- Slider Navigation -->
        <div class="slider-nav">
            <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
            <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
        
        <!-- Slider Dots -->
        <div class="slider-controls">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
            <div class="slider-dot" data-slide="3"></div>
        </div>
    </div>
</div>
                <div class="hero-text">
                    <h1>Elevate Your  <span>Business Growth With our Expert's</span> Consulting and IT Solution</h1>
                    <p>We at TECHIE CREW are a results-oriented business consulting group committed to assisting companies in achieving operational excellence and sustainable growth.  Working with startups, SMEs, and major corporations, our team of seasoned consultants develops customized strategies that boost productivity, create new opportunities, and drive performance.</p>
                    <div class="hero-btns">
                        <a href="#services" class="btn">Our Services</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="section-title">
            <h2>About Us</h2>
            <p></p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="images/about.png" alt="Our Team">
            </div>
            <div class="about-text">
                <h3>We Create Digital Experiences</h3>
                <p>From financial planning and corporate strategy to market research, digital transformation, and organizational development, we offer comprehensive consulting services tailored to your particular requirements.</p>
                <p>We think that data-driven insights, creative problem-solving, and practical assistance may help you overcome obstacles, grab opportunities, and maintain your competitive edge in a market that is changing quickly.</p>
                
                <!-- Mission & Vision Slider -->
                <div class="about-slider-container">
                    <div class="about-slider">
                        <!-- Mission Slide -->
                        <div class="about-slide active">
                            <div class="about-slide-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3>Our Mission</h3>
                            <p>“To provide affordable and high-quality digital marketing solutions that help small businesses grow online with our business consultancy ideas and to enlarge the ideas to standardise the system.”</p>
                        </div>
                        
                        <!-- Vision Slide -->
                        <div class="about-slide">
                            <div class="about-slide-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Our Vision</h3>
                            <p>“To provide affordable and high-quality digital marketing solutions that help small businesses grow online with our business consultancy ideas and to enlarge the ideas to standardise the system.”</p>
                        </div>
                        
                    
                    <!-- Slider Navigation -->
                    <div class="about-slider-nav">
                        <button class="about-prev-btn"><i class="fas fa-chevron-left"></i></button>
                        <button class="about-next-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    
                    <!-- Slider Dots -->
                    <div class="about-slider-controls">
                        <div class="about-slider-dot active" data-slide="0"></div>
                        <div class="about-slider-dot" data-slide="1"></div>
                        <div class="about-slider-dot" data-slide="2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We believe in data-driven insights, innovative thinking, and hands-on support to help you navigate challenges, seize opportunities, and stay ahead in a rapidly changing marketplace.</p>
            </div>
            <div class="services-grid">
                <!-- Business Strategy Service -->
                <div class="service-card" data-service="business-strategy">
                    <div class="service-image">
                        <img src="images/business.jpg" alt="Business Strategy">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-chess-knight"></i>
                        </div>
                        <h3>Business Strategy & Planning</h3>
                        <p></p>
                        <a href="#" class="service-link"> <i class=""></i></a>
                    </div>
                </div>
                
                <!-- Digital Marketing Service -->
                <div class="service-card" data-service="digital-marketing">
                    <div class="service-image">
                        <img src="images/digital.jpg" alt="Digital Marketing">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p></p>
                        <a href="#" class="service-link"> <i class=""></i></a>
                    </div>
                </div>
                
                <!-- Marketing & Brand Development Service -->
                <div class="service-card" data-service="marketing-brand">
                    <div class="service-image">
                        <img src="images/marketing.jpg" alt="Marketing & Brand Development">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h3>Marketing & Brand Development</h3>
                        <p></p>
                        <a href="#" class="service-link"><i class=""></i></a>
                    </div>
                </div>
                
                <!-- Content Creation Service -->
                <div class="service-card" data-service="WEBSITE DEVELOPMENT">
                    <div class="service-image">
                        <img src="images/content creation.jpg" alt="WEBSITE DEVELOPMENT">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h3>WEBSITE DEVELOPMENT</h3>
                        <p></p>
                        <a href="#" class="service-link"><i class=""></i></a>
                    </div>
                </div>
                
                <!-- Social Media Marketing Service -->
                <div class="service-card" data-service="social-media">
                    <div class="service-image">
                        <img src="images/social.jpg" alt="Social Media Marketing">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3>Financial & operational consulting</h3>
                        <p></p>
                        <a href="#" class="service-link"> <i class=""></i></a>
                    </div>
                </div>
                
                <!-- Web Design & Development Service -->
                <div class="service-card" data-service="web-design">
                    <div class="service-image">
                        <img src="images/website.jpg" alt="Web Design & Development">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>process optimization & changing Management</h3>
                        <p></p>
                        <a href="#" class="service-link"><i class=""></i></a>
                    </div>
                </div>
                
                <!-- Customer Service -->
                <div class="service-card" data-service="customer-service">
                    <div class="service-image">
                        <img src="images/CUSTOMER.jpg" alt="Customer Service">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Customer Service & inhouse sales</h3>
                        <p></p>
                        <a href="#" class="service-link"><i class=""></i></a>
                    </div>
                </div>
                
                <!-- Sales & Marketing Service -->
                <div class="service-card" data-service="sales-marketing">
                    <div class="service-image">
                        <img src="images/sales.jpg" alt="Sales & Marketing">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Digital Transformation & innovation</h3>
                        <p></p>
                        <a href="#" class=""> <i class=""></i></a>
                    </div>
                </div>
                
                <!-- Video Shoot & Editing Service -->
                <div class="service-card" data-service="video-editing">
                    <div class="service-image">
                        <img src="images/video.jpg" alt="Video Shoot & Editing">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                           <i class="fas fa-clock"></i>
                        </div>
                        <h3>Leadership & team Development</h3>
                        <p></p>
                        <a href="#" class="service-link"><i class=""></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Modal -->
    <div class="service-modal" id="serviceModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle">Service Title</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="Service Image">
                </div>
                <p id="modalDescription">Service description will appear here.</p>
                <div class="modal-features" id="modalFeatures">
                    <!-- Features will be dynamically added here -->
                </div>
                <p id="modalAdditional">Additional information about the service.</p>
            </div>
            <div class="modal-footer">
                <a href="#contact" class="btn">Get This Service</a>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with us to discuss how we can help grow your business.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                           <a  href="https://maps.app.goo.gl/WLRYW1rE7r3CzaVP8" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                        <div class="contact-details">
                            <h4>Our Office</h4>
                            <p>Parvathipuram,Nagercoil</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone Number</h4>
                            <p>+91 9500493972</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Address</h4>
                            <p>vptechiecrew@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Working Hours</h4>
                            <p>Monday - Saturday: 10:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                </div>
            <div class="contact-form">
                <h1>contact from</h1>
                    <form action="contact_submit.php" method="POST">
                     <div class="form-group">
                     <label for="name">name</lable>
                        <input type="text" id="name" name="name">
                    </div>
                     <div class="form-group">
                        <label for="email">email</lable>
                        <input type="text" id="name" name="email">
                    </div>
                     <div class="form-group">
                        <label for="message">message</lable>
                        <textarea id="message" name="message"></textarea>
                    </div>
                        <button type="submit" class="btn">send</button>
                    </form>
            </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    <!-- Careers Section -->
<section class="careers" id="careers">
    <div class="container">
        <div class="section-title">
            <h2>Careers</h2>
            <p>Join our team of digital marketing experts and help shape the future of online business.</p>
        </div>
        <div class="careers-content">
            <p></p>
            
            <h3 style="text-align: center; margin: 40px 0 30px; color: #333;">Current Openings</h3>
            
            <div class="job-openings">
                <!-- Job Card 1 -->
                <div class="job-card" data-position="seo-specialist">
                    <h3 class="job-title">Business Developer</h3>
                    <span class="job-department">Digital Marketing,</span>
                    <span class="job-department">Digital Marketing,</span>
                    <p class="job-description">Work with clients to understand their goals, analyze market trends, and develop strategies that drive growth and improve performance.Identify new business opportunities, build client relationships, and expand the company’s reach. Handling lead generation, partnerships, and negotiations while turning connections into growth and helping the business achieve its revenue goals</p>
                    <div class="job-details">
                        <div class="job-detail"><i class="fas fa-map-marker-alt"></i> Nagercoil</div>
                        <div class="job-detail"><i class="fas fa-clock"></i> Full-time</div>
                        <div class="job-detail"><i class="fas fa-briefcase"></i> 2+ years exp</div>
                    </div>
                    <button class="apply-btn">Apply Now</button>
                </div>
                
                <!-- Job Card 2 -->
                <div class="job-card" data-position="content-writer">
                    <h3 class="job-title">UI/UX designer</h3>
                    <span class="job-department">Content</span>
                    <span class="job-department">Digital Marketing,</span>
                    <span class="job-department">Digital Marketing,</span>
                    <p class="job-description">We’re looking for a creative UI/UX & Graphic Designer to join our team. In this role, you’ll collaborate with product managers, developers, and stakeholders to design intuitive, engaging, and visually appealing digital experiences that align with our brand and enhance user satisfaction.</p>
                    <div class="job-details">
                        <div class="job-detail"><i class="fas fa-map-marker-alt"></i> Nagercoil</div>
                        <div class="job-detail"><i class="fas fa-clock"></i> Full-time</div>
                        <div class="job-detail"><i class="fas fa-briefcase"></i> 1+ years exp</div>
                    </div>
                    <button class="apply-btn">Apply Now</button>
                </div>
                
                <!-- Job Card 3 -->
                <div class="job-card" data-position="social-media-manager">
                    <h3 class="job-title">Social Media Manager</h3>
                    <span class="job-department">Digital Marketing</span>
                    <p class="job-description">Managing social media accounts and ensuring consistent brand presence across all platforms.</p>
                    <p class="job-description">Collaborating with designers, writers, and marketing teams to plan campaigns and promotions.</p>
                    <p class="job-description">Monitoring trends, audience engagement, and performance analytics to improve reach and impact.</p>
                    <div class="job-details">
                        <div class="job-detail"><i class="fas fa-map-marker-alt"></i> Nagercoil</div>
                        <div class="job-detail"><i class="fas fa-clock"></i> Full-time</div>
                        <div class="job-detail"><i class="fas fa-briefcase"></i> 2+ years exp</div>
                    </div>
                    <button class="apply-btn">Apply Now</button>
                </div>
            </div>
            
            <!-- Career Form (Initially Hidden) -->
            <div class="career-form-container" id="careerFormContainer">
                <div class="form-header">
                    <h3 id="formPositionTitle">Apply for Position</h3>
                    <button class="close-form" id="closeForm">&times;</button>
                </div>
                
                <form id="careerForm" action="submit_career.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="selectedPosition" name="position" readonly required>
                    </div>
                    <div class="form-group">
                        <div class="file-upload">
                            <label class="file-upload-btn">
                                <i class="fas fa-cloud-upload-alt"></i> Upload Resume (PDF, DOC, DOCX)
                                <input type="file" name="resume" accept=".pdf,.doc,.docx" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="cover_letter" placeholder="Cover Letter" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%;">Submit Application</button>
                </form>
                
                <a href="#" class="back-to-jobs" id="backToJobs">
                    <i class="fas fa-arrow-left"></i> Back to Job Openings
                </a>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Techie Crew</h3>
                    <p>We help businesses grow through innovative digital marketing strategies and Businesses to Grow Smarter</p>
                    <div class="social-links">
                        <a href="https://facebook.com/techiecrew" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/techiecrew" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/techie.crew?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/company/techiecrew" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">SEO Optimization</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Content Marketing</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Business Strategy</a></li>
                        <li><a href="#">Sales Optimization</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact us</h3>
                    <p><i class="fa-solid fa-location-dot"></i> Parvathipuram,Nagercoil</p>
                    <a class="btn" href="https://maps.app.goo.gl/WLRYW1rE7r3CzaVP8" target="_blank"><i class="fa-solid fa-compass"></i>Location</a>
                    <p><i class="fa-solid fa-square-envelope"></i> vptechiecrew@gmail.com</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Techie Crew. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
         // Image Slider Functionality
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.slider-dot');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
let currentSlide = 0;
let slideInterval;

// Function to show a specific slide
function showSlide(n) {
    // Remove active class from all slides and dots
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    // Calculate the correct slide index
    currentSlide = (n + slides.length) % slides.length;
    
    // Add active class to current slide and dot
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

// Function to show next slide
function nextSlide() {
    showSlide(currentSlide + 1);
}

// Function to show previous slide
function prevSlide() {
    showSlide(currentSlide - 1);
}

// Start autoplay
function startAutoPlay() {
    slideInterval = setInterval(nextSlide, 5000);
}

// Stop autoplay
function stopAutoPlay() {
    clearInterval(slideInterval);
}

// Event listeners for navigation buttons
nextBtn.addEventListener('click', () => {
    nextSlide();
    stopAutoPlay();
    startAutoPlay();
});

prevBtn.addEventListener('click', () => {
    prevSlide();
    stopAutoPlay();
    startAutoPlay();
});

// Event listeners for dots
dots.forEach(dot => {
    dot.addEventListener('click', function() {
        const slideIndex = parseInt(this.getAttribute('data-slide'));
        showSlide(slideIndex);
        stopAutoPlay();
        startAutoPlay();
    });
});

// Pause autoplay when hovering over slider
const sliderContainer = document.querySelector('.slider-container');
if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', stopAutoPlay);
    sliderContainer.addEventListener('mouseleave', startAutoPlay);
}

// Initialize the slider
if (slides.length > 0) {
    showSlide(currentSlide);
    startAutoPlay();
}


       // Form submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    this.reset();
});

// Career form submission
document.getElementById('careerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your application! We will review it and get back to you soon.');
    this.reset();
});

        // File upload display
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                const fileName = this.files[0] ? this.files[0].name : 'No file chosen';
                this.previousElementSibling.innerHTML = `<i class="fas fa-cloud-upload-alt"></i> ${fileName}`;
            });
        });

        // Service Modal Functionality
        const serviceModal = document.getElementById('serviceModal');
        const closeModal = document.getElementById('closeModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalImage = document.getElementById('modalImage');
        const modalDescription = document.getElementById('modalDescription');
        const modalFeatures = document.getElementById('modalFeatures');
        const modalAdditional = document.getElementById('modalAdditional');

        // Service data
        const servicesData = {
            'business-strategy': {
                title: 'Business Strategy & Planning',
                image: 'images/business.jpg',
                description: 'We develop bespoke marketing plans that correspond with your business goals in order to improve your market presence and leave a lasting impact.  Our approach is focused on successful brand positioning, creative storytelling, and digital engagement solutions that increase exposure, attract the correct audience, and deliver consistent sales growth.',
                features: [
                    
                ],
                additional: ''
            },
            'digital-marketing': {
                title: 'Digital Marketing',
                image: 'images/digital.jpg',
                description: 'TECHIE CREW uses data-driven digital marketing tactics to assist businesses improve their online presence and reach their target audience.  We use creativity, analytics, and technology to improve performance on search, social, and digital platforms.',
                features: [
                    'SOCIAL MEDIA MANAGEMENT',
                    'CONTENT CREATION',
                    'CUSTOMER SERVICE',
                    'VIDEO SHOOTS & EDITING'
                ],
                additional: ''
            },
            'marketing-brand': {
                title: 'Marketing & Brand Development',
                image: 'images/marketing.jpg',
                description: 'To achieve long-term growth and success, we help you create clear business goals, examine your market position, and develop data-driven initiatives.  We blend strategic insights, market analysis, and performance-driven planning to boost your brands visibility and deliver measurable, long-term outcomes.',
                features: [
                    
                ],
                additional: ''
            },
            'WEBSITE DEVELOPMENT': {
                title: 'WEBSITE DEVELOPMENT',
                image: 'images/content creation.jpg',
                description: 'At TECHIE CREW we specialize in creating custom websites designed to elevate your business and attract more clients. Our team combines strategic business insights with modern web design to deliver sites that not only look stunning but also drive results.',
                features: [
                     	'Custom website design and development',
                    	'Business-focused UX/UI design',
                        'SEO optimization for better visibility',
                        'Mobile-friendly and responsive layouts',
	                    'Integration with CRM and business tools',
	                    'Ongoing maintenance and support',

                ],
                additional: ''
            },
            'social-media': {
                title: 'Financial & Operational consulting',
                image: 'images/social.jpg',
                description: 'We help you take clear and confident control of your finances and operations.  Our team identifies opportunities, eliminates inefficiencies, and develops plans to improve cash flow, profitability, and overall performance.  We ensure that your firm operates smarter, stronger, and more sustainably in a changing market by streamlining processes and optimising resources.',
                features: [
                    
                ],
                additional: ''
            },
            'web-design': {
                title: 'process optimization & changing Management',
                image: 'images/website.jpg',
                description: 'Assisting businesses in streamlining their procedures and fearlessly embracing change.  Our process optimization solutions strive to increase efficiency, eliminate redundancies, and improve team performance through effective solutions.  Our change management strategy ensures smooth transitions by integrating people, processes, and technology to achieve long-term outcomes.  The goal is simple: make your firm more agile, efficient, and poised for long-term success in a rapidly changing business environment.',
                features: [
                   
                ],
                additional: ''
            },
            'customer-service': {
                title: 'Customer Service & inhouse sales',
                image: 'images/CUSTOMER.jpg',
                description: 'At TECHIE CREW, we believe that exceptional service leads to long-term success.  Our Customer Service and In-House Sales consulting services prioritize knowing your clients needs and developing solutions that create trust, loyalty, and repeat business',
                features: [
                    
                ],
                additional: ''
            },
            'sales-marketing': {
                title: 'digital transformation & innovation',
                image: 'images/sales.jpg',
                description: 'We assist you in rethinking your business for the digital age.  The introduction of the appropriate technologies and more sophisticated workflows makes it easier for your employees to operate efficiently and your customers to connect effortlessly.  It is not only about adopting new tools.',
                features: [
                    
                ],
                additional: ''
            },
            'video-editing': {
                title: 'leadership & team development',
                image: 'images/video.jpg',
                description: 'Developing great leaders and high-performing teams that achieve tangible outcomes.  We promote cooperation, communication, and accountability at all levels of your business through tailored training, performance coaching, and culture-centered growth.  Our solutions are designed to unlock potential, accelerate growth, and foster a workplace culture in which people lead with purpose and teams succeed together.',
                features: [
                    
                ],
                additional: ''
            }
        };

        // Add click event to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function() {
                const serviceId = this.getAttribute('data-service');
                const serviceData = servicesData[serviceId];
                
                if (serviceData) {
                    modalTitle.textContent = serviceData.title;
                    modalImage.src = serviceData.image;
                    modalImage.alt = serviceData.title;
                    modalDescription.textContent = serviceData.description;
                    modalAdditional.textContent = serviceData.additional;
                    
                    // Clear previous features
                    modalFeatures.innerHTML = '';
                    
                    // Add new features
                    serviceData.features.forEach(feature => {
                        const featureItem = document.createElement('div');
                        featureItem.className = 'feature-item';
                        featureItem.innerHTML = `
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">${feature}</div>
                        `;
                        modalFeatures.appendChild(featureItem);
                    });
                    
                    // Show modal
                    serviceModal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        // Close modal
        closeModal.addEventListener('click', function() {
            serviceModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside
        serviceModal.addEventListener('click', function(e) {
            if (e.target === serviceModal) {
                serviceModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && serviceModal.style.display === 'block') {
                serviceModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
        // Careers page functionality
document.addEventListener('DOMContentLoaded', function() {
    const applyButtons = document.querySelectorAll('.apply-btn');
    const careerFormContainer = document.getElementById('careerFormContainer');
    const closeForm = document.getElementById('closeForm');
    const backToJobs = document.getElementById('backToJobs');
    const selectedPosition = document.getElementById('selectedPosition');
    const formPositionTitle = document.getElementById('formPositionTitle');
    
    // Show career form when Apply button is clicked
    applyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const jobCard = this.closest('.job-card');
            const position = jobCard.getAttribute('data-position');
            const jobTitle = jobCard.querySelector('.job-title').textContent;
            
            // Set the position in the form
            selectedPosition.value = position;
            formPositionTitle.textContent = `Apply for ${jobTitle}`;
            
            // Show the form and hide job listings
            careerFormContainer.classList.add('active');
            
            // Scroll to form
            careerFormContainer.scrollIntoView({ behavior: 'smooth' });
        });
    });
    
    // Close form when X button is clicked
    closeForm.addEventListener('click', function() {
        careerFormContainer.classList.remove('active');
    });
    
    // Back to jobs when link is clicked
    backToJobs.addEventListener('click', function(e) {
        e.preventDefault();
        careerFormContainer.classList.remove('active');
        
        // Scroll back to job listings
        document.querySelector('.job-openings').scrollIntoView({ behavior: 'smooth' });
    });
    
    // Form submission
    document.getElementById('careerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for your application! We will review it and get back to you soon.');
        this.reset();
        careerFormContainer.classList.remove('active');
        
        // Scroll back to job listings
        document.querySelector('.job-openings').scrollIntoView({ behavior: 'smooth' });
    });
});
// About Section Slider Functionality
const aboutSlides = document.querySelectorAll('.about-slide');
const aboutDots = document.querySelectorAll('.about-slider-dot');
const aboutPrevBtn = document.querySelector('.about-prev-btn');
const aboutNextBtn = document.querySelector('.about-next-btn');
let currentAboutSlide = 0;
let aboutSlideInterval;

// Function to show a specific about slide
function showAboutSlide(n) {
    // Remove active class from all slides and dots
    aboutSlides.forEach(slide => slide.classList.remove('active'));
    aboutDots.forEach(dot => dot.classList.remove('active'));
    
    // Calculate the correct slide index
    currentAboutSlide = (n + aboutSlides.length) % aboutSlides.length;
    
    // Add active class to current slide and dot
    aboutSlides[currentAboutSlide].classList.add('active');
    aboutDots[currentAboutSlide].classList.add('active');
}

// Function to show next about slide
function nextAboutSlide() {
    showAboutSlide(currentAboutSlide + 1);
}

// Function to show previous about slide
function prevAboutSlide() {
    showAboutSlide(currentAboutSlide - 1);
}

// Start autoplay for about slider
function startAboutAutoPlay() {
    aboutSlideInterval = setInterval(nextAboutSlide, 5000);
}

// Stop autoplay for about slider
function stopAboutAutoPlay() {
    clearInterval(aboutSlideInterval);
}

// Event listeners for about navigation buttons
aboutNextBtn.addEventListener('click', () => {
    nextAboutSlide();
    stopAboutAutoPlay();
    startAboutAutoPlay();
});

aboutPrevBtn.addEventListener('click', () => {
    prevAboutSlide();
    stopAboutAutoPlay();
    startAboutAutoPlay();
});

// Event listeners for about dots
aboutDots.forEach(dot => {
    dot.addEventListener('click', function() {
        const slideIndex = parseInt(this.getAttribute('data-slide'));
        showAboutSlide(slideIndex);
        stopAboutAutoPlay();
        startAboutAutoPlay();
    });
});

// Pause autoplay when hovering over about slider
const aboutSliderContainer = document.querySelector('.about-slider-container');
if (aboutSliderContainer) {
    aboutSliderContainer.addEventListener('mouseenter', stopAboutAutoPlay);
    aboutSliderContainer.addEventListener('mouseleave', startAboutAutoPlay);
}

// Initialize the about slider
if (aboutSlides.length > 0) {
    showAboutSlide(currentAboutSlide);
    startAboutAutoPlay();
}
    </script>
</body>
</html>