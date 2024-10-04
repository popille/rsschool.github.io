<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Label RSSchool - Ensemble pour un avenir durable</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <style>
   /* Couleurs et styles de base */
:root {
    --primary-color: #29b773;
    --secondary-color: #0e9377;
    --light-bg: #f0f9f6;
    --border-color: #c5e8d8;
    --text-on-primary: #ffffff;
    --text-on-light: #333333;
}

body {
    padding-bottom: 2rem;
    color: var(--text-on-light);
}

/* Classes utilitaires */
.primary_bg {
    background-color: var(--primary-color);
    color: var(--text-on-primary);
}

.primary_txt, .text-primary-dark {
    color: var(--primary-color);
}

/* Sections et cartes */
/* Couleurs et styles de base */
:root {
    --primary-color: #29b773;
    --secondary-color: #0e9377;
    --light-bg: #f0f9f6;
    --border-color: #c5e8d8;
    --text-on-primary: #ffffff;
    --text-on-light: #333333;
}

/* ... autres styles inchangés ... */

/* Hero Section avec dégradé */
.hero-section {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: var(--text-on-primary);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

/* Optionnel : Ajout d'un effet de superposition pour améliorer la lisibilité du texte si nécessaire */
.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.1); /* Ajustez l'opacité selon vos besoins */
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

/* Assurez-vous que le texte dans la hero section est bien lisible */
.hero-section h1,
.hero-section p,
.hero-section .btn {
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}



.criteria-section {
    margin-bottom: 50px;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.criteria-section:nth-child(even) {
    background-color: var(--light-bg);
}

.section-card {
    margin-bottom: 2rem;
    border: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.section-header {
    background-color: var(--light-bg);
    border-bottom: 2px solid var(--border-color);
    padding: 1rem;
}

.criteria-card {
    margin-bottom: 1rem;
    border: 1px solid var(--border-color);
}

/* Icônes et images */
.feature-icon {
    background-color: var(--primary-color);
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.feature-icon svg {
    width: 32px;
    height: 32px;
    color: var(--text-on-primary);
}

.criteria-img {
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.logo-container {
    width: 150px;
    height: 150px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.campus-logo {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

/* Boutons et interactions */
.btn-rating {
    width: 40px;
    height: 40px;
    margin: 0 5px;
    border-radius: 50%;
    font-weight: bold;
}

.btn-rating.active {
    background-color: var(--primary-color);
    color: var(--text-on-primary);
}

.btn-na.active {
    background-color: var(--secondary-color);
    color: var(--text-on-primary);
}

.card {
    transition: transform 0.3s ease-in-out;
    height: 100%;
}

.card:hover {
    transform: translateY(-5px);
}

/* Structure et mise en page */
.axe-section {
    display: none;
}

.axe-section.active {
    display: block;
}

.structure-visualization {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.structure-item {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    width: 200px;
    text-align: center;
}

.main-item {
    background-color: var(--primary-color);
    color: var(--text-on-primary);
}

.sub-item {
    background-color: var(--light-bg);
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
}

.structure-branches {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px;
}

/* Typographie */
.criteria-section h3, .criteria-section h4 {
    color: var(--secondary-color);
    margin-bottom: 20px;
}

.criteria-section p, .card-text {
    line-height: 1.6;
}

.card-text {
    flex-grow: 1;
}

.structure-item i, .list-group-item i {
    margin-right: 10px;
    font-size: 1.2em;
}

/* Composants spécifiques */
#structure-generale .card {
    border-radius: 15px;
}

.text-center.py-5 {
    background-color: var(--light-bg);
    border-radius: 8px;
    padding: 40px !important;
    margin-bottom: 30px;
}

/* Listes */
.criteria-section ul {
    padding-left: 20px;
}

.criteria-section li {
    margin-bottom: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-rating {
        width: 35px;
        height: 35px;
        margin: 0 2px;
        font-size: 14px;
    }

    .criteria-section {
        padding: 20px;
    }

    .criteria-img {
        margin-top: 20px;
    }
}
    </style>
</head>
<body>
<?php require_once("template/inc/menu.php");?>

<body>
    
