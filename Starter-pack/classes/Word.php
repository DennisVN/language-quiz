<?php

class Word
{
    public string $word; 
    public string $answer;
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?) YES
    public function __construct(string $word, string $answer)
    {
        $this->word=$word;
        $this->word=$answer;
    }


    public function verify(string $answer)
    {   
        echo 'French : {$this->word}';
        echo 'English : {$this->answer}';
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}