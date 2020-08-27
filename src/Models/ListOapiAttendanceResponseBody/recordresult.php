<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

class recordresult extends Model {
    protected $_name = [
        'sourceType' => 'sourceType',
        'baseCheckTime' => 'baseCheckTime',
        'userCheckTime' => 'userCheckTime',
        'procInstId' => 'procInstId',
        'approveId' => 'approveId',
        'locationResult' => 'locationResult',
        'timeResult' => 'timeResult',
        'checkType' => 'checkType',
        'userId' => 'userId',
        'workDate' => 'workDate',
        'recordId' => 'recordId',
        'planId' => 'planId',
        'groupId' => 'groupId',
        'id' => 'id',
    ];
    public function validate() {
        Model::validatePattern('baseCheckTime', $this->baseCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('userCheckTime', $this->userCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->baseCheckTime) {
            $res['baseCheckTime'] = $this->baseCheckTime;
        }
        if (null !== $this->userCheckTime) {
            $res['userCheckTime'] = $this->userCheckTime;
        }
        if (null !== $this->procInstId) {
            $res['procInstId'] = $this->procInstId;
        }
        if (null !== $this->approveId) {
            $res['approveId'] = $this->approveId;
        }
        if (null !== $this->locationResult) {
            $res['locationResult'] = $this->locationResult;
        }
        if (null !== $this->timeResult) {
            $res['timeResult'] = $this->timeResult;
        }
        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->workDate) {
            $res['workDate'] = $this->workDate;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return recordresult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sourceType'])){
            $model->sourceType = $map['sourceType'];
        }
        if(isset($map['baseCheckTime'])){
            $model->baseCheckTime = $map['baseCheckTime'];
        }
        if(isset($map['userCheckTime'])){
            $model->userCheckTime = $map['userCheckTime'];
        }
        if(isset($map['procInstId'])){
            $model->procInstId = $map['procInstId'];
        }
        if(isset($map['approveId'])){
            $model->approveId = $map['approveId'];
        }
        if(isset($map['locationResult'])){
            $model->locationResult = $map['locationResult'];
        }
        if(isset($map['timeResult'])){
            $model->timeResult = $map['timeResult'];
        }
        if(isset($map['checkType'])){
            $model->checkType = $map['checkType'];
        }
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        if(isset($map['workDate'])){
            $model->workDate = $map['workDate'];
        }
        if(isset($map['recordId'])){
            $model->recordId = $map['recordId'];
        }
        if(isset($map['planId'])){
            $model->planId = $map['planId'];
        }
        if(isset($map['groupId'])){
            $model->groupId = $map['groupId'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description sourceType
     * @var string
     */
    public $sourceType;

    /**
     * @description baseCheckTime
     * @var string
     */
    public $baseCheckTime;

    /**
     * @description userCheckTime
     * @var string
     */
    public $userCheckTime;

    /**
     * @description procInstId
     * @var string
     */
    public $procInstId;

    /**
     * @description approveId
     * @var int
     */
    public $approveId;

    /**
     * @description locationResult
     * @var string
     */
    public $locationResult;

    /**
     * @description timeResult
     * @var string
     */
    public $timeResult;

    /**
     * @description checkType
     * @var string
     */
    public $checkType;

    /**
     * @description userId
     * @var string
     */
    public $userId;

    /**
     * @description workDate
     * @var string
     */
    public $workDate;

    /**
     * @description recordId
     * @var int
     */
    public $recordId;

    /**
     * @description planId
     * @var int
     */
    public $planId;

    /**
     * @description groupId
     * @var int
     */
    public $groupId;

    /**
     * @description id
     * @var int
     */
    public $id;

}
