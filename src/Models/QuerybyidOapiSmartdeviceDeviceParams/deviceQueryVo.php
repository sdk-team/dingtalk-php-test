<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerybyidOapiSmartdeviceDeviceParams;

use AlibabaCloud\Tea\Model;

class deviceQueryVo extends Model {
    protected $_name = [
        'deviceId' => 'device_id',
    ];
    public function validate() {
        Model::validateRequired('deviceId', $this->deviceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return deviceQueryVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 设备id
     * @var string
     */
    public $deviceId;

}
