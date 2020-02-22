<?php

namespace app\models;
// use \yii\base\Model;
class Komentar extends \yii\base\Model {

    public $nama;
    public $pesan;

    public function rules()
    {
        return [
            [['nama','pesan'],'required'],
        ];
    }
}