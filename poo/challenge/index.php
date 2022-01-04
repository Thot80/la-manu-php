<?php
require 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center">Choisissez votre héro</h1>
        </div>
    </div>
    <form action="gameRun.php" method="POST" class="mt-5">

        <label for="hero" class="mb-1">Choisissez votre héro</label>
        <select class="form-select" aria-label="Choose your Hero" required name="hero" id="hero">
            <option value="mage">Mage</option>
            <option value="murderer">Assassin</option>
            <option value="paladin">Paladin</option>
            <option value="webdev">Web Developper</option>
        </select>

        <div class="form-check mt-5">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">
                Male
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" checked value="female">
            <label class="form-check-label" for="female">
                female
            </label>
        </div>
        <div class="col-12 mt-3">
            <button class="btn btn-primary" type="submit" value="submit">Play</button>
        </div>
    </form>
    <a href="card.php">Card previsualisation
    </a>
</main>

<?php
require 'footer.php';
?>
    
