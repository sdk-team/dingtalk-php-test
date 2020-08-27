<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCrmObjectdataCustomerResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'instanceId' => 'instance_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        return $model;
    }
    /**
     * @description 客户数据id
     * @var string
     */
    public $instanceId;

}
