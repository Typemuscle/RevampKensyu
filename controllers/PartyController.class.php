<?php 
namespace pokemon\controllers;

use pokemon\models\Party;
use pokemon\models\Session;

class PartyController
{
    private $session;
    private $party;
    private $twig;
    private $player_no;

    public function __construct($twig)
    {
        $this->twig = $twig;
        $this->session = new Session();
        $this->party = new Party();

        //セッションキーでDBへの登録情報を確認する
        $this->session->checkSession();
        $this->player_no = $_SESSION['player_no'];
    }

    public function partyDisplayAction()
    {
        //画面から渡されたURLパラメーターの値を取得する
        $pokemon_id = (isset($_GET['pokemon_id']) === true && preg_match('/^\d+$/', $_GET['pokemon_id']) === 1) ? $_GET['pokemon_id'] : '';
        $party_id = (isset($_GET['party_id']) === true && preg_match('/^\d+$/', $_GET['party_id']) === 1) ? $_GET['party_id'] : '';
        
        //pokemon_idが設定されていれば、ショッピングカートに登録する
        
        if($pokemon_id !== ''){
            $this->insertPartyAction($pokemon_id);
        }

        //party_idが設定されていれば削除する
        if($party_id !== ''){
            $this->deletePartyAction($party_id);
        }

        //カート情報を取得する
        $dataArr = $this->party->getPartyData($this->player_no);
        
        //アイテム数と合計金額を取得する
        $partySummary = $this->party->getPokemonAndSumPrice($this->player_no);
        
        $unique = $this->party->uniqueCheck($this->player_no);

        $context = [];
        /*$context['sumNum'] = $partySummary['num'];
        $context['sumPrice'] = $partySummary['total_price'];
        */
        $context['unique'] = $unique;
        $context['sumNum'] = $partySummary;
        $context['dataArr'] = $dataArr;
        $template = $this->twig->loadTemplate('party.html.twig');
        $template->display($context);
    }

    private function insertPartyAction($pokemon_id)
    {
        
        $res = $this->party->insPartyData($this->player_no,$pokemon_id);
        //登録に失敗した場合、エラーページを表示する
        if ($res === false){
            echo "ポケモンの登録に失敗しました";
            exit();
        }
    }

    private function deletePartyAction($party_id)
    {
        $res = $this->party->delPartyData($party_id);
        //削除に失敗した場合、エラーページを表示する
        if($res === false){
            echo "ポケモンの削除に失敗しました";
            exit();
        }
    }
}
?>