<?php 
namespace pokemon\controllers;

use pokemon\models\Type;
use pokemon\models\Pokemon;
use pokemon\models\Session;

class DetailController
{
    private $type;
    private $pokemon;
    private $session;
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        $this->type = new Type();
        $this->pokemon = new Pokemon();
        $this->session = new Session();

        //セッションキーでDBへの登録状況を確認する
        $this->session->checkSession();
    }

    public function detailDisplayAction()
    {
        //画面から渡されたリクエストパラメーターの値を取得する
        $pokemon_id = (isset($_GET['pokemon_id']) === true && preg_match('/^\d+$/', $_GET['pokemon_id']) === 1) ? $_GET['pokemon_id'] : '';

        //pokemon_idが取得できていない場合、商品一覧へ遷移させる
        if ($pokemon_id === '') header('Location: '.Bootstrap::ENTRY_URL .'index.php');
    

    //カテゴリーリスト（一覧）を取得する
    $typeArr = $this->type->getTypeList();
    //商品リストを取得する
    $pokemonData = $this->pokemon->getPokemonDetailData($pokemon_id);

    $context = [];
    $context['typeArr'] = $typeArr;
    $context['pokemonData'] = $pokemonData[0];

    //テンプレートを読み込む
    $template = $this->twig->loadTemplate('detail.html.twig');
    //データを渡してテンプレートを出力する
    $template->display($context);
    }
}
?>