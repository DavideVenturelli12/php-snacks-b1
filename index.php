<?php


/*
SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

echo ('<h1>SNACK 1</h1>');

$partiteBasket=[
    [
        'squadraCasa' => 'Bulls',
        'squadraOspite' => 'Celtics',
        'puntiCasa' => '94',
        'puntiOspiti' => '117'
    ],
    [
        'squadraCasa' => 'Suns',
        'squadraOspite' => 'Lakers',
        'puntiCasa' => '121',
        'puntiOspiti' => '110'
    ],
    [
        'squadraCasa' => 'Hornets',
        'squadraOspite' => 'Wizards',
        'puntiCasa' => '124',
        'puntiOspiti' => '108'
    ],
    [
        'squadraCasa' => 'Lakers',
        'squadraOspite' => 'Tunder',
        'puntiCasa' => '120',
        'puntiOspiti' => '101'
    ],
    [
        'squadraCasa' => 'Grizzlies',
        'squadraOspite' => 'Celtics',
        'puntiCasa' => '110',
        'puntiOspiti' => '139'
    ],
];

echo ('<h3>Partite Basket:</h3>');

for($i = 0; $i < count($partiteBasket); $i++){
    $match = $partiteBasket[$i];
    echo('<p>'. $match['squadraCasa']. ' - '. $match['squadraOspite']. ' | '. $match['puntiCasa'] .' - ' . $match['puntiOspiti'] .'</p>');
}

echo ('<hr>');

/*
SNACK 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

echo ('<h1>SNACK 2</h1>');

$nameRequest = $_GET['name'];
$mailRequest = $_GET['mail'];
$ageRequest = $_GET['age'];

if(strlen($nameRequest) > 3 && filter_var($mailRequest, FILTER_VALIDATE_EMAIL) && is_numeric($ageRequest)){
    echo('<h3>Acesso Riuscito</h3>');
}else{
    echo('<h3>Acesso Negato</h3>');
}

echo ('<hr>');

/*
SNACK 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

echo ('<h1>SNACK 3</h1>');

$numbersArray = [];

echo ('<h3>Array Numeri Randomici:</h3>');

for($i = 0; count($numbersArray) < 15; $i++){
    $numeber = rand(1,50);
    if(!in_array($numeber, $numbersArray)){
        $numbersArray[] = $numeber;
    }
}

echo('<pre>');
var_dump($numbersArray);
echo('</pre>');

echo ('<hr>');

/*
SNACK 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
*/

echo ('<h1>SNACK 4</h1>');

echo ('<h3>Paragrafo Originale:</h3>');
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eleifend purus at mauris malesuada suscipit. Morbi nisi orci, elementum ut aliquam eget, congue ac urna. Curabitur eu elit at ex varius cursus in ut nunc. Sed pulvinar non velit sed congue. Vestibulum molestie ac ex vitae vulputate. Donec quis sem euismod, porttitor massa vitae, interdum ipsum. Ut varius nunc ac nisi fringilla, sed tristique justo lacinia. Nam ut nisi pharetra, aliquam lorem a, pharetra tortor. Suspendisse eu dui varius arcu fermentum accumsan sit amet non erat. Quisque ac placerat augue. Quisque et commodo purus. Etiam commodo venenatis elementum. Nulla blandit ligula ac ultrices scelerisque. Nulla viverra, sem id bibendum hendrerit, dui nisi pretium arcu, ut pellentesque eros neque quis quam. Pellentesque nec tellus vitae dui iaculis dignissim.';

echo($paragraph);
$dividedParagraph = explode('.', $paragraph);

echo ('<h3>Paragrafo Diviso:</h3>');

for($i = 0; $i < count($dividedParagraph); $i++){
    echo('<p>'. $dividedParagraph[$i]. '</p>');
}

?>
