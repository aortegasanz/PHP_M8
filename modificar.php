<h1>Modifica Dades</h1>
<?php 
    include "db.php";
    if ($_GET) {
        $database = new DB();
        $productes = $database->buscar("compras", "id=".$_GET['id']);
        foreach ($productes as $producte) {
?>
            <form action="modificar.php" method="POST">
                <label for="id">Id:</label><br>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $_GET['id']; ?>" readonly><br>
                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" value="<?php echo $producte['nom'] ?>"><br>
                <label for="preu">Preu:</label><br>
                <input type="text" id="preu" name="preu" value="<?php echo $producte['preu'] ?>"><br><br>
                <label for="cant">Quantitat:</label><br>
                <input type="number" id="cant" name="cant" value="<?php echo $producte['cant'] ?>"><br><br>
                <input type="submit" value="Guardar">
            </form>
<?php
        }
        $database->close();
    }
    if ($_POST) {
        $database = new DB();       
        $producte = $database->actualizar("compras","nom='".$_POST['nom']."', preu=".$_POST['preu'].",cant=".$_POST['cant'],"id=".$_POST['id']);
        echo "<br><strong>Producte actualitzat</strong>";
        $database->close();
    }
?>
<br><a href=".">Tornar</a>