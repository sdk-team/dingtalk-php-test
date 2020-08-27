<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiProcessWorkrecordTaskParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'offset' => 'offset',
        'count' => 'count',
        'status' => 'status',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiProcessWorkrecordTaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['count'])){
            $model->count = $map['count'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 分页游标
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小
     * @var int
     */
    public $count;

    /**
     * @description 状态
     * @var int
     */
    public $status;

}
