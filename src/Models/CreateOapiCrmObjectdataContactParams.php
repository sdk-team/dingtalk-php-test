<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCrmObjectdataContactParams\instance;

class CreateOapiCrmObjectdataContactParams extends Model {
    protected $_name = [
        'instance' => 'instance',
    ];
    public function validate() {
        Model::validateRequired('instance', $this->instance, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->instance) {
            $res['instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiCrmObjectdataContactParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instance'])){
            $model->instance = instance::fromMap($map['instance']);
        }
        return $model;
    }
    /**
     * @description 联系人数据
     * @var instance
     */
    public $instance;

}
