<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemindOapiAppstoreInternalParams extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
        'goodsCode' => 'goods_code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->goodsCode) {
            $res['goods_code'] = $this->goodsCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemindOapiAppstoreInternalParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['goods_code'])){
            $model->goodsCode = $map['goods_code'];
        }
        return $model;
    }
    /**
     * @description 试用审批单id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 商品码
     * @var string
     */
    public $goodsCode;

}
