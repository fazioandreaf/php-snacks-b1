<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bg-green{
        background-color:green;
    }
    .bg-red{
        background-color:red;
    }
    </style>
</head>
<body>
    <div class="cotainer">
    <h1>
    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60-->
        <?php
        $squadHome=['Milan','Inter','Juventus','Parma','Benevento','Spezia','Udinese','Fiorentina','Roma','Lazio','Napoli','Reggina','Ascoli'];
        $squadGuest=['Perugia','Catania','Palermo','Genoa','Sampdoria','Benevento','Bari','Siena','Empoli','Ternana','Trapani','Caserta','Bologna'];
        for($x=0;$x<count($squadHome);$x++){
            echo '<div>'.$squadHome[$x].' - ';

            echo $squadGuest[$x].' | ';
            echo rand(0,90).' - '.rand(0,90).'</div>';
        }
        ?>
        <!-- ## Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"  -->
        </h1>
        <h1>
        <?php
        $name= $_GET[name];
        $mail= $_GET[mail];
        $age= $_GET[age];
        $nameTrue=strlen(trim($name));
        $mailTrue=trim($mail);
        // integer sta per number
        $ageTrue=is_numeric($age);
        echo $name.' '.$mailTrue.' '.$age.' ';
        echo gettype(strpos($mailTrue,'d'));
        // echo gettype($ageTrue);
        if($nameTrue<=3){
            echo ' Non hai inserito un nome pertinente';
            if(strpos($mailTrue,'.') != false)
                echo 'non hai inserito una email valida';


                if($ageTrue==integer)
                echo 'Non hai scritto un numero';
        }
                    // utilizzo di funzione
        //    $mail = $_GET['email'];
        //    $hasDot = strpos($mail,'.');
        //    $hasAt = strpos($mail,'@');
        //    var_dump($mail,$hasDot,$hasAt);
        //    if($hasAt == false || $hasDot == false){
        //        echo 'ko';
        //    }else{
        //        echo 'ok';
        //    }

        
        
        
        
        
        ?>
        </h1>
    </div>
</body>
</html>