<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringApplylistCorpidlistGetResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'shopId' => 'shop_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->shopId) {
            $res['shop_id'] = $this->shopId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['shop_id'])){
            $model->shopId = $map['shop_id'];
        }
        return $model;
    }
    /**
     * @description 申请合作企业的corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 申请合作的商铺id
     * @var string
     */
    public $shopId;

}
