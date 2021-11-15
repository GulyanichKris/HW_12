<html>
<body>
<a href="http://localhost:9090/"> ~Well done! Back to Form </a>


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