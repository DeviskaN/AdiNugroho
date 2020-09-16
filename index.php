<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Deviska Adi Nugroho</title>
    <link rel="stylesheet" href="lib/style.css">
</head>
<style>

    body{
        background-image: url(75.gif);
        background-size: 100%;

    }
    .jam{
        font-size: 230%;
        color: white;
        font:italic;
    }
    .welcome{
        font-size: 100%;
        color: red;
        font:italic;
    }
    h2 {
        color:white;
    }
.img{
		background-color:blue;
		background-size: 50px;
		opacity: 0.3;
		filter: alpha(opacity=60); /* For IE8 and earlier */
		}

</style>

<body onload="clock()">

     <div class="col mt-8">
        <div class="container">
            <div class="flex">
                <div class="welcome">
  
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
             <?php 
        $tanggal = mktime(date('m'), date("d"), date('Y'));
        date_default_timezone_set("Asia/Jakarta");
        $jam = date ("H:i:s");
        $a = date ("H");
        if (($a>=6) && ($a<=11)) {
            echo " <h1><i> Selamat Pagi !! Deviska Adi Nugroho </i></h1>";
        }else if(($a>=11) && ($a<=15)){
            echo " <h1><i> Selamat  Siang !! Deviska Adi Nugroho </i></h1>";
        }elseif(($a>15) && ($a<=18)){
            echo " <h1><i> Selamat Sore !! Deviska Adi Nugroho </i></h1>";
        }else{
            echo " <h1><i> Selamat Malam !! Deviska Adi Nugroho </i></h1>";
        }
        ?>
     </div>
        <div class="jam" id="clock" ></div>
                <?php 
        $tanggal = mktime(date('m'), date("d"), date('Y'));
        date_default_timezone_set("Asia/Jakarta");
        echo "<h2> " . date("d-m-Y", $tanggal ) . "</h2>";
        ?>   

            </div>
        </div>
    </div>
    <script src="lib/script.js"></script>
    </div>
</body>

</html>