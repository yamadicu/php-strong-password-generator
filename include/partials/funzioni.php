<?php
session_start();

$stringa = '';
$lunghezzaFiltrata = 0;
$lunghezzaPass = 0;
$password = '';

$lunghezzaPass = (isset($_GET['lunghezzaCaratteri'])) ? intval($_GET['lunghezzaCaratteri']) : '';
$ripetizioni = (isset($_GET['radioValue'])) ? $_GET['radioValue'] : '';

$arrayScelte = [
    [
        'type' => 'lettere',
        'arguments' => 'abcdefghijklmnopqrstuvwxyz',
        'active' => (isset($_GET['checkLettere'])) ? true : false
    ],
    [
        'type' => 'numeri',
        'arguments' => '0123456789',
        'active' => (isset($_GET['checkNumeri'])) ? true : false
    ],
    [
        'type' => 'simboli',
        'arguments' => '!"£$%&/()=?^ì',
        'active' => (isset($_GET['checkSimboli'])) ? true : false
    ]
];

foreach($arrayScelte as $element){
    if($element['active']){
        $stringa .= $element['arguments'];
        $lunghezzaFiltrata += strlen($element['arguments']);
    }
}

function generazionePassword($lunghezzaPass, $lunghezzaFiltrata, $password, $stringa, $ripetizioni){
    if( $lunghezzaPass > 0 && $lunghezzaFiltrata > 0 ){

        if( $ripetizioni == 'no' ){
            for( $i = 0; strlen($password) < $lunghezzaPass; $i++ ){
                $lettereRandom = $stringa[rand(0,strlen($stringa) - 1 )];
                if(!preg_match("/$lettereRandom/", $password)){
                    $password .= $lettereRandom;
                }
            }
        }else{
            for( $i = 0; strlen($password) < $lunghezzaPass; $i++ ){
                $password .= $stringa[rand(0,strlen($stringa) - 1 )];
            }
        }
    }
    return $password;
}

$_SESSION['password'] = generazionePassword($lunghezzaPass, $lunghezzaFiltrata, $password, $stringa, $ripetizioni);
?>