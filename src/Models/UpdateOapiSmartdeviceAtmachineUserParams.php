<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartdeviceAtmachineUserParams\param;

class UpdateOapiSmartdeviceAtmachineUserParams extends Model {
    protected $_name = [
        'param' => 'param',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartdeviceAtmachineUserParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param'])){
            $model->param = param::fromMap($map['param']);
        }
        return $model;
    }
    /**
     * @description 变更智能考勤机员工参数模型
     * @var param
     */
    public $param;

}
