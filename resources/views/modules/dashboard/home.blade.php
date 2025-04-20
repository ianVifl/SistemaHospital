@extends('layouts.main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>HOSPITAL</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <style>
        :root {
            --primary-blue: #1a73e8;
            --secondary-blue: #4285f4;
            --light-blue: #e8f0fe;
            --dark-blue: #0d47a1;
            --accent-blue: #00bcd4;
            --white: #ffffff;
            --gray: #f5f5f5;
            --dark-gray: #757575;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-blue);
            color: var(--dark-blue);
            min-height: 100vh;
        }
        
        .dashboard {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: var(--white);
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }
        
        .slogan {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .main-content {
            flex: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .welcome-card {
            background: var(--white);
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 8px 24px rgba(0, 0, 139, 0.1);
            max-width: 900px;
            width: 100%;
            margin: 1rem;
            border-top: 5px solid var(--accent-blue);
        }
        
        .welcome-title {
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
        }
        
        .welcome-text {
            color: var(--dark-gray);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 2rem;
        }
        
        .stat-card {
            background: linear-gradient(135deg, var(--secondary-blue), var(--primary-blue));
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            min-width: 200px;
            margin: 0.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 0.5rem;
        }
        
        footer {
            background-color: rgb(243, 243, 243);
            color: black;
            text-align: center;
            padding: 1.5rem;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .logo {
                font-size: 2rem;
            }
            
            .slogan {
                font-size: 1rem;
            }
            
            .welcome-card {
                padding: 1.5rem;
            }
            
            .welcome-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <header>
            <div class="slogan">"Donde Brindamos Respuestas, Atención Personalizada que transforma vidas y Desarrollo Humano para un Futuro Pleno y Saludable."</div>
        </header>
        
        <div class="main-content">
            <div class="welcome-card">
                <h1 class="welcome-title">Bienvenido a Nuestro Sistema de Salud Integral</h1>
                <p class="welcome-text">Estamos comprometidos con tu bienestar y el de tu familia. Nuestro equipo de profesionales altamente capacitados está listo para brindarte la mejor atención médica con calidez humana y tecnología de punta.</p>
                
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-value">100+</div>
                        <div class="stat-label">Especialistas</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">24/7</div>
                        <div class="stat-label">Atención</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">50+</div>
                        <div class="stat-label">Años de Experiencia</div>
                    </div>
                </div>
            </div>
        </div>
      
      
    </section>

  </main><!-- End #main -->