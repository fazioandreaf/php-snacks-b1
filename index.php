<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snack</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        margin:5px;
        background-color:lightblue;
    }
    .es2{
        margin:5px;
        background-color:lightgreen;

    }
    </style>
</head>
<body>
    <div class="container">
    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60-->
        <?php
        $squadHome=['Milan','Inter','Juventus','Parma','Benevento','Spezia','Udinese','Fiorentina','Roma','Lazio','Napoli','Reggina','Ascoli'];
        $squadGuest=['Perugia','Catania','Palermo','Genoa','Sampdoria','Benevento','Bari','Siena','Empoli','Ternana','Trapani','Caserta','Bologna'];
        $arr=[];
        $x=0;
        while($x<count($squadHome)){
            $rnd= rand(0,count($squadHome)-1);
            if( !in_array($rnd,$arr, false)){
               array_push($arr,$rnd);
               echo '<div>'.$squadHome[$rnd].' - ';
               echo $squadGuest[$rnd].' | ';
               echo rand(0,90).' - '.rand(0,90).'</div>';
                $x++;
           }
        }
        // for($x=0;$x<count($squadHome);$x++){
        // }
        ?>
        <!-- ## Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"  -->
    </div>
    <div class="es2">
        <?php
        $name= $_GET['name'];
        $mail= $_GET['mail'];
        $age= $_GET['age'];
        $nameTrue=strlen(trim($name));
        $mailTrue=trim($mail);
        $ageTrue=is_numeric($age);
        $hasdot = strpos($mailTrue,'.');
        $hasa = strpos($mailTrue,'@');
        if($nameTrue<=3)
        echo ' Non hai inserito un nome pertinente';
        else{
            if($hasdot === false || $hasa === false)
            echo 'Non hai inserito una email valida';
            else {
                if($ageTrue)
                echo 'Accesso eseguito';
                else echo 'Non hai inserito una età giusta';
            }
        }        
        ?>
    </div>
</body>
</html>