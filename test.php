<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion SQL</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            max-width: 400px;
            width: 100%;
            border-radius: 12px;
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 1s ease-in-out forwards;
        }
        .btn {
            width: 48%;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Formulaire d'Enregistrement</h2>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre Email" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-outline-secondary">Annuler</button>
            </div>
        </div>
    </form>
    
</body>
</html>
