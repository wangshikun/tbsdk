<?php
namespace Topsdk\Topapi\Ability1556\Domain;

class TaobaoTbkScMaterialOptionalUpgradePromotionTagMapData {

    /**
        标签名称，如“88VIP”、“花呗免息”、“猫超买返”、“是否包邮”
     **/
    public $tag_name;


    public function getTagName() : string{
        return $this->tag_name;
    }

    public function setTagName(string $tagName){
        $this->tag_name = $tagName;
    }


}

