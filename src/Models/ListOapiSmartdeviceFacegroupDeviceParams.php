<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartdeviceFacegroupDeviceParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'size' => 'size',
        'mode' => 'mode',
        'type' => 'type',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
        Model::validateMaximum('size', $this->size, 20);
        Model::validateMinimum('size', $this->size, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiSmartdeviceFacegroupDeviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['mode'])){
            $model->mode = $map['mode'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        return $model;
    }
    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description 查询模式：all-企业所有设备；bound-本组已关联设备
     * @var string
     */
    public $mode;

    /**
     * @description 需查询的设备类型
     * @var string
     */
    public $type;

    /**
     * @description 游标，第一次传 <=0的值，后续传本调用的返回值
     * @var int
     */
    public $cursor;

}
