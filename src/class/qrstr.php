<?php
/**
 * Created by  ： PhpStorm.
 * User:       ： lims
 * Date:       ： 2018/6/11
 * Time:       ： 下午6:44
 */
class qrstr {
    public static function set(&$srctab, $x, $y, $repl, $replLen = false) {
        $srctab[$y] = substr_replace($srctab[$y], ($replLen !== false)?substr($repl,0,$replLen):$repl, $x, ($replLen !== false)?$replLen:strlen($repl));
    }
}