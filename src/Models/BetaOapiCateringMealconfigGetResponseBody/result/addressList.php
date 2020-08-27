<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BetaOapiCateringMealconfigGetResponseBody\result;

use AlibabaCloud\Tea\Model;

class addressList extends Model {
    protected $_name = [
        'address' => 'address',
        'addressDetail' => 'address_detail',
        'addressId' => 'address_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->addressDetail) {
            $res['address_detail'] = $this->addressDetail;
        }
        if (null !== $this->addressId) {
            $res['address_id'] = $this->addressId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return addressList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['address_detail'])){
            $model->addressDetail = $map['address_detail'];
        }
        if(isset($map['address_id'])){
            $model->addressId = $map['address_id'];
        }
        return $model;
    }
    /**
     * @description 缩略地址，可为空
     * @var string
     */
    public $address;

    /**
     * @description 送餐详细地址
     * @var string
     */
    public $addressDetail;

    /**
     * @description 地址id
     * @var int
     */
    public $addressId;

}
