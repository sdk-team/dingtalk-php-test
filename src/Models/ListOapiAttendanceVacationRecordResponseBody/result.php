<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationRecordResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationRecordResponseBody\result\leaveRecords;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'leaveRecords' => 'leave_records',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->leaveRecords) {
            $res['leave_records'] = [];
            if(null !== $this->leaveRecords && is_array($this->leaveRecords)){
                $n = 0;
                foreach($this->leaveRecords as $item){
                    $res['leave_records'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['leave_records'])){
            if(!empty($map['leave_records'])){
                $model->leaveRecords = [];
                $n = 0;
                foreach($map['leave_records'] as $item) {
                    $model->leaveRecords[$n++] = null !== $item ? leaveRecords::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否存在更多记录
     * @var bool
     */
    public $hasMore;

    /**
     * @description 假期消费记录列表
     * @var array
     */
    public $leaveRecords;

}
