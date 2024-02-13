document.addEventListener('DOMContentLoaded', function() {
    // Données à afficher sur l'histogramme
    var data = {
        labels: ['Parcelle 1', 'Parcelle 2', 'Parcelle 3', 'Parcelle 4', 'Parcelle 5'],
        datasets: [{
            label: 'Poids restants/parcelle (kg)',
            data: [12, 19, 3, 5, 2],
            backgroundColor: [], // Tableau vide pour stocker les couleurs générées
            borderWidth: 1 // Épaisseur de la bordure des barres
        }]
    };

    // Générer une couleur aléatoire pour chaque barre et les ajouter au tableau backgroundColor
    data.datasets[0].data.forEach(function() {
        data.datasets[0].backgroundColor.push(randomRGBA());
    });

    // Configuration du graphique
    var config = {
        type: 'bar', // Type de graphique (histogramme)
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true // Commencer l'axe y à zéro
                }
            }
        }
    };

    // Dessiner le graphique dans le canvas
    var ctx = document.getElementById('histogramme').getContext('2d');
    new Chart(ctx, config);
});

function randomRGBA() {
    var g = Math.floor(Math.random() * 156) + 100; // Valeur de vert aléatoire entre 100 et 255
    var a = 0.8; // Transparence fixée à 0.8
    return 'rgba(0,' + g + ',0,' + a + ')'; // Retourne la couleur au format RGBA avec du vert aléatoire
}
