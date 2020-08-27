<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiAttendanceGroupsParams extends Model {
    protected $_name = [
        'size' => 'size',
        'cursor' => 'cursor',
        'opUserid' => 'op_userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAttendanceGroupsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description 上一批次最后一个id，默认空
     * @var string
     */
    public $cursor;

    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

}
