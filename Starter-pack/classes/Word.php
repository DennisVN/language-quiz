<?php

class Word
{
    public string $frenchWord; 
    public string $answer;
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?) YES
    public function __construct(string $frenchWord, string $answer)
    {
        $this->frenchWord=$frenchWord;
        $this->answer=$answer;
    }

    public function verify(string $userGuess): bool
    {   
        //echo($playerGuess);
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        if ($userGuess == $this->answer){
            return true;
        } else { 
            return false;
        }

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}