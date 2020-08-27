<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiAttendanceGroupUsersParams extends Model {
    protected $_name = [
        'size' => 'size',
        'cursor' => 'cursor',
        'opUserid' => 'op_userid',
        'groupKey' => 'group_key',
    ];
    public function validate() {
        Model::validateRequired('groupKey', $this->groupKey, true);
    }
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
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiAttendanceGroupUsersParams
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
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        return $model;
    }
    /**
     * @description 分页大小
     * @var int
     */
    public $size;

    /**
     * @description 上一批次最后一个userId，传null、空值表示从头开始查
     * @var string
     */
    public $cursor;

    /**
     * @description 操作人userId
     * @var string
     */
    public $opUserid;

    /**
     * @description 考勤组id
     * @var string
     */
    public $groupKey;

}
