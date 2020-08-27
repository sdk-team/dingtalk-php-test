<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceVacationQuotaParams\leaveQuotas;

class UpdateOapiAttendanceVacationQuotaParams extends Model {
    protected $_name = [
        'leaveQuotas' => 'leave_quotas',
        'opUserid' => 'op_userid',
    ];
    public function validate() {
        Model::validateRequired('leaveQuotas', $this->leaveQuotas, true);
        Model::validateRequired('opUserid', $this->opUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->leaveQuotas) {
            $res['leave_quotas'] = [];
            if(null !== $this->leaveQuotas && is_array($this->leaveQuotas)){
                $n = 0;
                foreach($this->leaveQuotas as $item){
                    $res['leave_quotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiAttendanceVacationQuotaParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['leave_quotas'])){
            if(!empty($map['leave_quotas'])){
                $model->leaveQuotas = [];
                $n = 0;
                foreach($map['leave_quotas'] as $item) {
                    $model->leaveQuotas[$n++] = null !== $item ? leaveQuotas::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        return $model;
    }
    /**
     * @description 待更新的假期余额记录
     * @var array
     */
    public $leaveQuotas;

    /**
     * @description 操作者ID
     * @var string
     */
    public $opUserid;

}
