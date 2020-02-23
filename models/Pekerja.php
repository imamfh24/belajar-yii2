<?php

namespace app\models;

use yii\base\Model;

class Pekerja extends Model {

    public $nama;
    public $jabatan;
    public $email;
    public $keterangan;

    public function rules(){
        return [
            [['nama','jabatan','email','keterangan'], 'required'],
            ['email','email'],
            ['keterangan','string','max'=> 150],
        ];
    }

    public function dataJabatan(){
        return [
            1=> 'CEO',
            2=> 'COO',
            3=> 'Supervisor',
        ];
    }
}