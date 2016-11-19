<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../../resources/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/assets/font-awesome/css/font-awesome.min.css">
    <script src="../../../resources/assets/js/jquery-1.11.1.min.js"></script>
    <script src="../../../resources/assets/bootstrap/js/bootstrap.min.js"></script>
    <style>
        table,th,td{border-collapse: collapse;padding:5px;text-align:center;margin:0 auto;}
        .main{margin:50px 0;text-align: center;}
    </style>
</head>
<body>

<div class="container">
    <div class="main">
        <?php

        include_once("../../../vendor/autoload.php");
        use App\Birthday\Birthday;
        use App\Message\Message;

        $serial = 1;
        $birthday = new Birthday();
        $allData = $birthday->index("obj");

        echo "<table border='2px' style='border-collapse:collapse;' >";
        echo "<thead><th>Serial</th><th>ID</th><th>Name</th><th>Birthday</th><th>Action</th></thead>";
        echo "<tbody>";
        foreach($allData as $oneData){
            echo "<tr >";
            echo "<td > $serial </td>";
            echo "<td> $oneData->id </td>";
            echo "<td> $oneData->name </td>";
            echo "<td> $oneData->birthday </td>";
            echo "<td>
            <a href='view.php?id=$oneData->id'><button class='btn btn-info'>View</button></a>
            <a href='medit.php?id=$oneData->id'><button class='btn btn-primary'>Edit</button></a>
            <a href='trash.php?id=$oneData->id'><button class='btn btn-primary'>Trash</button></a>
            <a href='delete.php?id=$oneData->id'><button class='btn btn-danger'>Delete</button></a>
</td>";
            echo "</tr>";
            $serial++;
        }
        echo "</body>";
        echo "</table>";

        ?>
        <a href="create.php">Add a new Birthday</a>
    </div>
</div>
</body>

</html>