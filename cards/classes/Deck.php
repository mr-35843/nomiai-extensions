<?php
// There are four suits in a standard deck of cards:
// hearts, diamonds, clubs, and spades. 
// Each suit consists of 13 cards:
// Ace, Two, Three, Four, Five, Six, Seven, Eight, Nine, Ten, Jack, Queen, and King.
// Each card is represented by a key value pair that stores its game state and location.

class Deck {
    private $card_default_location;
    private $card_default_game_state;
    public $cards;

    function __construct($language){
        $this->card_default_location = 0;
        $this->card_default_game_state = 0;
        $this->cards = $this->initialise($language);
    }

    function initialise($language){
        $deck = [];
        while($header = fgetcsv($language)){
            foreach($header as $key => $value){
                    $deck[$header[$key]] = [
                        "location" => $this->card_default_location,
                        "game_state" => $this->card_default_game_state
                    ];
            }
        }
        return $deck;
    }
}
?>
