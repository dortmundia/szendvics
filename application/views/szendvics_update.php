<!DOCTYPE html>
<html lang="en">
<head>
<link href="https/cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szendvics frissítése</title>
</head>
<body>

<nav>
    <ul>
        <li><a href=" <?php echo base_url() ?>home"> Szendvicsek lista </a></li>
        <li><a href=" <?php echo base_url() ?>add-szendvics"> Szendvicsek Hozzáadása </a></li>
        <li><a href=" <?php echo base_url() ?>szendvics-update"> Szendvicsek frissítése </a></li>
        <li><a href=" <?php echo base_url() ?>szendvics-delete"> Szendvicsek törlése </a></li> 

    </ul>
</nav>


<form action="<?php echo base_url() ?>/szendvics-update-post" method="post">
    <input type="number" placeholder="ID" name="id">
    <input type="text" placeholder="név" name="nev">
    <input type="number" placeholder="Ár" name="ar">
    <input type="number" placeholder="Elkészitési ido" name="ido">
    <input type="text" placeholder="leíras" name="leiras">
    <input type="submit" value="frissítés">
</form>
  


</body>
</html>