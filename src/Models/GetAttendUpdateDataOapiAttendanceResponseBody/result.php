<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetAttendUpdateDataOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetAttendUpdateDataOapiAttendanceResponseBody\result\attendanceResultList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetAttendUpdateDataOapiAttendanceResponseBody\result\approveList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetAttendUpdateDataOapiAttendanceResponseBody\result\checkRecordList;

class result extends Model {
    protected $_name = [
        'workDate' => 'work_date',
        'attendanceResultList' => 'attendance_result_list',
        'userid' => 'userid',
        'approveList' => 'approve_list',
        'checkRecordList' => 'check_record_list',
        'corpId' => 'corpId',
    ];
    public function validate() {
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->attendanceResultList) {
            $res['attendance_result_list'] = null !== $this->attendanceResultList ? $this->attendanceResultList->toMap() : null;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->approveList) {
            $res['approve_list'] = null !== $this->approveList ? $this->approveList->toMap() : null;
        }
        if (null !== $this->checkRecordList) {
            $res['check_record_list'] = null !== $this->checkRecordList ? $this->checkRecordList->toMap() : null;
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['attendance_result_list'])){
            $model->attendanceResultList = attendanceResultList::fromMap($map['attendance_result_list']);
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['approve_list'])){
            $model->approveList = approveList::fromMap($map['approve_list']);
        }
        if(isset($map['check_record_list'])){
            $model->checkRecordList = checkRecordList::fromMap($map['check_record_list']);
        }
        if(isset($map['corpId'])){
            $model->corpId = $map['corpId'];
        }
        return $model;
    }
    /**
     * @description 查询日期
     * @var string
     */
    public $workDate;

    /**
     * @description 打卡结果list
     * @var attendanceResultList
     */
    public $attendanceResultList;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 审批单列表
     * @var approveList
     */
    public $approveList;

    /**
     * @description 打卡流水list
     * @var checkRecordList
     */
    public $checkRecordList;

    /**
     * @description 公司id
     * @var string
     */
    public $corpId;

}
