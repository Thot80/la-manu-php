<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/a11y-dark.min.css" integrity="sha512-Vj6gPCk8EZlqnoveEyuGyYaWZ1+jyjMPg8g4shwyyNlRQl6d3L9At02ZHQr5K6s5duZl/+YKMnM3/8pDhoUphg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Git</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Git & GitHub</h1>
                <p>Tous les exercices sont à réaliser en ligne de commande dans le terminal "Git Bash".</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 1</h2>
            </div>
            <div class="col-xl-6">
                <p>Créer un dossier <b>github</b> dans <b>lamanu</b>.
                    Via les commandes git, démarrer un dépot (repository) à la racine de ce dossier.
                </p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                cd desktop
                mkdir -p lamanu/github
                git init
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 2</h2>
            </div>
            <div class="col-xl-4">
                <p>Sur GitHUb, démarrer un projet vide <b>laManu</b>, et mettre la <b>visibilité</b>  en interne.</p>
                <p>Sur votre repo' local, rajouter une remote origin pour le lier à votre repo' GitLab.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                git remote add origin https://github.com/Thot80/lamanu.git
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 3</h2>
            </div>
            <div class="col-xl-6">
            <p>Dans le dossier <b>lamanu</b>, créer</p>
                <ul>
                    <li>un fichier <b>index.html</b>
                    </li>
                    <li>
                        un dossier <b>assets</b> contenant les sous dossiers : <ul>
                            <li>js</li>
                            <li>css</li>
                            <li>img</li>
                        </ul>
                    </li>
                    
                </ul>      
            </div>
            <div class="col-xl-6">
                <pre><code>
                cd lamanu
                touch index.html
                mkdir assets
                cd assets
                mkdir css
                mkdir js
                mkdir img
                cd ..
                git status
                git add.
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 4</h2>
            </div>
            <div class="col-xl-6">
               <p>
               Créer votre premier commit intitulé "Mise en place de la structure du site" puis vérifier la bonne prise en compte via une commande Git.
               </p> 
            </div>
            <div class="col-xl-6">
                <pre><code>
                git commit -m "Mise en place de la structure du site"
                git status
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 5</h2>
            </div>
            <div class="col-xl-6">
                <p>Editer votre fichier index.html, commiter les changements, les pusher sur le repo distant</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                git push origin master
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 6</h2>
            </div>
            <div class="col-xl-6">
                <p>Dans le dossier js, créer un fichier script.js.
                Dans le dossier css, créer un fichier style.css.
                Commiter les modifications en local à l'aide du commentaire suivant : "Ceci n'est pas un vrai commit".</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                cd js
                touch script.js
                cd ..
                cd css
                touch style.css
                cd ..
                git add .
                git commit -m "ceci n'est pas un vrais commit"
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 7</h2>
            </div>
            <div class="col-xl-6">
                <p>Changer le commentaire du dernier commit local par un vrai "commentaire explicit" et faites en sorte que le repo' GitLab soit également à jour.</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                git commit --amend -m "Création des fichiers de style"
                git push
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 8</h2>
            </div>
            <div class="col-xl-6">
                <p><b>Supprimer totalement le dossier en local</b></p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                rm -rf lamanu
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Exercice 9</h2>
            </div>
            <div class="col-xl-6">
                <p>Faire en sorte de le récupérer à l'identique</p>
            </div>
            <div class="col-xl-6">
                <pre><code>
                git clone https://github.com/Thot80/lamanu.git
                </code></pre>
            </div>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script> 
<script>hljs.highlightAll();</script>
</body>
</html>