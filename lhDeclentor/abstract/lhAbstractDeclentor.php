<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lhAbstractDeclentor
 *
 * @author Петя Datahider
 */
abstract class lhAbstractDeclentor {
    protected $word;
    
    public function __construct($word=null) {
        $word = null;
        $this->setWord($word);
    }
    
    abstract public function nominative();      // Именительный падеж: Петя
    abstract public function genitive();        // Родительный падеж:  Пети
    abstract public function dative();          // Дательный падеж:    Пете
    abstract public function accusative();      // Винительный падеж:  Петю
    abstract public function ablative();        // Творительный падеж: Петей
    abstract public function prepositional();   // Предложный падеж:   Пете
    abstract public function vocative();        // Звательный падеж:   Петь
    
    protected function setWord($word=null) {
        if ($word !== null) {
            $this->word = $word;
        }
        return $this->word;
    }
}
