<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetbyuseridOapiWorkrecordParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'offset' => 'offset',
        'limit' => 'limit',
        'status' => 'status',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('offset', $this->offset, true);
        Model::validateRequired('limit', $this->limit, true);
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
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetbyuseridOapiWorkrecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['offset'])){
            $model->offset = $map['offset'];
        }
        if(isset($map['limit'])){
            $model->limit = $map['limit'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 用户唯一ID
     * @var string
     */
    public $userid;

    /**
     * @description 分页游标，从0开始，如返回结果中has_more为true，则表示还有数据，offset再传上一次的offset+limit
     * @var int
     */
    public $offset;

    /**
     * @description 分页大小，最多50
     * @var int
     */
    public $limit;

    /**
     * @description 待办事项状态，0表示未完成，1表示完成
     * @var int
     */
    public $status;

}
