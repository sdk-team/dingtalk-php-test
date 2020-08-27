<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetbybiztypeSmartworkBpmsProcessParams extends Model {
    protected $_name = [
        'bizType' => 'biz_type',
    ];
    public function validate() {
        Model::validateRequired('bizType', $this->bizType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetbybiztypeSmartworkBpmsProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        return $model;
    }
    /**
     * @description 套件开发时与审批约定的业务标识
     * @var string
     */
    public $bizType;

}
