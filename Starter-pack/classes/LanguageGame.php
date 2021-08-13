<?php

class LanguageGame
{
    private array $words;
    public Word $selectedWord;
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
        }
    }

    public function run()
    {   
        // TODO: check for option A or B
        $formSubmitted = !empty($_POST);
        if (!$formSubmitted){
            $this->selectedWord = $this->selectRandomWord();
        } else {
           die('option B'); 
        }
    }

    private function selectRandomWord(): Word
    {

        $randomIndex = array_rand($this->words, 1);
        return $this->words[$randomIndex];
    }

}
