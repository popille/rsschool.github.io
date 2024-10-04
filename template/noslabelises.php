<div class="container py-5">
    <h1 class="text-center mb-5">Campus Labellisés RSSchool</h1>
    
    <div class="row mb-4">
        <div class="col-md-8 mx-auto text-center">
            <p class="lead">Découvrez les établissements d'enseignement supérieur qui se sont distingués par leur engagement envers la Responsabilité Sociale et Environnementale.</p>
        </div>
    </div>

    <!-- Carrousel d'avis -->
    <div class="row mb-5">
        <div class="col-md-8 mx-auto">
            <div id="avisCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="media/avis/IMG_1838.PNG" class="d-block w-100" alt="Avis 1">
                    </div>
                    <div class="carousel-item">
                        <img src="media/avis/IMG_1839.PNG" class="d-block w-100" alt="Avis 2">
                    </div>
                    <div class="carousel-item">
                        <img src="media/avis/IMG_1840.PNG" class="d-block w-100" alt="Avis 3">
                    </div>
                    <div class="carousel-item">
                        <img src="media/avis/IMG_1841.PNG" class="d-block w-100" alt="Avis 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#avisCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#avisCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mx-auto">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher une école..." id="searchInput">
                <button class="btn btn-outline-secondary" type="button" id="searchButton">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row" id="schoolsContainer">
        <!-- Les écoles seront ajoutées ici dynamiquement -->
    </div>
</div>
<style>
  .carousel {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.carousel-item {
    height: 400px; /* Augmenté la hauteur pour un meilleur affichage */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Changé en 'cover' pour remplir le cadre */
    object-position: center; /* Centre l'image dans le conteneur */
}

.carousel-control-prev, .carousel-control-next {
    background-color: rgba(0,0,0,0.5);
    width: 10%;
}

.carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: var(--primary-color);
    border-radius: 50%;
    padding: 10px;
}
</style>

    <script>
        // Données des écoles (à remplacer par vos vraies données)
        const schools = [
            
            {
                name: "IESEG School of Management",
                logo: "media/ieseg.jpeg",
                description: "Grande école de commerce internationalement reconnue pour son engagement RSE et son campus éco-responsable à Lille.",
                labelYear: 2024,
                location: "Lille"
            },
            {
                name: "JUNIA",
                logo: "media/junia.png",
                description: "École d'ingénieurs multidisciplinaire, leader dans la formation aux technologies durables et à l'ingénierie responsable.",
                labelYear: 2024,
                location: "Lille"
            },
            {
                name: "SKEMA Business School",
                logo: "media/skema.jpg",
                description: "École de commerce globale avec un fort accent sur la RSE et l'éthique des affaires, campus situé à Lille.",
                labelYear: 2024,
                location: "Lille"
            },
            {
                name: "ESTICE International Business School",
                logo: "media/estice.png",
                description: "École de commerce internationale renommée pour son approche éthique et son engagement envers le développement durable.",
                labelYear: 2024,
                location: "Lille"
            }
        ];

        

        function displaySchools(schoolsToDisplay) {
            const container = document.getElementById('schoolsContainer');
            container.innerHTML = schoolsToDisplay.map(createSchoolCard).join('');
        }

        function searchSchools() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filteredSchools = schools.filter(school => 
                school.name.toLowerCase().includes(searchTerm) || 
                school.description.toLowerCase().includes(searchTerm)
            );
            displaySchools(filteredSchools);
        }

        document.getElementById('searchButton').addEventListener('click', searchSchools);
        document.getElementById('searchInput').addEventListener('keyup', (e) => {
            if (e.key === 'Enter') {
                searchSchools();
            }
        });

        // Afficher toutes les écoles au chargement de la page
        displaySchools(schools);

        function createSchoolCard(campus) {
        return `
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="logo-container">
                            <img src="${campus.logo}" alt="${campus.name} Logo" class="campus-logo">
                        </div>
                        <h5 class="card-title">${campus.name}</h5>
                        <p class="card-text flex-grow-1">${campus.description}</p>
                        <div>
                            <p class="text-muted mb-1">Labellisé en ${campus.labelYear}</p>
                            <p class="text-info"><i class="fas fa-map-marker-alt"></i> ${campus.location}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;

        document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = new bootstrap.Carousel(document.getElementById('avisCarousel'), {
            interval: 5000 // Changez l'intervalle selon vos préférences
        });
    });
    }
    </script>