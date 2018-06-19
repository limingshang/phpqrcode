<?php
/**
 * Created by  ： PhpStorm.
 * User:       ： lims
 * Date:       ： 2018/6/11
 * Time:       ： 下午6:26
 */
namespace phpqrcode\phpqrcodeclass;
class QRrsblock {
    public $dataLength;
    public $data = array();
    public $eccLength;
    public $ecc = array();

    public function __construct($dl, $data, $el, &$ecc, QRrsItem $rs)
    {
        $rs->encode_rs_char($data, $ecc);

        $this->dataLength = $dl;
        $this->data = $data;
        $this->eccLength = $el;
        $this->ecc = $ecc;
    }
};