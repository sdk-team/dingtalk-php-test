<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavestatusOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavestatusOapiAttendanceResponseBody\result\leaveStatus;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'leaveStatus' => 'leave_status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->leaveStatus) {
            $res['leave_status'] = [];
            if(null !== $this->leaveStatus && is_array($this->leaveStatus)){
                $n = 0;
                foreach($this->leaveStatus as $item){
                    $res['leave_status'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if(isset($map['leave_status'])){
            if(!empty($map['leave_status'])){
                $model->leaveStatus = [];
                $n = 0;
                foreach($map['leave_status'] as $item) {
                    $model->leaveStatus[$n++] = null !== $item ? leaveStatus::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 请假状态列表
     * @var array
     */
    public $leaveStatus;

}
