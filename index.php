<!Doctype html>
<head>
    <meta charset="utf-8">
    <title>Acceuil</title>
    <link rel="stylesheet" href="css/style-acceuil.css">
</head>
<body>
<h1>Je Chosis Mes celebrites</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <input type="file" name="image">
    <input type="submit" value="ajouter">
</form>
<div class="btn-affiche">
    <a href="lib/celebrity.php">Voir Les Celebrites</a>
</div>

</body>