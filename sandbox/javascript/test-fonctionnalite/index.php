<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="..\..\..\assets\img\favicon.ico"> 
    <title>LPB-LDB : Sandbox Javascript</title>
    <link href="..\..\..\assets\css\styles.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container-fluid">
        <div> 
        <h1>LPB-LDB : Sandbox Javascript</h1>
        <p>
            <strong>Objectif :</strong> Tester des fonctionnalités de Javascript.
        </p>
        <blockquote class="red">
            <em>Ouvrez la console de votre navigateur pour visualiser les résultats des scripts.</em>
        </blockquote>
        <pre>
            console.log('EVALUATION DYNAMIQUE');                
            let code = "let x = 10; x * 2;";
            console.log(eval(code)); // eval() évalue la chaîne comme une expression        
        </pre>
        <script>
            console.log('EVALUATION DYNAMIQUE');        
            let code = "let x = 10; x * 2;";
            console.log(eval(code)); // eval() évalue la chaîne comme une expression

            console.log("--------------------");        
        </script>    
        <hr>

        <pre>
            console.log('PORTÉE ET HOISTING avec var');        
            console.log(x); // Affiche undefined
            var x = 10;

            console.log('PORTÉE ET HOISTING avec let');
            console.log(y); // Affiche une erreur
            let y = 10;      
        </pre>
        <script>
            console.log('PORTÉE ET HOISTING avec var');        
            console.log(x); // Affiche undefined
            var x = 10;

            console.log('PORTÉE ET HOISTING avec let');
            console.log(y); // Affiche une erreur
            let y = 10;

            console.log("--------------------");        
        </script>    
        <hr>

        <pre>
            console.log('LE TYPE SYMBOL');
            let sym = Symbol('id');
            console.log(sym);
        </pre>
        <script>
            console.log('LE TYPE SYMBOL');
            let sym = Symbol('id');
            console.log(sym);

            console.log("--------------------");        
        </script>
        <hr>

        <pre>
            console.log('Définir des comportements personnalisés dans des objets :
            Certains Symbol sont prédéfinis en JavaScript pour personnaliser le comportement des objets. Exemples courants :        
            Symbol.iterator : Permet de rendre un objet itérable.');

            let iterableObj = {
                items: [1, 2, 3],
                [Symbol.iterator]() {
                    let i = 0;
                    return {
                        next: () => ({
                            value: this.items[i++],
                            done: i > this.items.length
                        })
                    };
                }
            };
        
            for (let item of iterableObj) {
                console.log(item); // 1, 2, 3
            }
        </pre>
        <script>
            console.log('Symbol.iterator : Permet de rendre un objet itérable.');
            
            let iterableObj = {
            items: [1, 2, 3],
            [Symbol.iterator]() {
                let i = 0;
                return {
                    next: () => ({
                        value: this.items[i++],
                        done: i > this.items.length
                    })
                };
            }
        };

        for (let item of iterableObj) {
            console.log(item); // 1, 2, 3
        }

        console.log("--------------------");        
        </script>
        <hr>

        <pre>
            console.log('Immuabilité : Une fois créée, une chaîne ne peut pas être modifiée.');
            let str = "Bonjour";
            console.log(str); // Affiche "Bonjour"
            str[0] = "b";  // Tentative de changer le premier caractère
            console.log(str); // Affiche "Bonjour"
        </pre>
        <script>
            console.log('Immuabilité : Une fois créée, une chaîne ne peut pas être modifiée.');        
            let str = "Bonjour";
            console.log(str); // Affiche "Bonjour"
            str[0] = "b"; // Tentative de changer le premier caractère
            console.log(str); // Affiche "Bonjour"

            console.log("--------------------");
        </script>
        <hr>

        <pre>
            console.log('Symbol ne peut pas être convertis automatiquement en une chaîne'); 
            let sym2 = Symbol("example");
            console.log("Symbole : " + sym); // TypeError
            console.log(String(sym));       //
        </pre>
        <script>
            console.log('Symbol ne peut pas être convertis automatiquement en une chaîne'); 
            let sym2 = Symbol("example de symbole");
            //console.log("Symbole : " + sym2); // TypeError
            console.log(String(sym2));       //

            console.log("--------------------");
        </script>
        <hr>
    
        <pre>
        
        </pre>
        <script>
        
        </script>
        <hr>
        </div>
        </div>
    </main>
</body>
</html>