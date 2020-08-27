<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiSmartdeviceFacegroupMemberParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
        Model::validateMaximum('size', $this->size, 500);
        Model::validateMinimum('size', $this->size, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
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
     * @return ListOapiSmartdeviceFacegroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
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
     * @description 业务id
     * @var string
     */
    public $bizId;

    /**
     * @description 游标，第一次传 <=0的值，后续传本调用的返回值
     * @var int
     */
    public $cursor;

    /**
     * @description 分页大小
     * @var int
     */
    public $size;

}
