<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiNewmanufacturerOrderParams extends Model {
    protected $_name = [
        'tenantId' => 'tenant_id',
        'number' => 'number',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiNewmanufacturerOrderParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        return $model;
    }
    /**
     * @description 租户
     * @var string
     */
    public $tenantId;

    /**
     * @description 订单号
     * @var string
     */
    public $number;

}
