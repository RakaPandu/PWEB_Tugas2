<html>
    <head>
        <title>Konversi suhu</title>
    </head>
    <body bgcolor="#00FFFF">
        <h1>Mengkonversi Suhu dengan PHP</h1>

    <?php

    $celcius = 30;
    $fahrenhit = 1200;
    $reamur = 150;

    $reamurtofarenhit = (2.25 * $reamur) + 32;
    $reamurtocelsius = 1.25 * $reamur;
    $celciustofahrenhit = $celcius * 1.8 + 32;
    $celciustoreamur = 0.8 * $reamur;
    $fahrenhittocelcius = ($fahrenhit-32) / 1.8;
    $fahrenhittoreamur = 0.44 * ($fahrenhit - 32);

    echo "Suhu $celcius C <br>";
    echo "jika dikonversikan ke reamur = $celciustoreamur<br>";
    echo "jika dikonversikan ke fahrenhit = $celciustofahrenhit<p>";

    echo "Suhu $fahrenhit F <br>";
    echo "jika dikonversikan ke reamur = $fahrenhittoreamur<br>";
    echo "jika dikonversikan ke celcius = $fahrenhittocelcius<p>";

    echo "Suhu $reamur R <br>";
    echo "jika dikonversikan ke celcius = $reamurtocelsius<br>";
    echo "jika dikonversikan ke fahrenhit = $reamurtofarenhit<p>";
    ?>
    </body>
</html>
