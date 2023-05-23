<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços Arrays</title>
</head>
<body>
<?php
$array =[
    'quimica'=>[
        'thayna' =>[
            'mat'=>[
                'nota1'=>6,
                'nota2'=>7
            ],
            'port'=>[
                'nota1'=>6,
                'nota2'=>8
            ]
        ]
    ]
            ];

echo '<pre>';
print_r($array ['quimica'] ['thayna'] ['mat'] ['nota1']);
echo '</pre>';

echo '<pre>';

$var = ($array['quimica'] ['thayna'] ['mat'] ['nota1']);
$var1 = ($array['quimica'] ['thayna'] ['mat'] ['nota2']);
$soma = $var + $var1 ;
echo '</pre>';


echo '<pre>';
print_r($soma);
echo '</pre>';

$media=($soma/2);


if($media>=5){
echo ('aprovado');

}

else{
echo ('reprovado');

}

foreach($array as $key => $valor)
foreach($valor as $key1 => $valor1)
foreach($valor1 as $key2 => $valor2)


    echo '<pre>';
    print_r($valor2['nota1']);
    echo '</pre>';


    foreach($array as $key => $valor)

    echo'<pre>';
    print_r($valor['thayna']['mat']);
    echo'</pre>';





?>

</body>
</html>