-- Ajouter des utilisateurs
INSERT INTO galerie_photos.utilisateurs (nom, email, mot_de_passe) 
    VALUES 
    ('Alice Dupont', 'alice@example.com', 'motdepasse1'),
    ('Bob Martin', 'bob@example.com', 'motdepasse2');

-- Ajouter des albums	
INSERT INTO galerie_photos.albums (utilisateur_id, nom, description) 
    VALUES 
    (1, 'Voyage en Italie', 'Photos de mon voyage à Rome et Venise'),
    (2, 'Nature et Paysages', 'Collection de belles photos de la nature');

-- Ajouter des photos	
INSERT INTO galerie_photos.photos (album_id, titre, description, chemin_fichier) 
    VALUES 
    (1, 'Colisée', 'Photo du Colisée à Rome', 'images/rome_colisee.jpg'),
    (1, 'Gondole à Venise', 'Balade en gondole', 'images/venise_gondole.jpg'),
    (2, 'Cascade', 'Belle cascade en forêt', 'images/cascade.jpg');
	
-- Ajouter des tags	
INSERT INTO galerie_photos.tags (nom) 
    VALUES 
    ('Voyage'), 
    ('Nature'), 
    ('Architecture');
	
-- Associer les tags aux photos
    INSERT INTO galerie_photos.photo_tags (photo_id, tag_id) 
    VALUES 
    (1, 3), -- "Colisée" est associé au tag "Architecture"
    (2, 1), -- "Gondole à Venise" est associé à "Voyage"
    (3, 2); -- "Cascade" est associé à "Nature"
