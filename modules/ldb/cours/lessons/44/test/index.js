
const mysql = require('mysql2/promise');

    // Configuration de la connexion
    async function main() {
        try {
            // Créer une connexion
            const connection = await mysql.createConnection({
                host: 'localhost',
                user: 'node_user',
                password: 'IfapmeLDB2025!',
                database: 'college'
            });
    
            console.log('Connexion à MariaDB réussie !');
    
            // Exécuter une requête SELECT
            const [rows] = await connection.execute('SELECT * FROM eleves');
            console.log('Liste des élèves :');
            console.log(rows);
    
            // Insérer une nouvelle chanson
            const nouvelEleve = ['Mario'];
            await connection.execute(
                'INSERT INTO eleves (Nom) VALUES (?)',
                nouvelEleve
            );
            console.log('Nouvel élève ajouté !');
    
            // Fermer la connexion
            await connection.end();
        } catch (error) {
            console.error('Erreur :', error.message);
        }
    }
    
    main();



    /*

    const mariadb = require('mariadb');

    async function main() {
        let conn;
        try {
            conn = await mariadb.createConnection({
                host: 'localhost',
                user: 'node_user',
                password: 'IfapmeLDB2025!',
                database: 'college'
            });
            console.log('Connexion à MariaDB réussie !');
    
            const rows = await conn.query('SELECT * FROM eleves');
            console.log('Liste des élèves :', rows);
    
            const nouvelEleve = ['Peach'];
            await conn.query(
                'INSERT INTO eleves (Nom) VALUES (?)',
                nouvelEleve
            );
            console.log('Nouvel élève ajoutée !');
        } catch (err) {
            console.error('Erreur :', err.message);
        } finally {
            if (conn) conn.end();
        }
    }
    
    main();
*/
