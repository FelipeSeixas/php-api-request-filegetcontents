<?php 
// Developer: Felipe Seixas
// Contact: https://www.linkedin.com/in/felipe-seixas/
// Issue: request an API with file_get_contents

$textResult_v1 = file_get_contents('http://numbersapi.com/09/27');
$textResult_v2 = file_get_contents('http://numbersapi.com/09/11');
$textResult_v3 = file_get_contents('http://numbersapi.com/11/math');

echo "Version 1: Did you know that " . $textResult_v1 . "\n\n";
echo "Version 2: Did you know that " . $textResult_v2 . "\n\n";
echo "Version 3: Did you know that " . $textResult_v3 . "\n\n";

$params_v1 = array (11);
$params_v2 = 8;

// file_get_contents(http://numbersapi.com/11/0=11), automatically added the "equal(=) to build a fully parameter ":
$resultparams_v1 = "http://numbersapi.com/11/" . http_build_query($params_v1);

$resultparams_v2 = "http://numbersapi.com/11/" . $params_v2;

$textResult_v4 = file_get_contents($resultparams_v1);
$textResult_v5 = file_get_contents($resultparams_v2);

echo "Version 4: Did you know that " . $textResult_v4 . "\n\n";

echo "Version 5: Did you know that " . $textResult_v5 . "\n\n";


?>