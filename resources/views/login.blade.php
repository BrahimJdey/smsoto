<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
        }
        .card-title {
            margin-bottom: 30px;
        }
        .photo {
            background-image: url("your-image.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .navbar-brand {
            margin-right: auto;
        }
        body {
            background-color: #f8f9fa;
            margin: 8px;
            border-radius: 15px;
        }
        .login-form {
            margin: 150px auto;
            width: 350px;
            background-color: #fff;
            padding: 30px;
            border-radius: 35px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Connexion</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                            <div class="text-center">
                                <a href="#">Mot de passe oublié ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
