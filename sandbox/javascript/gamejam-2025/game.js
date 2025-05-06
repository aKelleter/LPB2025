const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');

// Joueur
const player = {
    x: 50,
    y: canvas.height - 50,
    width: 50,
    height: 50,
    speed: 5
};

// Variables du jeu
let obstacles = [];
let score = 0;
let keys = {};
let gameOver = false;

// Gestion des événements clavier
document.addEventListener('keydown', (e) => {
    e.preventDefault(); // Empêche le défilement avec les flèches
    keys[e.key] = true;
    // Recommencer avec la touche 'r' ou 'R' en cas de game over
    if ((e.key.toLowerCase() === 'r') && gameOver) {
        resetGame();
    }
});

document.addEventListener('keyup', (e) => {
    keys[e.key] = false;
});

// Réinitialiser le jeu
function resetGame() {
    player.x = 50; // Repositionner le joueur
    obstacles = []; // Vider les obstacles
    score = 0; // Réinitialiser le score
    gameOver = false; // Relancer le jeu
    ctx.textAlign = 'start'; // Réinitialiser l'alignement du texte
}

// Déplacer le joueur
function updatePlayer() {
    if (!gameOver) {
        if (keys['ArrowLeft'] && player.x > 0) {
            player.x -= player.speed;
        }
        if (keys['ArrowRight'] && player.x < canvas.width - player.width) {
            player.x += player.speed;
        }
    }
}

// Dessiner le joueur
function drawPlayer() {
    ctx.fillStyle = 'blue';
    ctx.fillRect(player.x, player.y, player.width, player.height);
}

// Créer un obstacle (carré rouge)
function createObstacle() {
    if (!gameOver) {
        const obstacle = {
            x: Math.random() * (canvas.width - 50),
            y: 0,
            width: 50,
            height: 50,
            speed: 3
        };
        obstacles.push(obstacle);
    }
}

// Mettre à jour les obstacles
function updateObstacles() {
    for (let i = 0; i < obstacles.length; i++) {
        obstacles[i].y += obstacles[i].speed;
        // Game over si un obstacle sort de l'écran
        if (obstacles[i].y > canvas.height) {
            gameOver = true;
            obstacles.splice(i, 1);
            i--;
        }
    }
}

// Dessiner les obstacles
function drawObstacles() {
    ctx.fillStyle = 'red';
    for (let obstacle of obstacles) {
        ctx.fillRect(obstacle.x, obstacle.y, obstacle.width, obstacle.height);
    }
}

// Vérifier les collisions
function checkCollisions() {
    for (let i = 0; i < obstacles.length; i++) {
        if (
            player.x < obstacles[i].x + obstacles[i].width &&
            player.x + player.width > obstacles[i].x &&
            player.y < obstacles[i].y + obstacles[i].height &&
            player.y + player.height > obstacles[i].y
        ) {
            score += 10; // Augmenter le score
            obstacles.splice(i, 1); // Supprimer l'obstacle attrapé
            i--;
        }
    }
}

// Afficher le score et l'écran de game over
function drawUI() {
    // Afficher le score
    ctx.fillStyle = 'black';
    ctx.font = '20px Arial';
    ctx.textAlign = 'start'; // Aligner à gauche pour le score
    ctx.fillText('Score: ' + score, 10, 20);

    // Afficher l'écran de game over
    if (gameOver) {
        ctx.fillStyle = 'rgba(0, 0, 0, 0.7)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = 'white';
        ctx.font = '40px Arial';
        ctx.textAlign = 'center'; // Centrer pour le game over
        ctx.fillText('Game Over!', canvas.width / 2, canvas.height / 2);
        ctx.font = '20px Arial';
        ctx.fillText('Score final: ' + score, canvas.width / 2, canvas.height / 2 + 40);
        ctx.fillText('Appuyez sur R pour recommencer', canvas.width / 2, canvas.height / 2 + 80);
    }
}

// Créer un nouvel obstacle toutes les 2 secondes
setInterval(createObstacle, 2000);

// Boucle de jeu
function gameLoop() {
    if (!gameOver) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        updatePlayer();
        drawPlayer();
        updateObstacles();
        drawObstacles();
        checkCollisions();
    }
    drawUI();
    requestAnimationFrame(gameLoop);
}

// Lancer le jeu
gameLoop();