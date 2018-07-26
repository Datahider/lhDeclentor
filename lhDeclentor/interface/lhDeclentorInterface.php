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
interface lhDeclentorInterface {
    public function nominative($name=null);      // Именительный падеж: Петя
    public function genitive($name=null);        // Родительный падеж:  Пети
    public function dative($name=null);          // Дательный падеж:    Пете
    public function accusative($name=null);      // Винительный падеж:  Петю
    public function ablative($name=null);        // Творительный падеж: Петей
    public function prepositional($name=null);   // Предложный падеж:   Пете
    public function vocative($name=null);        // Звательный падеж:   Петь
    
    public function declent($case, $word=null);  // Склонение в переданном падеже
}
