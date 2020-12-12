<?php 
namespace pokemon\controllers;

use pokemon\validations\Validation;

class ConfirmController
{
    private $twig;
    private $dataArr = [];
    private $errArr = [];
    private $display;
    private $validation;

    public function __construct($twig,$dataArr,$display)
    {  
        $this->twig = $twig;
        $this->dataArr = $dataArr;
        $this->display = $display;
        $this->validation = new Validation($dataArr); //Varidationで画面から渡されたdataArrのチェック

    }

    public function confirmDisplayAction()
    {
        $this->errArr = $this->validation->errorCheck();

        $template = 'confirm.html.twig';

        foreach($this->errArr as $keys => $values){
            if(strlen($values) > 0 ){
            $template = 'regist.html.twig';
            }
        }

        
        $type = ['','くさ','どく','ほのお','ひこう','みず','むし','ノーマル','でんき','じめん','かくとう','エスパー','いわ','こおり','ゴースト','ドラゴン'];
        $context = [];

        $context['typeArr'] = $type;
        $context['dataArr'] = $this->dataArr;
        $context['errArr'] = $this->errArr;

        $template = $this->twig->LoadTemplate($template);
        $template->display($context);
    }
}
?>