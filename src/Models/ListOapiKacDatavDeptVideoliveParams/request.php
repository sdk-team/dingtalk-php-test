<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavDeptVideoliveParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'dataId' => 'data_id',
        'size' => 'size',
        'cursor' => 'cursor',
    ];
    public function validate() {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('cursor', $this->cursor, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dataId) {
            $res['data_id'] = $this->dataId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data_id'])){
            $model->dataId = $map['data_id'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        return $model;
    }
    /**
     * @description 日期标识
     * @var string
     */
    public $dataId;

    /**
     * @description 分页大小;不超过100
     * @var int
     */
    public $size;

    /**
     * @description 分页游标；首页请使用0，之后直接使用返回结果中的next_cursor
     * @var int
     */
    public $cursor;

}
