<!DOCTYPE html>
<html lang="en">
<head>
<link href="https/cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szendvics Lista</title>
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


    <table class="table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Ár</th>
                <th>Elkészítési idő</th>
                <th>Leírás, összetevők</th> 
            </tr>
        </thead>
        <tbody>
         <?php   foreach ($szendivcsek as $szendivcs): ?>
            <td><?php  echo $szendivcs['id']?></td>
            <td><?php  echo $szendivcs['nev']?></td>
            <td><?php  echo $szendivcs['ar']?></td>
            <td><?php  echo $szendivcs['ido']?></td>
            <td><?php  echo $szendivcs['leiras']?></td>
            <?php endforeach; ?>
        </tbody>
    </table>    





</body>
</html>