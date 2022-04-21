<html>
    <head>
        <title>Konversi suhu</title>
    </head>
    <body bgcolor="#00FFFF">
        <h1>Mengkonversi Suhu Celcius ke Fahrenhit dan Reamur</h1>

    <?php

    $celcius = 30;
    $reamur = 150;

    $celciustofahrenhit = $celcius * 1.8 + 32;
    $celciustoreamur = 0.8 * $reamur;

    echo "Suhu $celcius C <br>";
    echo "jika dikonversikan ke reamur = $celciustoreamur<br>";
    echo "jika dikonversikan ke fahrenhit = $celciustofahrenhit<p>";

    ?>
    </body>
</html>
