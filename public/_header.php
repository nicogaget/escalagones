<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Trouvez les meilleurs sites d'escalade sur la région lyonnaise">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">

    <title><?= $pageTitle ?></title>
</head>

<body>
    <header>
       <nav class="navbar">

            <div class="navbar_mobile">
            <ul class="nav nav-pills">
                <li class="nav-item"<?php if ($current_nav == 'index') {echo ' id="current"';}?>>
                    <a class="nav-link " href="index.php">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <?php if ($current_nav == 'interieur') {echo ' id="current"';}?>href="/interieur.php">Grimper en intérieur</a>
                        <a class="dropdown-item" href="/exterieur.php">Grimper en extérieur</a>
                        <a class="dropdown-item" href="/grimperEnsemble.php">Grimper ensemble</a>
                        <a class="dropdown-item" href="/materiel.php">Matériel</a>


                    </div>
                </li>
                <li>
                    <div class="nav-item contact"<?php if ($current_nav == 'contact') {echo ' id="current"';}?>>
                        <a class="nav-link" href="contact.php">Contact</a>
                    </div>
                </li>
                <li>
                    <div class="nav-item contact"<?php if ($current_nav == 'Admin') {echo ' id="current"';}?>>
                        <a class="nav-link" href="admin/admin.php">Admin</a>
                    </div>
                </li>

            </ul>
            </div>
            <div class ="navbar_desktop">
            <ul class="nav">
                <li<?php if ($current_nav == 'index') {echo ' id="current"';}?> ><a class="nav-link" href="/index.php">Accueil</a></li>
                <li<?php if ($current_nav == 'interieur') {echo ' id="current"';}?>><a class="nav-link" href="/interieur.php">Intérieur</a></li>
                <li<?php if ($current_nav == 'exterieur') {echo ' id="current"';}?>><a class="nav-link" href="/exterieur.php">Extérieur</a></li>
                <li<?php if ($current_nav == 'together') {echo ' id="current"';}?>><a class="nav-link" href="/grimperEnsemble.php">Ensemble</a></li>
                <li<?php if ($current_nav == 'equipement') {echo ' id="current"';}?>><a class="nav-link" href="/materiel.php">Matériel</a></li>
                <li<?php if ($current_nav == 'contact') {echo ' id="current"';}?>><a class="nav-link" href="/contact.php">Contact</a></li>
                <li<?php if ($current_nav == 'admin') {echo ' id="current"';}?>><a class="nav-link" href="admin/admin.php">Admin</a></li>

            </ul>
           </div>

            </ul>
        </nav>



    </header>

