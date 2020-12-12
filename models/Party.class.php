<?php 
namespace pokemon\models;

//use pokemonは？

class Party extends Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTable('party');
    }

    //カートに登録する（必要な情報は、だれが$player_no、何を$pokemon_id）
    public function insPartyData($player_no,$pokemon_id)
    {
        
        $insData = [
                'player_no' => $player_no,
                'pokemon_id' => $pokemon_id,
                'delete_flg' => 0,
        ];
        
        return parent::insert($insData);
    }

    //カートの情報を取得する（必要な情報は、だれが$player_no 必要な商品情報は名前、商品画像、金額）
    public function getPartyData($player_no)
    {
        $pokemon = new Pokemon();
        $column = 'party.party_id,pokemon.pokemon_id,pokemon.pokemon_name,pokemon.hp,pokemon.image,pokemon.type_id,pokemon.type_id2';
        $join = ' LEFT '; 
        $joinTable = $pokemon->getTable();
        $joinOn = 'party.pokemon_id = pokemon.pokemon_id';
        $where = 'party.player_no = ? AND party.delete_flg = ?';
        $arrVal = [$player_no,0];

        //以下二つは引数の順番そろえる用
        $where2 = '';
        $order = '';
        
        return parent::select($column,$where,$arrVal,$where2,$order,$join,$joinTable,$joinOn);
    }

    //カートの情報を削除する:必要な情報はどのカートを$party_id
    public function delPartyData($party_id)
    {
        $insData = ['delete_flg' => 1];
        $where = 'party_id = ?';
        $arrWhereVal = [$party_id];

        return parent::update($insData,$where,$arrWhereVal);
    }

    //アイテム数と合計金額を取得する
    public function getPokemonAndSumPrice($player_no)
    {
        $pokemon = new Party();
        /*$column = 'SUM(i.price) AS total_price, SUM(num) AS num';
        $join = ' LEFT ';
        $joinTable = $pokemon->getTable();
        $joinOn = $this->getTable().'.pokemon_id = i.pokemon_id ';
        $where = $this->getTable().'.player_no = ? AND '.$this->getTable().'.delete_flg = ?';
        $arrWhereVal = [$player_no,0];
        */
        $column = 'delete_flg';
        $join = '';
        $joinTable = '';
        $joinOn = '';
        $where = 'delete_flg = 0';
        $arrWhereVal = [];
        //下の二つは引数の順序を揃える用
        $where2 = '';
        $order = '';
        
        $res = parent::select($column,$where,$arrWhereVal,$where2,$order,$join,$joinTable,$joinOn);
        //$party = ($res !== false && count($res) !== 0 && $res[0]['total_price'] !== NULL) ? $res[0]:['total_price' => 0, 'num' => 0];
        $party = ($res !== false && count($res) !== 0) ? $res:[];
        $count = count($party);
        
        return $count; 
    }

    //delete_flgが0の箇所のpokemon_idが一意の数を調べる。twigでdelete_flgが0の数と一意のpokemon_idの数が違うならエラーを表示
    public function uniqueCheck($player_no)
    {
        $pokemon = new Party();
        $column = 'DISTINCT on (pokemon_id) pokemon_id';
        $join = '';
        $joinTable = '';
        $joinOn = '';
        $where = 'delete_flg = 0';
        $arrWhereVal = [];
        //下の二つは引数の順序を揃える用
        $where2 = '';
        $order = '';
        
        $res = parent::select($column,$where,$arrWhereVal,$where2,$order,$join,$joinTable,$joinOn);
        $temp = ($res !== false && count($res) !== 0) ? $res:[];
        $unique = count($temp);
        
        return $unique;
    }
}
?>