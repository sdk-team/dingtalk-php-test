<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProjectInviteDataParams;

use AlibabaCloud\Tea\Model;

class inviteDataQuery extends Model {
    protected $_name = [
        'cursor' => 'cursor',
        'status' => 'status',
        'size' => 'size',
    ];
    public function validate() {
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return inviteDataQuery
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        return $model;
    }
    /**
     * @description 数据游标，初始传0。后续传入返回参数中的next_cursor值
     * @var int
     */
    public $cursor;

    /**
     * @description 状态0:无效（包括过程数据），1:有效(默认)，不传表示查询全部
     * @var int
     */
    public $status;

    /**
     * @description 每次查询数据量，最大100
     * @var int
     */
    public $size;

}
