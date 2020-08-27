<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListOapiEduCourseParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'cursor' => 'cursor',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateMinimum('cursor', $this->cursor, 0);
        Model::validateMinimum('size', $this->size, 1);
        Model::validateMaximum('size', $this->size, 100);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
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
     * @return ListOapiEduCourseParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
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
     * @description 当前操作人的用户ID
     * @var string
     */
    public $opUserid;

    /**
     * @description 表示分页游标，从0开始
     * @var int
     */
    public $cursor;

    /**
     * @description 表示分页大小
     * @var int
     */
    public $size;

}
