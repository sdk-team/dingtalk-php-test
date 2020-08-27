<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessPropertyParams;

use AlibabaCloud\Tea\Model;

class props extends Model {
    protected $_name = [
        'payEnable' => 'pay_enable',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->payEnable) {
            $res['pay_enable'] = $this->payEnable;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return props
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['pay_enable'])){
            $model->payEnable = $map['pay_enable'];
        }
        return $model;
    }
    /**
     * @description 单个控件属性
     * @var bool
     */
    public $payEnable;

}
