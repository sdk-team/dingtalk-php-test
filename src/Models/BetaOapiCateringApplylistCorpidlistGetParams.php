<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BetaOapiCateringApplylistCorpidlistGetParams extends Model {
    protected $_name = [
        'shopIdList' => 'shop_id_list',
    ];
    public function validate() {
        Model::validateRequired('shopIdList', $this->shopIdList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->shopIdList) {
            $res['shop_id_list'] = $this->shopIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BetaOapiCateringApplylistCorpidlistGetParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shop_id_list'])){
            if(!empty($map['shop_id_list'])){
                $model->shopIdList = $map['shop_id_list'];
            }
        }
        return $model;
    }
    /**
     * @description 店铺id列表
     * @var array
     */
    public $shopIdList;

}
