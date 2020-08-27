<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceGroupMemberusersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'cursor' => 'cursor',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['result'])){
            if(!empty($map['result'])){
                $model->result = $map['result'];
            }
        }
        return $model;
    }
    /**
     * @description 是否还有
     * @var bool
     */
    public $hasMore;

    /**
     * @description 游标
     * @var int
     */
    public $cursor;

    /**
     * @description 人员userId列表
     * @var array
     */
    public $result;

}
