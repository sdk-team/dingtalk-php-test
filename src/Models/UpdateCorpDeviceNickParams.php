<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateCorpDeviceNickParams extends Model {
    protected $_name = [
        'deviceServiceId' => 'device_service_id',
        'deviceId' => 'device_id',
        'newNick' => 'new_nick',
    ];
    public function validate() {
        Model::validateRequired('deviceServiceId', $this->deviceServiceId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('newNick', $this->newNick, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceServiceId) {
            $res['device_service_id'] = $this->deviceServiceId;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->newNick) {
            $res['new_nick'] = $this->newNick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCorpDeviceNickParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_service_id'])){
            $model->deviceServiceId = $map['device_service_id'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['new_nick'])){
            $model->newNick = $map['new_nick'];
        }
        return $model;
    }
    /**
     * @description 设备服务商ID
     * @var int
     */
    public $deviceServiceId;

    /**
     * @description 设备ID
     * @var string
     */
    public $deviceId;

    /**
     * @description 设备新昵称
     * @var string
     */
    public $newNick;

}
