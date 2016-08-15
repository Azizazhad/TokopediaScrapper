<?php

require dirname(__FILE__).'/../src/TokopediaScrapper.php';
try {
    $data = new Sn4ckEye\TokopediaScrapper\TokopediaScrapper('https://www.tokopedia.com/budgetgadget/car-bluetooth-music-receiver-with-handsfree');
    echo $data->generate('info');
} catch (Exception $e) {
    echo $e->getMessage();
}
