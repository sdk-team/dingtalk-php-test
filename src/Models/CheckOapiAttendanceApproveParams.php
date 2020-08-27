<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CheckOapiAttendanceApproveParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'workDate' => 'work_date',
        'punchId' => 'punch_id',
        'punchCheckTime' => 'punch_check_time',
        'userCheckTime' => 'user_check_time',
        'approveId' => 'approve_id',
        'jumpUrl' => 'jump_url',
        'tagName' => 'tag_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->punchId) {
            $res['punch_id'] = $this->punchId;
        }
        if (null !== $this->punchCheckTime) {
            $res['punch_check_time'] = $this->punchCheckTime;
        }
        if (null !== $this->userCheckTime) {
            $res['user_check_time'] = $this->userCheckTime;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->jumpUrl) {
            $res['jump_url'] = $this->jumpUrl;
        }
        if (null !== $this->tagName) {
            $res['tag_name'] = $this->tagName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CheckOapiAttendanceApproveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['punch_id'])){
            $model->punchId = $map['punch_id'];
        }
        if(isset($map['punch_check_time'])){
            $model->punchCheckTime = $map['punch_check_time'];
        }
        if(isset($map['user_check_time'])){
            $model->userCheckTime = $map['user_check_time'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        if(isset($map['jump_url'])){
            $model->jumpUrl = $map['jump_url'];
        }
        if(isset($map['tag_name'])){
            $model->tagName = $map['tag_name'];
        }
        return $model;
    }
    /**
     * @description 员工的user_id
     * @var string
     */
    public $userid;

    /**
     * @description 要补哪一天的卡，注意这个日期不是实际要补的日期，而是班次的日期。例如用户要补卡的时间是2019-08-16 00:20，排班时间是2019-08-15 23：50，那么这里要传的日期是2019-08-15
     * @var string
     */
    public $workDate;

    /**
     * @description 要补的排班id
     * @var int
     */
    public $punchId;

    /**
     * @description 排班时间
     * @var string
     */
    public $punchCheckTime;

    /**
     * @description 用户打卡时间
     * @var string
     */
    public $userCheckTime;

    /**
     * @description 审批单id，全局唯一
     * @var string
     */
    public $approveId;

    /**
     * @description 审批单跳转地址
     * @var string
     */
    public $jumpUrl;

    /**
     * @description 审批单名称
     * @var string
     */
    public $tagName;

}
