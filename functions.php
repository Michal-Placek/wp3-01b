<?php
function getCarDescription(int $year):void {
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