<?php
session_start();
ob_start();
include("paths.php");
require(CARDS_DECK_OBJECT);

try {
    $cards = fopen(CARDS_STANDARD_DECK_DEFAULT_TRANSLATION, "r");
    $deck = new Deck($cards);
    print_r($deck->cards);
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>
