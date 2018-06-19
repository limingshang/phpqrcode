<?php
/**
 * Created by  ： PhpStorm.
 * User:       ： lims
 * Date:       ： 2018/6/11
 * Time:       ： 下午6:27
 */
namespace phpqrcode\phpqrcodeclass;
class QRrs {

    public static $items = array();

    //----------------------------------------------------------------------
    public static function init_rs($symsize, $gfpoly, $fcr, $prim, $nroots, $pad)
    {
        foreach(self::$items as $rs) {
            if($rs->pad != $pad)       continue;
            if($rs->nroots != $nroots) continue;
            if($rs->mm != $symsize)    continue;
            if($rs->gfpoly != $gfpoly) continue;
            if($rs->fcr != $fcr)       continue;
            if($rs->prim != $prim)     continue;

            return $rs;
        }

        $rs = QRrsItem::init_rs_char($symsize, $gfpoly, $fcr, $prim, $nroots, $pad);
        array_unshift(self::$items, $rs);

        return $rs;
    }
}