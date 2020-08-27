<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiSmartdeviceBindResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'deviceId' => 'device_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 设备ID
     * @var string
     */
    public $deviceId;

}
