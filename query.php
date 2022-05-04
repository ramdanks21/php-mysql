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

<form action="query.php" method="GET">

<fieldset>

<legend>Contact</legend>

<p>

<label>Name:</label>

<input type="text" name="username" placeholder="your name..." />

 
<label>Email:</label>

<input type="email" name="email" placeholder="your email..." />

</p>

<p>

<input type="submit" name="submit" value="Send" />

</p>

</fieldset>

</form>

<?php 

if (isset($_GET['submit'])) {
    ?>
    <marquee behavior="" direction="">
        <h1 class="has-text-danger is-size-3">WELCOM <?=
            $_GET['username'];

        ?></h1>
    </marquee>

   
   <?php 
}

   ?>

   fm