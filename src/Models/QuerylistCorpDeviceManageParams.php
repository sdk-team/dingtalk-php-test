<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QuerylistCorpDeviceManageParams extends Model {
    protected $_name = [
        'deviceServiceId' => 'device_service_id',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('deviceServiceId', $this->deviceServiceId, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaximum('size', $this->size, 20);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->deviceServiceId) {
            $res['device_service_id'] = $this->deviceServiceId;
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
     * @return QuerylistCorpDeviceManageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['device_service_id'])){
            $model->deviceServiceId = $map['device_service_id'];
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
     * @description 设备服务商ID
     * @var int
     */
    public $deviceServiceId;

    /**
     * @description 分页拉取设备列表的游标，首次拉取可传Null或者0
     * @var int
     */
    public $cursor;

    /**
     * @description 单次请求的大小，最大不超过20
     * @var int
     */
    public $size;

}
