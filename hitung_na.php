<html>
<head></head>
<body>
    <?php
    $uts=$_GET["uts"];
    $uas=$_GET["uas"];
    $na=(0.6*$uas)+(0.4*$uts);
    echo "uts : $uts <br />";
    echo "uas : $uas <br />";
    echo "nilai akhir : $na <br />";
/*    if ($na > 70)
        echo "lulus";
    else
        echo "tidak lulus"; */
    if ($na<50)
        $nh="E";
    else if ($na<60)
        $nh="D";
    else if ($na<70)
        $nh="c";
    else if ($na<85)
        $nh="B";
    else 
        $nh="A";
    echo "nilai huruf: $nh";
    echo "<br />";
    switch ($na){
        case 100: $ket="nilai Sempurna ";
                  break;
        case 90: $ket="nilai sangat Baik";
                break;
        default : $ket="nilai baik";
    echo "keterangan : $ket";
                
    }
        
    
    ?>
</body>
</html>