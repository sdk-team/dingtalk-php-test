<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiNewmanufacturerOrderResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'status' => 'status',
        'number' => 'number',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['number'])){
            $model->number = $map['number'];
        }
        return $model;
    }
    /**
     * @description 订单状态
     * @var string
     */
    public $status;

    /**
     * @description 订单编码
     * @var string
     */
    public $number;

}
