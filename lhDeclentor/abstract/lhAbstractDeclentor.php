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
require_once __DIR__ . '/../interface/lhDeclentorInterface.php';

abstract class lhAbstractDeclentor implements lhDeclentorInterface {
    public static $nominative = 0;
    public static $genitive = 1;
    public static $dative = 2;
    public static $accusative = 3;
    public static $ablative = 4;
    public static $prepositional = 5;
    public static $vocative = 6;
    protected $word;
    
    public function __construct($word=null) {
        $word = null;
        $this->setWord($word);
    }
    
    public function nominative($name=null) {
        $name = $this->setWord($name);
        return $name;
    }

    abstract public function genitive($name=null);        // Родительный падеж:  Пети
    abstract public function dative($name=null);          // Дательный падеж:    Пете
    abstract public function accusative($name=null);      // Винительный падеж:  Петю
    abstract public function ablative($name=null);        // Творительный падеж: Петей
    abstract public function prepositional($name=null);   // Предложный падеж:   Пете
    
    public function declent($case, $word=null) {
        $this->setWord($word);
        switch ($case) {
            case self::$nominative:
                return $this->nominative();
            case self::$genitive:
                return $this->genitive();
            case self::$dative:
                return $this->dative();
            case self::$accusative:
                return $this->accusative();
            case self::$ablative:
                return $this->ablative();
            case self::$prepositional:
                return $this->prepositional();
            default:
                throw new Exception("Неизвестный падеж $case. Используйте одну из констант в ".__FILE__.' строка: '.__LINE__);
        }
    }


    protected function setWord($word=null) {
        if ($word !== null) {
            $this->word = $word;
        }
        return $this->word;
    }
}
