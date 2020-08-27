<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationQuotaResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceVacationQuotaResponseBody\result\leaveQuotas;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'leaveQuotas' => 'leave_quotas',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->leaveQuotas) {
            $res['leave_quotas'] = [];
            if(null !== $this->leaveQuotas && is_array($this->leaveQuotas)){
                $n = 0;
                foreach($this->leaveQuotas as $item){
                    $res['leave_quotas'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['leave_quotas'])){
            if(!empty($map['leave_quotas'])){
                $model->leaveQuotas = [];
                $n = 0;
                foreach($map['leave_quotas'] as $item) {
                    $model->leaveQuotas[$n++] = null !== $item ? leaveQuotas::fromMap($item) : $item;
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
     * @description 假期余额列表
     * @var array
     */
    public $leaveQuotas;

}
