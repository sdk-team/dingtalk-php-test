<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SwitchOapiAttendanceApproveScheduleParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'switchDate' => 'switch_date',
        'rebackDate' => 'reback_date',
        'applyUserid' => 'apply_userid',
        'targetUserid' => 'target_userid',
        'applyShiftId' => 'apply_shift_id',
        'targetShiftId' => 'target_shift_id',
        'rebackApplyShiftId' => 'reback_apply_shift_id',
        'rebackTargetShiftId' => 'reback_target_shift_id',
        'approveId' => 'approve_id',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('switchDate', $this->switchDate, true);
        Model::validateRequired('applyUserid', $this->applyUserid, true);
        Model::validateRequired('targetUserid', $this->targetUserid, true);
        Model::validateRequired('approveId', $this->approveId, true);
        Model::validateMaxLength('approveId', $this->approveId, 100);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->switchDate) {
            $res['switch_date'] = $this->switchDate;
        }
        if (null !== $this->rebackDate) {
            $res['reback_date'] = $this->rebackDate;
        }
        if (null !== $this->applyUserid) {
            $res['apply_userid'] = $this->applyUserid;
        }
        if (null !== $this->targetUserid) {
            $res['target_userid'] = $this->targetUserid;
        }
        if (null !== $this->applyShiftId) {
            $res['apply_shift_id'] = $this->applyShiftId;
        }
        if (null !== $this->targetShiftId) {
            $res['target_shift_id'] = $this->targetShiftId;
        }
        if (null !== $this->rebackApplyShiftId) {
            $res['reback_apply_shift_id'] = $this->rebackApplyShiftId;
        }
        if (null !== $this->rebackTargetShiftId) {
            $res['reback_target_shift_id'] = $this->rebackTargetShiftId;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SwitchOapiAttendanceApproveScheduleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['switch_date'])){
            $model->switchDate = $map['switch_date'];
        }
        if(isset($map['reback_date'])){
            $model->rebackDate = $map['reback_date'];
        }
        if(isset($map['apply_userid'])){
            $model->applyUserid = $map['apply_userid'];
        }
        if(isset($map['target_userid'])){
            $model->targetUserid = $map['target_userid'];
        }
        if(isset($map['apply_shift_id'])){
            $model->applyShiftId = $map['apply_shift_id'];
        }
        if(isset($map['target_shift_id'])){
            $model->targetShiftId = $map['target_shift_id'];
        }
        if(isset($map['reback_apply_shift_id'])){
            $model->rebackApplyShiftId = $map['reback_apply_shift_id'];
        }
        if(isset($map['reback_target_shift_id'])){
            $model->rebackTargetShiftId = $map['reback_target_shift_id'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        return $model;
    }
    /**
     * @description 发起人的user_id
     * @var string
     */
    public $userid;

    /**
     * @description 申请换班日期，当天必须有排班或排休
     * @var string
     */
    public $switchDate;

    /**
     * @description 还班日期，当天必须有排班或排休，如果申请换班人和被换班人是同一个人，那么必须要有还班日期
     * @var string
     */
    public $rebackDate;

    /**
     * @description 申请换班人id，仅支持排班制考勤组用户
     * @var string
     */
    public $applyUserid;

    /**
     * @description 被换班人id，仅支持排班制考勤组用户
     * @var string
     */
    public $targetUserid;

    /**
     * @description 申请人换班日期当天的班次id
     * @var int
     */
    public $applyShiftId;

    /**
     * @description 被换班人换班日期当天的班次id
     * @var int
     */
    public $targetShiftId;

    /**
     * @description 申请人还班日期当天的班次id
     * @var int
     */
    public $rebackApplyShiftId;

    /**
     * @description 被换班人还班日期当天的班次id
     * @var int
     */
    public $rebackTargetShiftId;

    /**
     * @description 审批单唯一id
     * @var string
     */
    public $approveId;

}
