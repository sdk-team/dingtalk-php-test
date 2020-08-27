<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiSmartdeviceBindParams\deviceBindReqVo;

class CreateOapiSmartdeviceBindParams extends Model {
    protected $_name = [
        'deviceBindReqVo' => 'device_bind_req_vo',
    ];
    public function validate() {
        Model::validateRequired('deviceBindReqVo', $this->deviceBindReqVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceBindReqVo) {
            $res['device_bind_req_vo'] = null !== $this->deviceBindReqVo ? $this->deviceBindReqVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiSmartdeviceBindParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_bind_req_vo'])){
            $model->deviceBindReqVo = deviceBindReqVo::fromMap($map['device_bind_req_vo']);
        }
        return $model;
    }
    /**
     * @description 设备请求信息
     * @var deviceBindReqVo
     */
    public $deviceBindReqVo;

}
