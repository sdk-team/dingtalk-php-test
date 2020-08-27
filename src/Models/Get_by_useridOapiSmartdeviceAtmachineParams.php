<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_by_useridOapiSmartdeviceAtmachineParams\param;

class Get_by_useridOapiSmartdeviceAtmachineParams extends Model {
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
     * @return Get_by_useridOapiSmartdeviceAtmachineParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param'])){
            $model->param = param::fromMap($map['param']);
        }
        return $model;
    }
    /**
     * @description 查询智能考勤机列表参数模型
     * @var param
     */
    public $param;

}
