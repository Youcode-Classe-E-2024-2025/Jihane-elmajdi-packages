<?php include('connexion.php') ?>
<?php include('header.php') ?>
<div>
    <h1 class="title">Gestion de package Java script</h1>
</div>
<!-- les tableaux -->
<div style="display: flex; justify-content: center; gap: 50px">
    <!-- Boutton1 -->
    <div>
        <div class="A">
            <h2>Auteures</h2>
            <button class="btn-plus2">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <div class="Auteures"></div>
    </div>

    <!-- Boutton 2 -->
    <div>
        <div class="V">
            <h2>Versions</h2>
            <button class="btn-plus2">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <div class="Versions"></div>
    </div>
    <!-- Boutton 3 -->
    <div>
        <div class="P">
            <h2>Packages</h2>
            <button class="btn-plus2">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <div class="Packages"></div>
    </div>
    <!-- Formulaire d'ajout -->
    <form action="connexion.php" method="POST">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="creation_date">Date de création</label>
        <input type="date" id="creation_date" name="creation_date" required><br><br>

        <button type="submit">Submit</button>
    </form>

    </body>

    </html>