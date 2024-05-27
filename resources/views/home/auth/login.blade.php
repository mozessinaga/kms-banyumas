<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container center-screen">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <img src="img/logo2.jpeg" alt="Company Logo" class="mb-3" style="max-width: 150px;">
                    </div>
                    <div class="text-center"><strong><h4>LOGIN</h4></strong></div>
                    <p class="text-center">Akses Admin Karyatama Banyumas</p>
                    <form action="">
                        <div class="form-group">
                            <label for=""><b>Username</b></label>
                            <input type="text" name="name" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="*****">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success mt-4 px-5">Login <i class="fas fa-sign-in-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
