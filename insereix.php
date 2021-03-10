<h1>Insereix Dades</h1>
<form action="insereix.php" method="POST">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" value=""><br>
    <label for="preu">Preu:</label><br>
    <input type="text" id="preu" name="preu" value="0"><br><br>
    <label for="cant">Quantitat:</label><br>
    <input type="number" id="cant" name="cant" value="1"><br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Esborrar">
</form>
<?php 
    include "db.php";
    if ($_POST) {
        $database = new DB();
        $producte = $database->insertar("compras","'".$_POST['nom']."',".$_POST['preu'].",".$_POST['cant']);
        echo "<br><strong>Producte afegit</strong>";
    }
?>
<a href=".">Tornar</a>