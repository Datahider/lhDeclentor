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
interface lhAbstractDeclentor {
    public function nominative();      // Именительный падеж: Петя
    public function genitive();        // Родительный падеж:  Пети
    public function dative();          // Дательный падеж:    Пете
    public function accusative();      // Винительный падеж:  Петю
    public function ablative();        // Творительный падеж: Петей
    public function prepositional();   // Предложный падеж:   Пете
    public function vocative();        // Звательный падеж:   Петь
}
