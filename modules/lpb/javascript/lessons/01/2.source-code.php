<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
</head>
<body>
    <p id="tog">Il est actuellement <span id="heure"></span></p> <button id="bouton">Cacher / Afficher l‘heure</button> 
    <script>
        window.addEventListener("load", horloge);

        function horloge(){
            let d = new Date();
            document.getElementById("heure").innerHTML = d.toLocaleTimeString();
            setTimeout(horloge, 1000);    
        }

        window.addEventListener("load", function(){
            document.getElementById("bouton").addEventListener("click", function(){
                let p = document.getElementById("heure");
                if(p.style.visibility == "hidden"){
                    p.style.visibility = "visible";
                }else{
                    p.style.visibility = "hidden";
                }
            });
        });
    </script>
</body>
</html>