// Sélectionne l'élément message
const messageDiv = document.getElementById('message');

// Supprime le message après 3 secondes (3000 millisecondes)
setTimeout(() => {            
    messageDiv.style.display = "none"; // Cache l'élément
}, 3000);

// Supprime les paramètres de l'URL après le chargement de la page
window.history.replaceState({}, document.title, window.location.pathname); 