<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\attendanceResultList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\approveList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\checkRecordList;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result\classSettingInfo;

class result extends Model {
    protected $_name = [
        'workDate' => 'work_date',
        'attendanceResultList' => 'attendance_result_list',
        'userid' => 'userid',
        'approveList' => 'approve_list',
        'checkRecordList' => 'check_record_list',
        'corpId' => 'corpId',
        'classSettingInfo' => 'class_setting_info',
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
            $res['attendance_result_list'] = [];
            if(null !== $this->attendanceResultList && is_array($this->attendanceResultList)){
                $n = 0;
                foreach($this->attendanceResultList as $item){
                    $res['attendance_result_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->approveList) {
            $res['approve_list'] = [];
            if(null !== $this->approveList && is_array($this->approveList)){
                $n = 0;
                foreach($this->approveList as $item){
                    $res['approve_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkRecordList) {
            $res['check_record_list'] = [];
            if(null !== $this->checkRecordList && is_array($this->checkRecordList)){
                $n = 0;
                foreach($this->checkRecordList as $item){
                    $res['check_record_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->classSettingInfo) {
            $res['class_setting_info'] = null !== $this->classSettingInfo ? $this->classSettingInfo->toMap() : null;
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
            if(!empty($map['attendance_result_list'])){
                $model->attendanceResultList = [];
                $n = 0;
                foreach($map['attendance_result_list'] as $item) {
                    $model->attendanceResultList[$n++] = null !== $item ? attendanceResultList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['approve_list'])){
            if(!empty($map['approve_list'])){
                $model->approveList = [];
                $n = 0;
                foreach($map['approve_list'] as $item) {
                    $model->approveList[$n++] = null !== $item ? approveList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['check_record_list'])){
            if(!empty($map['check_record_list'])){
                $model->checkRecordList = [];
                $n = 0;
                foreach($map['check_record_list'] as $item) {
                    $model->checkRecordList[$n++] = null !== $item ? checkRecordList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['corpId'])){
            $model->corpId = $map['corpId'];
        }
        if(isset($map['class_setting_info'])){
            $model->classSettingInfo = classSettingInfo::fromMap($map['class_setting_info']);
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
     * @var array
     */
    public $attendanceResultList;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

    /**
     * @description 审批单列表
     * @var array
     */
    public $approveList;

    /**
     * @description 打卡流水list
     * @var array
     */
    public $checkRecordList;

    /**
     * @description 公司id
     * @var string
     */
    public $corpId;

    /**
     * @description 当前排班对应的休息时间段
     * @var classSettingInfo
     */
    public $classSettingInfo;

}
