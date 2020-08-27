<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdatenickOapiSmartdeviceDeviceParams\deviceNickModifyVo;

class UpdatenickOapiSmartdeviceDeviceParams extends Model {
    protected $_name = [
        'deviceNickModifyVo' => 'device_nick_modify_vo',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceNickModifyVo) {
            $res['device_nick_modify_vo'] = null !== $this->deviceNickModifyVo ? $this->deviceNickModifyVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdatenickOapiSmartdeviceDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_nick_modify_vo'])){
            $model->deviceNickModifyVo = deviceNickModifyVo::fromMap($map['device_nick_modify_vo']);
        }
        return $model;
    }
    /**
     * @description 昵称修改参数
     * @var deviceNickModifyVo
     */
    public $deviceNickModifyVo;

}
