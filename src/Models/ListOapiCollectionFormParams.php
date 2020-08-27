<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiCollectionFormParams extends Model {
    protected $_name = [
        'bizType' => 'biz_type',
        'creator' => 'creator',
        'offset' => 'offset',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMaxLength('size', $this->size, 500);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOapiCollectionFormParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_type'])){
            $model->bizType = $map['biz_type'];
        }
        if(isset($map['creator'])){
            $model->creator = $map['creator'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 填表类型。0表示通用填表，1表示教育版填表
     * @var int
     */
    public $bizType;

    /**
     * @description 填表创建人userid
     * @var string
     */
    public $creator;

    /**
     * @description 分页游标，从0开始。后续取返回结果中next_cursor的值
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最大200
     * @var int
     */
    public $size;

}
