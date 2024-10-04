<style>
        :root {
            --primary-color: #29b773;
            --secondary-color: #0e9377;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        .form-title {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }
        .form-footer {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 2rem;
        }
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
    </style>

    <div class="container mt-5 pb-5">
        <div class="form-container">
            <h2 class="form-title">Formulaire de Contact</h2>
            <form id="contactForm" action="bareme" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom *</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom *</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="entreprise" class="form-label">Entreprise *</label>
                    <input type="text" class="form-control" id="entreprise" name="entreprise" required>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Numéro de téléphone *</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" required pattern="[0-9]{10}">
                    <small class="form-text text-muted">Format: 0123456789</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="siret" class="form-label">SIRET (optionnel)</label>
                    <input type="text" class="form-control" id="siret" name="siret" pattern="[0-9]{14}">
                    <small class="form-text text-muted">Format: 14 chiffres sans espaces</small>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche la soumission standard du formulaire

        var siret = document.getElementById('siret');
        if (siret.value !== '' && siret.value.length !== 14) {
            alert('Le numéro SIRET doit contenir 14 chiffres.');
            return;
        }

        // Fonction pour déclencher le téléchargement et la redirection
        function downloadAndRedirect() {
            // Déclencher le téléchargement
            var link = document.createElement('a');
            link.href = 'media/mag.pdf'; // Remplacez par le chemin réel de votre livre blanc
            link.download = 'mag.pdf'; // Nom du fichier à télécharger
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            // Rediriger vers la page d'accueil après un court délai
            setTimeout(function() {
                window.location.href = 'accueil'; // Remplacez par l'URL de votre page d'accueil si différente
            }, 1000); // Délai de 1 seconde avant la redirection
        }

        // Simuler l'envoi du formulaire (à remplacer par votre logique d'envoi réelle)
        setTimeout(function() {
            console.log('Formulaire envoyé');
            downloadAndRedirect();
        }, 500); // Simule un délai d'envoi de 500ms
    });
    </script>