<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiPbpInstancePositionParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'bizInstId' => 'biz_inst_id',
        'type' => 'type',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('bizInstId', $this->bizInstId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->bizInstId) {
            $res['biz_inst_id'] = $this->bizInstId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
     * @return ListOapiPbpInstancePositionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['biz_inst_id'])){
            $model->bizInstId = $map['biz_inst_id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
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
     * @description 业务唯一标识，由系统分配
     * @var string
     */
    public $bizId;

    /**
     * @description 业务实例唯一标识，由创建示例接口返回
     * @var string
     */
    public $bizInstId;

    /**
     * @description 位置类型，如100代表硬件B1设备
     * @var int
     */
    public $type;

    /**
     * @description 游标，用于分页查询
     * @var int
     */
    public $cursor;

    /**
     * @description 查询数据量
     * @var int
     */
    public $size;

}
