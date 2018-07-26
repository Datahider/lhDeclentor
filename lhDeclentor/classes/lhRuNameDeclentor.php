<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lhRuNameDeclentor
 *
 * @author Петя Datahider
 */
require_once LH_LIB_ROOT . 'lhDeclentor/abstract/lhAbstractDeclentor.php';
class lhRuNameDeclentor extends lhAbstractDeclentor {
    protected static $consonants_class = '[бвгджзклмнпрстфхцчшщ]';
    protected static $mans_exceptions = 'Игорь Израиль Камиль Лазарь Марсель Наиль Олесь Авиль Азиль Амиль Анель Афаэль Фазиль Фидель Цезарь Шамиль Шарль Эмиль';

    public function genitive($name=null) {
        $name = $this->setWord($name);
        $cc = self::$consonants_class;
        if ($name == 'Ольга') return 'Ольги';
        if ($name == 'Павел') return 'Павла';
        
        if (preg_match("/$name( |$)/u", self::$mans_exceptions)) { return preg_replace("/ь$/", 'я', $name); }
        if (preg_match("/$cc$/u", $name)) { return $name.'а'; };
        $name = preg_replace("/й$/u", 'я', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/а$/u", 'ы', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/я$/u", 'и', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/иа$/u", 'ии', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/ь$/u", 'и', $name, -1, $count); if ($count) { return $name; }
        return $name;
    }
    
    public function dative($name = null) {
        $name = $this->setWord($name);
        $cc = self::$consonants_class;
        if ($name == 'Ольга') return 'Ольге';
        if ($name == 'Зульфия') return 'Зульфие';
        if ($name == 'Павел') return 'Павлу';
        
        if (preg_match("/$name( |$)/u", self::$mans_exceptions)) { return preg_replace("/ь$/", 'ю', $name); }
        if (preg_match("/$cc$/u", $name)) { return $name.'у'; };
        $name = preg_replace("/й$/u", 'ю', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/а$/u", 'е', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/ия$/u", 'ии', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/иа$/u", 'ии', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/я$/u", 'е', $name, -1, $count); if ($count) { return $name; }
        $name = preg_replace("/ь$/u", 'и', $name, -1, $count); if ($count) { return $name; }
        return $name;
    }

    public function accusative($name = null) {
        return $this->setWord();
    }

    public function ablative($name = null) {
        return $this->setWord();
    }

    public function prepositional($name = null) {
        return $this->setWord();
    }

    public function vocative($name = null) {
        return $this->setWord();
    }

}
        