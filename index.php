<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NexGen IT Ltd.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Smooth Scroll */
    html {
      scroll-behavior: smooth;
    }
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .hero-section p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }

    .hero-section {
      position: relative;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      overflow: hidden;
    }

    .hero-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .hero-section >.container {
      position: relative;
      z-index: 2;
      color: white;
    }

    .overlay-content {
      background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a semi-transparent overlay for better text readability */
      padding: 20px;
      border-radius: 10px;
    }
    .service-card {
      transition: transform 0.3s ease-in-out;
    }
    .service-card:hover {
      transform: scale(1.05);
    }
  .clients-wrapper {
    width: 100%;
    padding: 10px;
  }

  .clients-container {
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap to the next line */
    justify-content: space-between; /* Space out the items evenly */
  }

  .client-item {
    width: 110px;
    height: 110px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 15px;
    padding: 10px;
  }

  .client-image {
    max-width: 100%;
    max-height: 70%; /* Adjust image size to be smaller */
    object-fit: contain;
  }

  .client-name {
    margin-top: 5px; /* Less space between image and name */
    font-size: 14px; /* Smaller font size */
    font-weight: bold;
    color: #333;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Text shadow */
  }
  .container-header {
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); padding: 10px;
    font-size: 2.5em;
    font-weight: 700;
    color: #333;
    margin-bottom: 40px;
  }
  /* Box shadow and hover effect for service cards */
  .service-card {
    transition: all 0.3s ease; /* Smooth transition for shadow and highlight */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Default box shadow */
    border-radius: 8px; /* Rounded corners for the card */
  }

  .service-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
    transform: translateY(-5px); /* Slightly lift the card */
    background-color: #f8f9fa; /* Highlight the card with a light background */
  }

  .service-card img {
    border-radius: 8px; /* Rounded corners for the images */
  }
  .navbar {
    transition: all 0.3s ease-in-out;
  }

  .navbar-brand {
    font-size: 1.8rem;
    font-weight: bold;
  }
  .nav-item {
    padding: 0 20px;
  }
  .nav-link {
    font-size: 1.1rem;
    font-weight: bold;
    /*text-transform: uppercase;*/
    padding: 0.5rem 2rem;
  }

  .nav-link:hover {
    color: #f39c12 !important; /* Highlight color on hover */
    text-decoration: none;
  }

  .navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.8);
  }

  .navbar-dark .navbar-nav .nav-link:hover {
    color: #f39c12;
  }

  /* Sticky Navbar */
  .navbar.fixed-top {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999;
  }

  /* Navbar Shadow */
  .navbar.shadow-sm {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  
  #work-process {
    background: linear-gradient(to bottom right, #f7f9fc, #e6e9ef);
    padding: 50px 0;
  }

  #work-process .process-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  #work-process .process-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  }

  #work-process .process-icon {
    background: #4e73df;
    color: #fff;
    border-radius: 50%;
    display: inline-block;
    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
  }

  #work-process .process-card:hover .process-icon {
    transform: scale(1.2);
  }

  #work-process .process-title {
    font-size: 1.3em;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
  }

  #work-process .process-description {
    color: #555;
    font-size: 1em;
    line-height: 1.6;
    margin-bottom: 20px;
  }


  @media (max-width: 768px) {
    #work-process .process-card {
      margin-bottom: 30px;
    }

    .hero-section {
      height: 70vh; /* Adjust height for smaller screens */
    }

    .overlay-content h1 {
      font-size: 1.8rem; /* Smaller heading */
    }

    .overlay-content p {
      font-size: 1rem; /* Smaller paragraph text */
    }

    .btn {
      font-size: 0.9rem; /* Adjust button size */
      padding: 10px 20px;
    }
  }
