<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            height: 80px;
            width: 80px;
            background: #BADA55;
            text-align: center;
            font-size: 2em;
            line-height: 80px;
            transition: 1s;
            float: left;
            margin: 5px;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .turun{
            clear: both;
        }
    </style>
</head>
<body>
    <!-- <?php
        $angka = [
                    [1,2,3],
                    [4,5,6],
                    [7,8,9]
                ];            
    ?>
    <?php
        foreach($angka as $kotakLuar) : 
            foreach($kotakLuar as $kotakDalam) :
    ?> -->
                <div class="kotak"><?php echo $kotakDalam;?></div>
            <?php endforeach ?>
            <div class="turun"></div>
        <?php endforeach ?>
      
</body>
</html> -->