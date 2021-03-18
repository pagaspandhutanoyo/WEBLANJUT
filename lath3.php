<html>
<head></head>
<body>
    <?php
    $UTS=$_GET["UTS"];
    $UAS=$_GET["UAS"];
    $na=(0.6*$UAS)+(0.4*$UTS);
    echo "uts : $UTS <br />";
    echo "uas : $UAS <br />";
    echo "nilai akhir : $na <br />"
    ?>
</body>
</html>