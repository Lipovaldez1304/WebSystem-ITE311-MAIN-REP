<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'CI4 Site' ?></title>
<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
<style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .top-header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
        }
        
        .site-title {
            font-size: 1.5rem;
            font-weight: 500;
            margin: 0;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            margin: 0;
            list-style: none;
            padding: 0;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }
        
        .nav-links a:hover {
            color: #bdc3c7;
        }
        
        .main-content {
            padding: 3rem 0;
            min-height: 70vh;
        }
        
        .page-title {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }
        
        .content-text {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
   <!-- Top Header -->
    <header class="top-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="site-title">CI4 Site</h1>
                <nav>
                    <ul class="nav-links">
    <li><a href="<?= base_url('register') ?>">Register</a></li>
    <li><a href="<?= base_url('login') ?>">Login</a></li>
</ul>

                </nav>
            </div>
        </div>
    </header>

  <?php $errors = session('errors') ?? []; ?>
  <?php if (session('success')): ?>
    <p style="color:green;"><?= esc(session('success')) ?></p>
  <?php endif; ?>

 <?php if (! empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
  <?php endif; ?>

   <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="width: 450px;">
        <h3 class="text-center mb-4">Register</h3>
  <?= form_open('/register') ?>  <!-- auto-adds CSRF when filter is on -->
<div class="mb-3">
   <label for="floatingInput">Username:</label>
  <input name="name" type="text"  value="<?= old('name') ?>" required class="form-control" id="name">
</div>
<div class="mb-3">
   <label for="floatingInput">Email:</label>
  <input name="email" type="email"  value="<?= old('email') ?>" required class="form-control" id="email">
</div>
<div class="mb-3">
   <label for="floatingInput">Password:</label>
  <input name="password" type="password"  value="<?= old('password') ?>" required class="form-control" id="password">
</div>
<div class="mb-3">
  <label for="floatingInput">Confirm Password:</label>
  <input name="pass_confirm" type="password"  value="<?= old('pass_confirm') ?>" required class="form-control" id="password_confirm">
</div>
    <button type="submit" class="btn btn-success w-100">Register</button>
  <?= form_close() ?>
  </div>
</div>

  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
