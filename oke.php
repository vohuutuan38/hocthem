<?php


abstract class QuatCo {
    public $quay;
    public $tocdogio;
    public $chieucao;
    public $cannang;
}


class QuatDien extends QuatCo {
    public $quay = 'a';
    public $tocdogio = 'aa';
    public $chieucao = 'a';
    public $cannang = 'a';
}

class QuatDien extends QuatCo {
    public $quay = 'b';
    public $tocdogio = 'b';
    public $chieucao = 'ab';
    public $cannang = 'ab';
}
var_dump(new QuatDien); die;


// 4 tính chất của OOP

// tính kế thừa
//  tính đóng gói
// tính trừu tượng
// tính đa hình