<?php 
namespace pokemon\models;

class Pokemon extends Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTable('pokemon');
    }

    //ポケモンリストを取得する
    public function getPokemonList($type_id,$type_id2)
    {   
        //タイプによって表示させるポケモンを変える
        //カテゴリ選択なしの場合は$arrValが空じゃないと取得してこない様子なので分岐させる
        //後から編集したポケモンが最後に出てきてしまうのでorderも追加
        if($type_id !== '' && $type_id2 !== ''){
            $col = 'pokemon_id,pokemon_name,hp,image,type_id,type_id2';
            $where = 'type_id = ?';
            $where2 = 'type_id2 = ?';
            $order = ' ORDER BY pokemon_id ASC';
            $arrVal = [$type_id,$type_id2];

        $res = parent::select($col,$where,$arrVal,$where2,$order);
        }else{
            $col = 'pokemon_id,pokemon_name,hp,image,type_id,type_id2';
            $where = '';
            $where2 = '';
            $order = ' ORDER BY pokemon_id ASC';
            $arrVal = [];

            $res = parent::select($col,$where,$arrVal,$where2,$order);
        }
        return ($res !== false && count($res) !== 0) ? $res : false;
    }

    //商品の詳細情報を取得する
    public function getPokemonDetailData($pokemon_id)
    {
        $col = 'pokemon_id,pokemon_name,detail,hp,image,type_id,type_id2';
        $where = ($pokemon_id !=='') ? 'pokemon_id = ?' :'';
        //カテゴリーによって表示させるアイテムを変える
        $arrVal = ($pokemon_id !=='') ? [$pokemon_id] : [];
        $res = parent::select($col,$where,$arrVal);
        return ($res !== false && count($res) !== 0) ? $res : false;
    }

}
?>