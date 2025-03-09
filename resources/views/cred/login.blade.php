<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100 bg-light">

  <div class="login-card">
      <div class="login-card-body">
          <h4 class="login-card-title">Login</h4>

          <!-- Login Form -->
          <form action="{{ route('cred.postLogin') }}" method="POST" class="login-form">
              @csrf
              <div class="form-group">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control login-input" id="username" name="username" required>
              </div>
              <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control login-input" id="password" name="password" required>
              </div>
              <button type="submit" class="login-btn">Login</button>
          </form>

          <!-- Error Messages -->
          @if(session('message'))
          <div class="alert alert-danger mt-3 animate-alert" role="alert">
              Login gagal. Periksa kembali username dan password Anda.
          </div>
          @endif
      </div>
  </div>

  <style>
  /* Animasi & Efek Hover */
  @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
  }

  @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      50% { transform: translateX(5px); }
      75% { transform: translateX(-5px); }
  }

  /* Card Styling */
  .login-card {
      max-width: 400px;
      width: 100%;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
      padding: 30px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
  }

  .login-card-body {
      width: 100%;
  }

  .login-card-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 20px;
  }

  /* Input Fields */
  .login-input {
      border-radius: 8px;
      padding: 12px;
      font-size: 1rem;
      transition: all 0.3s ease;
  }

  .login-input:focus {
      border-color: #007bff;
      box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.3);
  }

  /* Login Button */
  .login-btn {
      width: 100%;
      padding: 12px;
      font-size: 1rem;
      border-radius: 8px;
      background: #007bff;
      color: white;
      border: none;
      transition: all 0.3s ease;
      cursor: pointer;
  }

  .login-btn:hover {
      background: #0056b3;
      transform: scale(1.05);
  }

  /* Error Message */
  .animate-alert {
      animation: shake 0.3s ease-in-out;
      border-radius: 8px;
  }
  </style>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
