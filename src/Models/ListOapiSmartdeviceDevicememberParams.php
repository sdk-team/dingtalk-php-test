<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartdeviceDevicememberParams extends Model {
    protected $_name = [
        'deviceId' => 'device_id',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaximum('size', $this->size, 500);
        Model::validateMinimum('size', $this->size, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiSmartdeviceDevicememberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 设备id
     * @var int
     */
    public $deviceId;

    /**
     * @description 查询游标，起始传0，后续传返回值中的cursor字段
     * @var int
     */
    public $cursor;

    /**
     * @description 分页大小
     * @var int
     */
    public $size;

}
