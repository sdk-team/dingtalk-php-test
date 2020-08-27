<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRetailSellerResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'sellerId' => 'seller_id',
        'sellerNick' => 'seller_nick',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }
        if (null !== $this->sellerNick) {
            $res['seller_nick'] = $this->sellerNick;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['seller_id'])){
            $model->sellerId = $map['seller_id'];
        }
        if(isset($map['seller_nick'])){
            $model->sellerNick = $map['seller_nick'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 卖家ID
     * @var int
     */
    public $sellerId;

    /**
     * @description 卖家nick
     * @var string
     */
    public $sellerNick;

    /**
     * @description 天猫店|淘宝店
     * @var string
     */
    public $type;

}
