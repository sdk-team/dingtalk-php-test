<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class HasbinddeviceCorpDeviceManageParams extends Model {
    protected $_name = [
        'deviceServiceId' => 'device_service_id',
    ];
    public function validate() {
        Model::validateRequired('deviceServiceId', $this->deviceServiceId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceServiceId) {
            $res['device_service_id'] = $this->deviceServiceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return HasbinddeviceCorpDeviceManageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_service_id'])){
            $model->deviceServiceId = $map['device_service_id'];
        }
        return $model;
    }
    /**
     * @description 设备产品类型 产品编码：M1：9 C1：14 M2：15 D1：24
     * @var int
     */
    public $deviceServiceId;

}
