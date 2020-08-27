<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SyncOapiRetailSellerParams\sellerParam;

class SyncOapiRetailSellerParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'sellerParam' => 'seller_param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->sellerParam) {
            $res['seller_param'] = null !== $this->sellerParam ? $this->sellerParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiRetailSellerParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['seller_param'])){
            $model->sellerParam = sellerParam::fromMap($map['seller_param']);
        }
        return $model;
    }
    /**
     * @description staffId
     * @var string
     */
    public $userid;

    /**
     * @description 卖家信息
     * @var sellerParam
     */
    public $sellerParam;

}
