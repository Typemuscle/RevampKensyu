<?php 
namespace pokemon;

require_once dirname(__FILE__).'\Bootstrap.class.php';

use pokemon\controllers\ListController;
use pokemon\controllers\DetailController;
use pokemon\controllers\PartyController;
use pokemon\controllers\RegistController;
use pokemon\controllers\ConfirmController;
use pokemon\controllers\CompleteController;

$display = (isset($_GET['display']) === true) ? $_GET['display'] : 'list';
switch($display){
    case 'back':
        $display = 'list';
        break;

    case 'list':
        if(isset($_POST['confirm']) === true ){

            $display = 'confirm';

        }elseif(isset($_POST['back']) === true){

            $display = 'regist';

        }elseif(isset($_POST['complete']) === true){

            $display = 'complete';
        }
        break;
}
// テンプレートを指定
$loader =new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader,['cache' => Bootstrap::CACHE_DIR]);

$dataArr = [];
//displayにとってどのコントローラーを使用するか選択する
switch ($display){
    case 'list':
        $ctrl = new ListController($twig);
        $ctrl->listDisplayAction();
        break;
    
    case 'detail':
    $ctrl = new DetailController($twig);
    $ctrl->detailDisplayAction();
    break;
    
    case 'party':
        $ctrl = new PartyController($twig);
        $ctrl->partyDisplayAction();
        break;
    
    case 'regist':
        $ctrl = new RegistController($twig);
        $ctrl->registDisplayAction();
        break;

    case 'confirm':
        $dataArr = $_POST;
        $ctrl = new ConfirmController($twig,$dataArr,$display);
        $ctrl->confirmDisplayAction();
        break;
    
    case 'complete':
        $dataArr = $_POST;
        $ctrl = new CompleteController($twig,$dataArr);
        $ctrl->completeDisplayAction();

}
?>