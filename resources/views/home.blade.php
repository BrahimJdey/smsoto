<!DOCTYPE html>
<html>
<head>
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
    <head>
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
            padding: 20px;
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
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        
        <a class="nav-link" href="{{ route('home') }}">Mon application</a>
         
        
        
        <div class="dropdown">
            <div class="dropbtn">Mon compte</div>
            <div class="dropdown-content">
                <a href="#">Compose message</a>
                <a href="{{ route('showData') }}">Modele de Message</a>
                <a href="{{ route('inbox') }}">boîte de réception </a>
                <a href="{{ route('progsms') }}">programmer un message</a>
                <a href="#">Send from file</a>
            </div>
        </div>
        <div class="dropdown">
            <div class="dropbtn">paramétre</div>
            <div class="dropdown-content">
                <a href="#">route SMS entrants</a>
                <a href="#">route sortie SMS</a>
                <a href="#">gérer les comptes</a>
                <a href="#">simuler des sms entrants </a>
            </div>
        </div>

        <div class="dropdown">
            <div class="dropbtn">Caracteristiques</div>
            <div class="dropdown-content">
                <a href="#">gérer le conseil</a>
                <a href="#">gérer la commande</a>
                <a href="#">gérer le questionnaires</a>
                <a href="#">gérer s'abonner</a>
            </div>
        </div>

        <div class="dropdown">
            <div class="dropbtn">Rapports</div>
            <div class="dropdown-content">
                <a href="{{ route('featuresms') }}">My feature messages</a>
                <a href="{{ route('smsenvoye') }}">Mes messages envoyés</a>
                <a href="{{ route('sandbox') }}">Sandbox</a>
                <a href="#">Liste de mes opérations de crédit</a>
               
            </div>
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
    <div class="content">
        <!-- Le contenu de votre page -->
        @yield('content')
        @yield('scripts')
        <!-- Votre code HTML existant -->
        
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2023 Wimex . Tous droits réservés.</p>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

