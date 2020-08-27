<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnbindOapiSmartdeviceDeviceParams\deviceUnbindVo;

class UnbindOapiSmartdeviceDeviceParams extends Model {
    protected $_name = [
        'deviceUnbindVo' => 'device_unbind_vo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceUnbindVo) {
            $res['device_unbind_vo'] = null !== $this->deviceUnbindVo ? $this->deviceUnbindVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnbindOapiSmartdeviceDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_unbind_vo'])){
            $model->deviceUnbindVo = deviceUnbindVo::fromMap($map['device_unbind_vo']);
        }
        return $model;
    }
    /**
     * @description 解绑参数
     * @var deviceUnbindVo
     */
    public $deviceUnbindVo;

}
