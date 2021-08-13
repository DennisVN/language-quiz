<?php

class LanguageGame
{
    private array $words;
    public Word $randomWord;
    public string $message = "";

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        $this->words = [];
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array -> use new keyword
            $word = new Word($frenchTranslation, $englishTranslation);
            array_push($this->words, $word);
            //var_dump($word);
            //var_dump($word->word);
        }
    }

    public function run()
    {   
        // TODO: check for option A or B
        // if post translate == answer then score, else faulty 
        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        $this->randomWord = $this->words[array_rand($this->words , 1)];
        //var_dump($this->randomWord->word);
        //var_dump($this->randomWord->answer);
        //var_dump($randomWord->answer);
        $_SESSION["translate"] = $this->randomWord;
        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        $playerGuess = $_POST["translation"];
        

        /*if ( $randomWord->verify($playerGuess) === true ) {
            $this->message = "Your answer <p>\"{$playerGuess}\"</p> is très bien ! " ;
        } else {
            $this->message = "Your Answer <p>\"{$playerGuess}\"</p> n'est pas that good ." ;
        }*/
        // TODO: generate a message for the user that can be shown
    }
}
