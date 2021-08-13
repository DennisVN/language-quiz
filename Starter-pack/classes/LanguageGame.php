<?php

class LanguageGame
{
    private array $words;
    public Word $selectedWord;
    public string $message;

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
            $this->prepare();
        } else {
           $this->handleUserGuess();
        }
    }

    private function prepare(): void
    {
        $this->selectedWord = $this->selectRandomWord();
        $_SESSION['selectedWord'] = serialize($this->selectedWord);
    }
    private function handleUserGuess(): void
    {
        // TODO : VERIFY
        $this->selectedWord = unserialize($_SESSION['selectedWord']);
        $userWasRight = $this->selectedWord->verify($_POST['user_guess']);
        var_dump($userWasRight);
        // TODO : MESSAGE
        if ($userWasRight){
            $this->message = "just";
        } else {
            $this->message = "domme mutn keirl";
        }
        
    }

    private function selectRandomWord(): Word
    {

        $randomIndex = array_rand($this->words, 1);
        return $this->words[$randomIndex];
    }

}
