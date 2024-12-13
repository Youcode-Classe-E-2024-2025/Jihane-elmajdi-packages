<?php include('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>gestion_packages</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div>
        <h1 class="title">Gestion de package Java script</h1>
    </div>
    <!-- les tableaux -->
    <div style="display: flex; justify-content: center; gap: 50px">
        <!-- Boutton1 -->
        <div style="justify-items: center;">
            <div class="A">
                <h2>Auteures</h2>
                <button class="btn-plus1">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
            <div class="Auteures">
                <?php
                $affiche = "SELECT * FROM auteurs";
                $result = mysqli_query($connection, $affiche);
                if (!$result) {
                    die("Erreur" . mysqli_error());
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="cartes">
                            <p>nom: <?php echo $row["nom"] ?></p>
                            <p>Email: <?php echo $row["email"] ?></p>
                            <a href="delete.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-trash"></i></a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- Boutton 2 -->
        <div style="justify-items: center;">
            <div class="P">
                <h2>Packages</h2>
                <button class="btn-plus2">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
            <div class="Packages">
                <?php
                $affiche = "SELECT packages.id, packages.nom, packages.version, packages.déscription, auteurs.nom as auteur_nom FROM packages JOIN auteurs ON packages.auteur_id = auteurs.id";
                $result = mysqli_query($connection, $affiche);
                if (!$result) {
                    die("Erreur" . mysqli_error());
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="cartes">
                            <div class="ND">
                                <p>Nom-Package: <?php echo $row["nom"] ?></p>
                                <a href="deletepackages.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-trash"></i></a>
                            </div>

                            <p>Auteurs: <?php echo $row["auteur_nom"] ?></p>
                            <p>Version: <?php echo $row["version"] ?></p>
                            <p>Description: <?php echo $row["déscription"] ?></p>

                        </div>
                <?php
                    }
                }
                ?>


            </div>
        </div>
        <!-- Formulaires -->
        <form class="form" action="addpackages.php" method="POST">
            <label class="f-f" for="Name">Nom-Package:</label>
            <input class="input" type="text" name="namePackage">

            <label class="f-f" for="Selection">Auteurs:</label>
            <select class="input" id="Selection" type="select" name="nameautor" style="width: 250px; height:30px">
                <?php
                $query = "SELECT * FROM `auteurs`";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Erreur" . mysqli_error($connection));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <option class="f-f" value="<?php echo $row["id"] ?>"><?php echo $row["nom"] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label class="f-f" for="Version">Version:</label>
            <input class="input" type="text" name="versions" style="width: 250px; height:20px">

            <label class="f-f" for="Description">Description:</label>
            <textarea class="input" type="text" name="description" style="width: 250px; height:90px"></textarea>


            <button class="btn-submit" name="submit" type="submit">Submit</button>
        </form>
        <!-- Formulaires auteures -->
        <form class="form-auteur" action="addauteurs.php" method="POST">
            <label class="f-f" for="Name">Nom-Auteur:</label>
            <input class="input" type="text" name="nameAuthor">

            <label class="f-f" for="email">Email:</label>

            <input class="input" type="email" name="email" style="width: 250px; height:20px">

            <button class="btn-submit" name="submit" type="submit">Submit</button>
        </form>


    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>