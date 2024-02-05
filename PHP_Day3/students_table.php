<html>
<head>
    <style>
        th,td{
            padding: 5px;
        }
    </style>
</head>
<body>

    <?php
    include './students.php';
    // print_r($students);
    echo '<br>';


    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($students as $student) {
            if(in_array('PHP',$student)){
                echo "<tr>";
            foreach ($student as $key => $value) {
                echo "<td  style='color: red;'>$value</td>";
            };
            echo "</tr>";
            }else{
                echo "<tr>";
            foreach ($student as $key => $value) {
                echo "<td>$value</td>";
            };
            echo "</tr>";
            }
        };
        ?>

    </table>
</body>

</html>