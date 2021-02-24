<?php
function getCarInfo(int $year):void {
    if ($year <= 1960) {
        echo "To je fakt veterán!";
    }
    elseif ($year <= 1990) {
        echo "Auto by na silnici už raději být nemělo!";
    }
    elseif ($year <= 2000) {
        echo "Budete platit velkou silniční daň a povinné ručení!";
    }
    elseif ($year <= 2010) {
        echo "Navštěvujte servis pravidelně.";
    }
    else {
        echo "Auto je způsobilé.";
    }
}

function getTax(int $engine)
if ($engine <= 800) {
    echo "1200Kč";
}
elseif ($engine <= 1250) {
    echo "1800 Kč";
}
elseif ($engine <= 1500) {
    echo "2400 Kč";
}
elseif ($engine <= 2000) {
    echo "3000 Kč";
}
elseif ($engine <= 3000) {
    echo "3600 Kč";
}
else {
    echo "4200 Kč";
}