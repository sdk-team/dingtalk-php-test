<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiSmartdeviceFacegroupDeviceResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model {
    protected $_name = [
        'status' => 'status',
        'used' => 'used',
        'online' => 'online',
        'type' => 'type',
        'name' => 'name',
        'deviceId' => 'device_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->used) {
            $res['used'] = $this->used;
        }
        if (null !== $this->online) {
            $res['online'] = $this->online;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['used'])){
            $model->used = $map['used'];
        }
        if(isset($map['online'])){
            $model->online = $map['online'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        return $model;
    }
    /**
     * @description 是否启用识别（查询已绑定记录时有效）
     * @var bool
     */
    public $status;

    /**
     * @description 是否已被使用（含被本组关联）
     * @var bool
     */
    public $used;

    /**
     * @description 在线是否在线
     * @var bool
     */
    public $online;

    /**
     * @description 设备类型
     * @var string
     */
    public $type;

    /**
     * @description 设备名称
     * @var string
     */
    public $name;

    /**
     * @description 设备id
     * @var int
     */
    public $deviceId;

}
