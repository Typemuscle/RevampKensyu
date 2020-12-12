<?php 
namespace pokemon\models;

class Type extends Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTable('type');
    }

    //タイプリストの取得
    public function getTypeList()
    {
        $col = 'type_id, type_name';
        $res = parent::select($col);

        return $res;
    }
}
?>