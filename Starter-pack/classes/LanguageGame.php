<?php

class LanguageGame
{
    private array $words;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
                                    //key v                   value v
        $this->words = [];
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array -> use new keyword
            $word = new Word($frenchTranslation, $englishTranslation);
            var_dump($word);
            array_push($this->words, $word);

            //$this->frenchTranslation = $frenchTranslation;
            //$this->englishTranslation = $englishTranslation;
            //var_dump (LanguageGame::words()->$frenchTranslation);
            // if french -> $words // else english -> $answer
        }
    }

    public function run()
    {   
        $randomWord = $this->words[array_rand($this->words , 1)];
        //$items = array(1, 2, 3, 4, 5);
        //echo $items[array_rand($items)];
        //var_dump(Data::words());
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
}
