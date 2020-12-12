<?php 
namespace pokemon\controllers;

use pokemon\models\Pokemon;

class CompleteController
{
    private $twig;
    private $pokemon;

    public function __construct($twig,$dataArr)
    {
        $this->twig = $twig;

        //$dataArrの最後に['complete']登録完了が入っているので消す
        array_pop($dataArr);
        
        $this->pokemon = new Pokemon();
        $this->pokemon->insert($dataArr);
        
    }

    public function completeDisplayAction()
    {
        $context = [];
        $template = 'complete.html.twig';

        $template = $this->twig->LoadTemplate($template);
        $template->display($context);
    }

}
?>