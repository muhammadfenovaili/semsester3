


<?php
$balon =["Hijau","Kuning,","Kelabu,","Merah muda,","Biru"];

?>

<!doctype html>
<html>

    <head>

        <title>looping for array</title>
        <style> 
        .balon {
            background-color: yellow;
            margin:1px;
            float: left;
        }
        .clear {clear: both;}
        .balon2 {
            
            margin:1px;
            float: left;
            right: 5px;
            
        }
           
            </Style>
    
</head>
    <body>

    <p> <div  class ="clear"></div>
        Balonku ada lima. <br>

        Rupa-rupa warna-nya <br>
        
        <?php 
        for ($i = 0; $i < 4; $i++) {?>
           <div class = "balon"><?php echo $balon [$i]; ?></div>
      <?php  }?>
      <?php
$balon2 =["dan","Meletus balon ","DOR!!!"];

?>
       <div class = "balon2"><?php  echo $balon2 [0]; ?></div>
       <div class = "balon"><?php  echo $balon [4]; ?></div> 
       
       <div  class ="clear"></div>

       <div class = "balon2"><?php  echo $balon2 [1]; ?></div>
       <div class = "balon"><?php  echo $balon [0]; ?></div> 
       <div class = "balon2"><?php  echo $balon2 [2]; ?></div>

       
        <div  class ="clear"></div>

        Hatiku sangat kacau..


    </p>
    </body>
</html>