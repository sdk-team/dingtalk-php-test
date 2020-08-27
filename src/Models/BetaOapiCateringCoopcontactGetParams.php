<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BetaOapiCateringCoopcontactGetParams extends Model {
    protected $_name = [
        'corpEndCorpId' => 'corp_end_corp_id',
        'shopId' => 'shop_id',
        'callerUserid' => 'caller_userid',
    ];
    public function validate() {
        Model::validateRequired('corpEndCorpId', $this->corpEndCorpId, true);
        Model::validateRequired('shopId', $this->shopId, true);
        Model::validateRequired('callerUserid', $this->callerUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpEndCorpId) {
            $res['corp_end_corp_id'] = $this->corpEndCorpId;
        }
        if (null !== $this->shopId) {
            $res['shop_id'] = $this->shopId;
        }
        if (null !== $this->callerUserid) {
            $res['caller_userid'] = $this->callerUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BetaOapiCateringCoopcontactGetParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_end_corp_id'])){
            $model->corpEndCorpId = $map['corp_end_corp_id'];
        }
        if(isset($map['shop_id'])){
            $model->shopId = $map['shop_id'];
        }
        if(isset($map['caller_userid'])){
            $model->callerUserid = $map['caller_userid'];
        }
        return $model;
    }
    /**
     * @description 合作企业的corpId
     * @var string
     */
    public $corpEndCorpId;

    /**
     * @description 店铺id
     * @var string
     */
    public $shopId;

    /**
     * @description 呼叫方的userId
     * @var string
     */
    public $callerUserid;

}
