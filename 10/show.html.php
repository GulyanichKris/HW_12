<html>
<body>
<a href="save.html.php"> ~Great Job! Back to Form </a>
<br/>
<a href="http://localhost:9090/data.php?filename=test.txt"> ~ALL USERS </a>

<table border="3">
    <?php foreach ($users as $v) { ?>
    <tr>
        <td><?php echo $v[0] ?></td>
        <td><?php echo $v[1] ?></td>
        <td><?php echo $v[2] ?></td>
        <td><?php echo $v[3] ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>


<!-- http://localhost:9090/show.php?filename=test.txt -->