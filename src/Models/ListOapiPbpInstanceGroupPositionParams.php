<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiPbpInstanceGroupPositionParams extends Model {
    protected $_name = [
        'punchGroupId' => 'punch_group_id',
        'cursor' => 'cursor',
        'size' => 'size',
        'bizId' => 'biz_id',
    ];
    public function validate() {
        Model::validateRequired('punchGroupId', $this->punchGroupId, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->punchGroupId) {
            $res['punch_group_id'] = $this->punchGroupId;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiPbpInstanceGroupPositionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['punch_group_id'])){
            $model->punchGroupId = $map['punch_group_id'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
    /**
     * @description 打卡组唯一标识，由创建打卡组接口返回
     * @var string
     */
    public $punchGroupId;

    /**
     * @description 游标，用于分页查询
     * @var int
     */
    public $cursor;

    /**
     * @description 分页请求数量
     * @var int
     */
    public $size;

    /**
     * @description 业务唯一标识
     * @var string
     */
    public $bizId;

}
