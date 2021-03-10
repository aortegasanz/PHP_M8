<h1>Esborra Dades</h1>
<?php 
    include "db.php";
    if ($_GET) {
        $database = new DB();
        $productes = $database->buscar("compras", "id=".$_GET['id']);
        foreach ($productes as $producte) {
?>
            <form action="esborrar.php" method="POST">            
                <label for="id">Id:</label><br>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>" readonly><br>
                Nom: <?php echo $producte['nom'] ?><br>
                Preu: <?php echo $producte['preu'] ?><br>
                Quantitat: <?php echo $producte['cant'] ?><br>
                <input type="submit" value="Esborrar">
            </form>
<?php
        }
        $database->close();
    }
    if ($_POST) {
        $database = new DB();       
        $producte = $database->borrar("compras","id=".$_POST['id']);
        echo "<br><strong>Producte esborrat</strong>";
        $database->close();
    }
?>
<br><a href=".">Tornar</a>