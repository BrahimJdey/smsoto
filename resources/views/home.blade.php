<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>page home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .dropbtn {
                background-color: dark;
                color: white;
                padding: 16px;
                font-size: 20px;
                border: none;
            }
            
            .dropdown {
                font-style: italic;
                position: relative;
                display: inline-block;
            }
            
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 250px;
                font-size: 15px;
                font-style: italic;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }
            
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            
            .nav-link {
                font-style: italic;
                color: white;
                font-size: 20px;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            
            .nav-link:hover {
                color: white;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            
            .dropdown-content a:hover {
                background-color: #ddd;
            }
            
            .dropdown:hover .dropdown-content {
                display: block;
            }
            
            .dropdown:hover .dropbtn {
                background-color: rgb(77, 75, 209);
            }
            
            .navbar {
                padding-left: 0%;
            }
            .footer {
            background-color: #f8f9fa;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            }
            html,body {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative;
           }

           .content {
            min-height: 80%;
            padding-bottom: 40px; /* La hauteur du footer */
            }
            .search-form {
             margin-bottom: 20px;
            }

            .search-input {
              padding: 6px;
              width: 200px;
            }

            .search-button {
              padding: 6px 12px;
              background-color: #007bff;
              border: none;
              color: white;
            }

            .search-button:hover {
             background-color: #0069d9;
            }
            
        </style>
     
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a class="nav-link" href="{{ route('home') }}">SMS OTP</a>
         
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mon compte
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Compose message</a>
              <a class="dropdown-item" href="{{ route('contact.index') }}">Contact</a>
              <a class="dropdown-item" href="{{ route('showData') }}">Modele de Message</a>
              <a class="dropdown-item" href="{{ route('inbox') }}">boîte de réception </a>
              <a class="dropdown-item" href="{{ route('progsms') }}">programmer un message</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Send from file</a>
            </div>
          </li>
         
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                paramétre
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Compose message</a>
              <a class="dropdown-item" href="#">route SMS entrants</a>
              <a class="dropdown-item" href="#">route sortie SMS</a>
              <a class="dropdown-item"  href="#">gérer les comptes </a>
              <a class="dropdown-item" href="#">simuler des sms entrants </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">blalal</a>
            </div>
          </li>
        


         
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Caracteristiques
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">gérer le conseil</a>
              <a class="dropdown-item" href="#">gérer la commande</a>
              <a class="dropdown-item" href="#">gérer le questionnaires</a>
              <a class="dropdown-item" href="#">gérer s'abonner</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
         
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Rapports
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('featuresms') }}">My feature messages</a>
              <a class="dropdown-item" href="{{ route('smsenvoye') }}">Mes messages envoyés</a>
              <a class="dropdown-item" href="{{ route('sandbox') }}">Sandbox</a>
              <a class="dropdown-item" href="#">Liste de mes opérations de crédit</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        </div>

        

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">
                            <i class="fas fa-power-off"></i> <!-- Icône de déconnexion -->
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        
    </nav>
    <div class="container">
        <!-- Le contenu de votre page -->
        @yield('content')
        @yield('scripts')
        <!-- Votre code HTML existant -->
        
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2023 interlink.mr Tous droits réservés.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

