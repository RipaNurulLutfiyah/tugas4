<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            background-color: blue;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>

<body>
    <div style="display: flex;justify-content: space-around; align-items: center;">
        <div class="col-5">
            <h2>Welcome to PinLap Kampus STTNF</h2>
            <article>STT-NF menyediakan fasilitas peminjaman laptop yang digunakan khusus untuk mahasiswa, dosen, dan staff agar dapat mempermudah untuk kegiatan akademis.</article>
        </div>
        <div class="col-5">
            <div style="margin: 135px 0px 0px 50px;">
                            <div class="login-container">
                                <h2>Login</h2>
                                <form class="login-form" id="loginForm" action="your_login_endpoint" method="post">
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" id="username" name="username" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" id="password" name="password" required>
                                    </div>
                            
                                    <div class="form-group">
                                        <button type="button" onclick="attemptLogin()">Login</button>
                                    </div>
                                    <p class="mb-1">
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </p>
                                </form>
                            </div>
                        
                        <script>
                            function attemptLogin() {
                                var form = document.getElementById('loginForm');
                                var username = form.elements.username.value;
                                var password = form.elements.password.value;
                        
                                // Simulate a successful login (replace this with actual AJAX/Fetch request)
                                if (username === 'ripa' && password === '170605') {
                                    location.href = ('index.php');
                                    // You can redirect to another page or perform other actions here
                                } else {
                                    alert('Login failed. Please check your credentials.');
                                }
                            }
                        </script>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    
</body>

</html>