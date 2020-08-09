<?php
$sql = "SELECT * FROM senjata";
$view = $conn->query($sql);
$data = [];
$i = 1;
$d = 0;

while ($row = $view->fetch_array()) {
    if (($i - 1) % 3 == 0) {
        $d++;
    }
    $data[$d][] = $row['nomor_senjata'];
    $i++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Barcode</title>
</head>
<style>
    .tbl {
        text-align: center;
    }
    .brcd {
        width: 4cm;
    }
</style>
<body>
    <table class="tbl" width="100%" align="center" border="1" cellpadding="5" cellspacing="2">
        <?php foreach ($data as $row): ?>
        <tr>
            <?php foreach ($row as $item): ?>
            <td>
                <img class="brcd" alt="<?=$item?>" src="../library/barcode.php?text=<?=$item?>&print=true"/>
            </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
    <script>
            window.print();
      </script>
</body>

</html>