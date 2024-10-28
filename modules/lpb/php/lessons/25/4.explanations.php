<?php
    $explanations = [
        "Les sessions en PHP permettent de stocker des informations sur le serveur pour une durée déterminée. Elles sont très utiles pour stocker des informations utilisateur, comme des variables de connexion, des préférences, etc.",
        "Pour démarrer une session, on utilise la fonction <code>session_start()</code>. Cette fonction doit être appelée avant tout code HTML ou texte.",
        "On créera des variables de session en utilisant la superglobale <code>\$_SESSION</code>. Par exemple, pour créer une variable de session <code>nom</code> avec la valeur <b>Doe</b>, on écrira <b class=\"red\">\$_SESSION['nom'] = 'Doe';</b>.",
        "On supprimera une variable de session en utilisant la fonction <code>unset()</code>. Par exemple, pour supprimer la variable de session <code>job</code>, on écrira <b class=\"red\">unset(\$_SESSION['job']);</b>.",
        "Pour récupérer une variable de session, on utilisera la superglobale <code>\$_SESSION</code>. Par exemple, pour récupérer la variable de session <code>nom</code>, on écrira <b class=\"red\">echo 'Nom : ' . \$_SESSION['nom'];</b>.",
        "Pour détruire une session, on utilisera la fonction <code>session_destroy()</code>. Cette fonction détruira toutes les variables de session, hormis les varaibles globales."
    ];