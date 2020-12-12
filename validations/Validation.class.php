<?php 
namespace pokemon\validations;

class validation
{   
    private $dataArr = [];
    private $errArr = [];

    public function __construct($dataArr)
    {
        $this->dataArr = $dataArr;
        
        //画面に渡すデータ達に応じたエラー項目設定
        foreach($this->dataArr as $key => $value){
            $this->errArr[$key] = '';
        }
    }

    //チェック機能詰め合わせ。まとめてチェックする
    public function errorCheck()
    {
        $this->nameCheck();
        $this->detailCheck();
        $this->hpCheck();
        $this->typeCheck();
        $this->type2Check();

        return $this->errArr;
    }

    private function nameCheck()
    {
        if(empty($this->dataArr['pokemon_name']) === true){
            $this->errArr['pokemon_name'] = 'なまえが入力されていません';
        }
        return $this->errArr['pokemon_name'];
    }

    private function detailCheck()
    {
        if(empty($this->dataArr['detail']) === true){
            $this->errArr['detail'] = 'せつめいが入力されていません';
        }
        return $this->errArr['detail'];
    }

    private function hpCheck()
    {
        if(empty($this->dataArr['hp']) === true){
            $this->errArr['hp'] = 'HPが入力されていません';
        }
        return $this->errArr['hp'];
    }

    private function typeCheck()
    {
        if($this->dataArr['type_id'] == 0 ){
            $this->errArr['type_id'] = 'タイプを選択してください';
        }
        return $this->errArr['type_id'];
    }

    private function type2Check()
    {
        if($this->dataArr['type_id'] == $this->dataArr['type_id2']){
            $this->errArr['type_id2'] = '二つ同じタイプを選択することはできません';
        }
        return $this->errArr['type_id2'];
    }
}
?>