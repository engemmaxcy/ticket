<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .feature-card {
      transition: 0.3s;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    footer {
      background: #222;
      color: #aaa;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">TicketSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" aria-controls="navbarNav" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="btn btn-primary ms-2" href="landing.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="display-4">Efficient Ticket Management System</h1>
      <p class="lead">Track, manage, and resolve support tickets seamlessly with our modern solution.</p>
      <a href="#features" class="btn btn-light btn-lg mt-3">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Key Features</h2>
        <p class="text-muted">Simplify your support with powerful tools.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card feature-card h-100 text-center p-4">
            <div class="mb-3">
              <i class="bi bi-speedometer2 display-4 text-primary"></i>
            </div>
            <h5>Real-Time Tracking</h5>
            <p>Monitor ticket status and updates instantly with real-time dashboards.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card h-100 text-center p-4">
            <div class="mb-3">
              <i class="bi bi-people display-4 text-primary"></i>
            </div>
            <h5>Team Collaboration</h5>
            <p>Work together efficiently to resolve customer issues faster.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card h-100 text-center p-4">
            <div class="mb-3">
              <i class="bi bi-graph-up display-4 text-primary"></i>
            </div>
            <h5>Analytics & Reports</h5>
            <p>Get insights into performance and trends with detailed reports.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section id="pricing" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Pricing Plans</h2>
        <p class="text-muted">Choose a plan that fits your needs.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card text-center p-4">
            <h5>Basic</h5>
            <h2>$10<span class="fs-6">/mo</span></h2>
            <p>For small teams</p>
            <a href="#" class="btn btn-outline-primary">Choose Plan</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center p-4 border-primary">
            <h5 class="text-primary">Pro</h5>
            <h2>$25<span class="fs-6">/mo</span></h2>
            <p>For growing businesses</p>
            <a href="#" class="btn btn-primary">Choose Plan</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center p-4">
            <h5>Enterprise</h5>
            <h2>$50<span class="fs-6">/mo</span></h2>
            <p>For large organizations</p>
            <a href="#" class="btn btn-outline-primary">Choose Plan</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <div class="text-center mb-4">
        <h2>Contact Us</h2>
        <p class="text-muted">We’d love to hear from you.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 TicketSystem. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>
