<?php 

include 'GetConnection.php';
$connection = getConnection();

$sql = "SELECT * FROM books ORDER BY nama ASC";
$result = $connection->query($sql);
foreach ($result as $row) {
    
}

$connection->exec($sql);



$connection = null;

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
<table class="table is-fullwidth">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>AUTHOER</th>
            <th>EDITOR</th>
            <th>STATUS</th>
            <th>QUANTIY</th>
            <th>DEPARTMOENT</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td><?=
        $row['0'];
        ?></td>
            <td><?=
        $row['nama'];
        ?></td>
            <td>
                <?=
        $row['author'];

            ?>
            </td>
            <td>
                <?=
        $row['editor'];

            ?>
            </td>
            <td>
                <?=
        $row['status'];

            ?>
            </td>
            <td>
                <?=
$row['quantity'];

            ?>
            </td>
            <td>
                <?=
$row['department'];

            ?>
            </td>
    </tfoot>

</table>
