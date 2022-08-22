<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PHP Badwords</h1>
    <?php 
        $paragraph = "Mi si avvicinò con eccessivo calore, poiché aveva
        bevuto moltissimo. Era travestito da buffone: indossava un
        abito aderente a strisce, e in capo aveva il caratteristico berretto
        conico ornato di campanelli. <br> Fui tanto più felice di vederlo, in
        quanto non avevo affatto immaginato di potergli stringere la
        mano.
        Gli dissi: <br><br> - Mio caro Fortunato, che fortuna di incontrarti. Stai
        particolarmente bene, quest'oggi! Ma io ho ricevuto un barile di
        quel che passa col nome di Amontillado, e ho i miei dubbi. <br>
        - Come? - esclamò. - Amontillado? Un barile? Impossibile. E
        proprio nel mezzo del carnevale? <br>
        - Ho i miei dubbi, - replicai; - e sono stato tanto sciocco da
        pagare il prezzo che mi hanno chiesto senza consultarti in
        merito: ma non sono riuscito a trovarti, e avevo paura di
        perdere un buon affare. <br>
        - Amontillado! <br>
        - Ho i miei dubbi... <br>
        - Amontillado! <br>
        - ... e vorrei diradarli. <br>
        - Amontillado! <br>
        - Dal momento che sei impegnato, me ne andrò' da Lucresi.
        Nessuno è più bravo di lui in fatto di giudizio critico. Lui saprà
        dirmi... <br>
        - Lucresi non sa distinguere l'Amontillado dallo Xeres. <br>
        - Eppure alcuni stupidi sostengono che il giudizio di Lucresi
        può stare a paragone del tuo. <br>
        - Su andiamo. <br>
        - Dove? <br>
        - Nelle tue cantine. <br>
        "; 

        $badword = $_GET['badword'];
    ?>

    <h3>
        Parola censurata: 
        <?php 
            echo $badword;
        ?>    
    </h3>

    <p>
        <?php 
            echo $paragraph;            
        ?>
    </p>
</body>
</html>