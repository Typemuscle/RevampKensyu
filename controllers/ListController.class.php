<?php
namespace pokemon\controllers;

use pokemon\models\Type;
use pokemon\models\Pokemon;
use pokemon\models\Session;
use pokemon\models\Type2;

class ListController
{
    private $session;
    private $pokemon;
    private $type;
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;

        //テーブル情報をセットする
        $this->session = new Session();
        $this->pokemon =new Pokemon();
        $this->type =new Type();

        //セッションキーでDBへの登録状況を確認する
        $this->session->checkSession();
    }

    public function listDisplayAction()
    {
        //おそらくこの辺でtype2の値も引き渡す
        //画面から渡されたリクエストパラメーターの値を取得する       (行の先頭と末尾で0~9の数字という意味)
        $type_id = (isset($_GET['type_id']) === true && preg_match('/^[0-9]+$/', $_GET['type_id']) === 1) ? $_GET['type_id'] : '';
        $type_id2 = (isset($_GET['type_id2']) === true && preg_match('/^[0-9]+$/', $_GET['type_id2']) === 1) ? $_GET['type_id2'] : '';
        //preg_matchは(検索文字列、検索対象、一致した文字を返す先[0]には文字列全て統合（それ以降は単語で入る）、オフセットの有無)
        //カテゴリーリスト一覧を取得する
        $typeArr = $this->type->getTypeList();
        //商品リストを取得する
        $dataArr = $this->pokemon->getPokemonList($type_id,$type_id2);
        $context = [];
        $context['typeArr'] = $typeArr;
        $context['dataArr'] = $dataArr;
        //テンプレートを読み込む
        $template =$this->twig->loadTemplate('list.html.twig');
        //データを渡してテンプレートを出力する
        $template->display($context);
    }
}
?>