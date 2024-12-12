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
            <div class="Auteures"></div>
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
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>
                <div class="cartes"></div>


            </div>
        </div>
        <!-- Formulaires -->
        <form class="form" action="add.php" method="POST">
            <label class="f-f" for="Name">Nom-Package:</label>
            <input class="input" type="text" name="namePackage" style="width: 250px; height:30px">

            <label class="f-f" for="Selection">Auteurs:</label>
            <select class="input" id="Selection" type="select" name="nameautor" style="width: 250px; height:30px">
            </select>
            <label class="f-f" for="Version">Version:</label>
            <input class="input" type="text" name="versions" style="width: 250px; height:20px">

            <label class="f-f" for="Description">Description:</label>
            <input class="input" type="text" name="description" style="width: 250px; height:90px">


            <button class="btn-submit" name="submit" type="submit">Submit</button>
        </form>

        <script src="assets/js/script.js"></script>
</body>

</html>