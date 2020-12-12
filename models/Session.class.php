<?php 
namespace pokemon\models;

class Session extends Table
{
    private $session_key = '';

    public function __construct()
    {
        //セッションスタート
        session_start();
        //セッションIDを取得する
        $this->session_key = session_id();
        //DBの登録
        parent::__construct();
        $this->setTable('session');
    }

    //セッションIDの存在をチェックしてなければ登録する
    public function checkSession()
    {
        //セッションIDのチェック
        $player_no = $this->selectSession();
        //セッションIDがある（過去にショッピングカートに来たことがある）
        if($player_no !==false){
            $_SESSION['player_no'] = $player_no;
        }else{
            //セッションIDがない（初めてこのサイトに来ている）
            $res = $this->insertSession();
            if ($res === true){
                $_SESSION['player_no'] = parent::getLastId();
            }else{
                $_SESSION['player_no'] = '';
            }
        }
    }

    private function selectSession()
    {
        //$this->session_keyの場所からplayer_noを取得する
        $col = 'player_no';
        $where = 'session_key = ?';
        $arrVal = [$this->session_key];

        $res = parent::select($col,$where,$arrVal);
        return (count($res) !== 0) ? $res[0]['player_no'] : false;
    }

    private function insertSession()
    {
        $insData = ['session_key' => $this->session_key];
        $res = parent::insert($insData);
        return $res;
    }
}
?>