</style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">NexGen IT Ltd.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#clients">Clients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>                


    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white">
      <video autoplay muted loop playsinline class="hero-video">
        <source src="images/bg-top.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="container overlay-content">
        <h1>Welcome to NexGen IT Ltd.</h1>
        <p>Your Trusted Partner for Innovative IT Solutions</p>
        <a href="#services" class="btn btn-outline-light btn-lg">Our Services</a>
      </div>
    </section>



    <!-- About Section -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-center container-header mb-5">About Us</h2>
            <p>
              NexGen IT Ltd. is a forward-thinking IT solutions provider dedicated to empowering businesses with cutting-edge technology. With a diverse portfolio of services, including web development, cloud computing, mobile app development, and digital marketing, we tailor our solutions to meet the unique needs of each client.
            </p>
            <p>
              Our team of expert developers, designers, and strategists collaborate to deliver projects that are both innovative and practical. From startups to established enterprises, we provide end-to-end IT solutions that not only solve challenges but also drive growth and efficiency. Whether you need custom software, mobile applications, or a comprehensive digital marketing strategy, NexGen IT Ltd. has the expertise to fuel your success.
            </p>
            <p>
              At NexGen IT Ltd., we believe in building long-term partnerships by providing exceptional service and support. We prioritize transparency, quality, and results, ensuring our clients are always informed and satisfied at every stage of their journey with us. We stay ahead of the curve by continuously evolving our offerings and adapting to the ever-changing tech landscape.
            </p>
            <p>
              With a commitment to innovation and excellence, our mission is to simplify technology and make it accessible to businesses of all sizes. Let us help you transform your business with powerful IT solutions designed for the future. Together, we can achieve new heights of success.
            </p>
            <p>
              Contact us today to learn more about how NexGen IT Ltd. can be the partner you need to take your business to the next level.
            </p>

          </div>
          <div class="col-md-6">
            <img src="images/about.webp" alt="About NexGen IT" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our Clients Section -->
    <section id="clients" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center container-header mb-5">Our Clients</h2>
        <div class="clients-wrapper">
          <div class="row clients-container">
            <?php
            $clients = [
              ['name' => 'Shikor', 'image' => 'shikor.png'],
              ['name' => 'Ullah House', 'image' => 'ullah house.png'],
              ['name' => 'Comfort Muslims', 'image' => 'comfort muslims.png'],
              ['name' => 'Zaka Merchants BD', 'image' => 'zaka merchants bd.png'],
              ['name' => 'Merrono Shop', 'image' => 'merrono shop.png'],
              ['name' => 'Green Leather', 'image' => 'green leather.png'],
              ['name' => 'Victory Trust Fashion', 'image' => 'victory trust fashion.jpg'],
              ['name' => 'Toy & Homeware', 'image' => 'toy and homeware.png'],
              ['name' => 'Shakil Motors BD', 'image' => 'shakil motors bd.png'],
            ];
    
            foreach ($clients as $client) {
              echo '<div class="col-md-4 col-6 client-item">';  // Use col-md-4 for larger screens and col-6 for mobile
              if ($client['image']) {
                echo '<img src="images/clients/' . $client['image'] . '" alt="' . $client['name'] . '" class="client-image img-fluid">';
              }
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="py-5">
      <div class="container">
        <h2 class="text-center container-header mb-5">Our Services</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Web Development</h5>
                <img src="images/services/web-development.gif" alt="Web Development" class="img-fluid mb-3">
                <p class="card-text">We design and build responsive, user-friendly websites that help your business stand out online.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Mobile App Development</h5>
                <img src="images/services/mobile_development.gif" alt="Mobile App Development" class="img-fluid mb-3">
                <p class="card-text">We create innovative mobile applications that provide seamless experiences across iOS and Android platforms.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Cloud Computing</h5>
                <img src="images/services/cloude-computing.gif" alt="Cloud Computing" class="img-fluid mb-3">
                <p class="card-text">Take your business to the next level with our secure and scalable cloud solutions.</p>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Custom Software</h5>
                <img src="images/services/software-development4.gif" alt="Custom Software" class="img-fluid mb-3">
                <p class="card-text">Our team of highly skilled professionals develops tailored software solutions designed to meet your business's unique needs, streamline your operations, enhance productivity, and drive growth, ensuring you stay ahead in a competitive market.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Digital Marketing</h5>
                <img src="images/services/digital-m.gif" alt="Digital Marketing" class="img-fluid mb-3">
                <p class="card-text">Our digital marketing strategies help you grow your brand online, increase traffic & drive more conversions.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Graphic Design</h5>
                <img src="images/services/graphic-design-gifs-2-1.gif" alt="Graphic Design" class="img-fluid mb-3">
                <p class="card-text">We design visually stunning graphics and branding materials that leave a lasting impression on your audience, ensuring your brand stands out with cohesive, memorable visuals that communicate your story effectively, boost recognition, and foster long-term customer loyalty.</p>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Cybersecurity</h5>
                <img src="images/services/4e2d1b0a.gif" alt="Cybersecurity" class="img-fluid mb-3">
                <p class="card-text">We provide comprehensive cybersecurity solutions to protect your digital assets and data.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Architectural Design</h5>
                <img src="images/services/GIF-01-.gif" alt="Architectural Design" class="img-fluid mb-3">
                <p class="card-text"> Our expert architects create innovative and functional designs for residential, commercial, and industrial spaces</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card service-card">
              <div class="card-body text-center">
                <h5 class="card-title">Interior Design</h5>
                <img src="images/services/int4.gif" alt="Interior Design" class="img-fluid mb-3">
                <p class="card-text">We offer interior design services that transform spaces into beautiful, functional, and comfortable environments.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Work Process Section -->
    <section id="work-process" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center container-header mb-5">Our Work Process</h2>
        <div class="row">
            <div class="col-md-12 mb-4">
            <img src="images/development_life_cycle.png" style="width: 100%"/>
            </div>
          <!-- Step 1: Requirements Gathering -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-clipboard-list fa-4x"></i>
              </div>
              <h5 class="process-title">Step 1: Requirements Gathering</h5>
              <p class="process-description">We start by understanding your business needs and defining the project scope.</p>
            </div>
          </div>
          <!-- Step 2: Design -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-pencil-alt fa-4x"></i>
              </div>
              <h5 class="process-title">Step 2: Design</h5>
              <p class="process-description">Our design team creates stunning UI/UX designs for a seamless user experience.</p>
            </div>
          </div>
          <!-- Step 3: Development -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-code fa-4x"></i>
              </div>
              <h5 class="process-title">Step 3: Development</h5>
              <p class="process-description">Our developers build robust software using the latest technologies for scalability and performance.</p>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <!-- Step 4: Testing -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-bug fa-4x"></i>
              </div>
              <h5 class="process-title">Step 4: Testing</h5>
              <p class="process-description">We perform rigorous testing to ensure the software works flawlessly and is bug-free.</p>
            </div>
          </div>
          <!-- Step 5: Deployment -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-cloud-upload-alt fa-4x"></i>
              </div>
              <h5 class="process-title">Step 5: Deployment</h5>
              <p class="process-description">We deploy your software with zero downtime and make sure it runs efficiently in production.</p>
            </div>
          </div>
          <!-- Step 6: Maintenance & Support -->
          <div class="col-md-4">
            <div class="process-card">
              <div class="process-icon">
                <i class="fas fa-life-ring fa-4x"></i>
              </div>
              <h5 class="process-title">Step 6: Maintenance & Support</h5>
              <p class="process-description">We provide continuous support and updates to ensure your software stays relevant and secure.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center container-header mb-4">Get in Touch</h2>
        <div class="row">
          <!-- Contact Info -->
          <div class="col-md-6">
            <h5>Contact Information</h5>
            <p><strong>Email:</strong> <a href="mailto:nexgenitltd@gmail.com">nexgenitltd@gmail.com</a></p>
            <p><strong>Phone (UK):</strong> +447421358489</p>
            <p><strong>Phone & WhatsApp (BD):</strong> <a href="https://wa.me/+8801731002123">+8801731002123</a></p>
            <p><strong>Office Address:</strong> Luton Market, LU1 2TA, UK</p>
            <p>Feel free to reach out via email, phone, WhatsApp, or visit our office for any inquiries. We are here to help you with all your IT needs!</p>
    
            <!-- Google Maps (Optional) -->
            <div class="embed-responsive embed-responsive-16by9 mb-4">
              <iframe
              class="embed-responsive-item"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.092107267615!2d-0.4180388231887797!3d51.87976917323895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876484f8dc34d5d%3A0x37e5cc2c98ae7fdb!2sLuton%20Market!5e0!3m2!1sen!2suk!4v1696616850911!5m2!1sen!2suk"
              width="100%"
              height="250"
              style="border:0;"
              allowfullscreen=""
              loading="lazy">
            </iframe>

            </div>
          </div>
    
          <!-- Contact Form -->
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container text-center">
        <p>&copy; 2024 NexGen IT Ltd. All Rights Reserved.</p>
      </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
