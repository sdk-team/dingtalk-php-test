<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiPbpInstanceGroupParams\groupParam;

class CreateOapiPbpInstanceGroupParams extends Model {
    protected $_name = [
        'groupParam' => 'group_param',
    ];
    public function validate() {
        Model::validateRequired('groupParam', $this->groupParam, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupParam) {
            $res['group_param'] = null !== $this->groupParam ? $this->groupParam->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiPbpInstanceGroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_param'])){
            $model->groupParam = groupParam::fromMap($map['group_param']);
        }
        return $model;
    }
    /**
     * @description 打卡组创建参数
     * @var groupParam
     */
    public $groupParam;

}
