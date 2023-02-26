
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Manager Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="/assets/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership" style="background: url(/assets/media/image/image1.jpg)">


<div class="form-wrapper">

    <div id="logo">
        <img src="/assets/media/image/logo-dark.png" alt="image">
    </div>

    <h5>Sign in</h5>

    <!-- form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username or email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="/assets/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.min.js"></script>
</body>
</html>