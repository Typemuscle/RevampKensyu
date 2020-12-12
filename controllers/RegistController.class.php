<?php 
namespace pokemon\controllers;

use pokemon\models\Type;

class RegistController
{
    private $twig;
    private $dataArr = [];
    private $errArr = [];

    public function __construct($twig)
    {
        $this->twig = $twig;

        //画面に渡すデータ達設定
        $this->dataArr =[
            'pokemon_name' => '',
            'detail' => '',
            'hp' => '',
            'type_id' => '',
            'type_id2' => ''
        ];

        //画面に渡すデータ達に応じたエラー項目設定
        foreach($this->dataArr as $key => $value){
            $this->errArr[$key] = '';
        }
    }

    public function registDisplayAction()
    {   
        //Typeクラスからtype一覧を読み込む
        //$typeObject = new Type();
        //$type = $typeObject->getTypeList();
        //↑多次元配列によるエラーを解消できませんでしたので力業で表示させます。すみません。
        
        $type = ['','くさ','どく','ほのお','ひこう','みず','むし','ノーマル','でんき','じめん','かくとう','エスパー','いわ','こおり','ゴースト','ドラゴン'];
        $context = [];

        $context['typeArr'] = $type;
        $context['dataArr'] = $this->dataArr;
        $context['errArr'] = $this->errArr;

        //テンプレートを読み込む
        $template =$this->twig->loadTemplate('regist.html.twig');
        //データを渡してテンプレートを出力する
        $template->display($context);




    }


}
?>