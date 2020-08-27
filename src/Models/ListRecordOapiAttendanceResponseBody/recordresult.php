<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListRecordOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

class recordresult extends Model {
    protected $_name = [
        'userAccuracy' => 'userAccuracy',
        'userLatitude' => 'userLatitude',
        'userLongitude' => 'userLongitude',
        'userAddress' => 'userAddress',
        'deviceId' => 'deviceId',
        'locationMethod' => 'locationMethod',
        'isLegal' => 'isLegal',
        'userCheckTime' => 'userCheckTime',
        'procInstId' => 'procInstId',
        'baseCheckTime' => 'baseCheckTime',
        'approveId' => 'approveId',
        'timeResult' => 'timeResult',
        'locationResult' => 'locationResult',
        'checkType' => 'checkType',
        'sourceType' => 'sourceType',
        'userId' => 'userId',
        'workDate' => 'workDate',
        'planId' => 'planId',
        'groupId' => 'groupId',
        'id' => 'id',
        'userSsid' => 'userSsid',
        'userMacAddr' => 'userMacAddr',
        'planCheckTime' => 'planCheckTime',
        'baseAddress' => 'baseAddress',
        'baseLongitude' => 'baseLongitude',
        'baseLatitude' => 'baseLatitude',
        'baseAccuracy' => 'baseAccuracy',
        'baseSsid' => 'baseSsid',
        'baseMacAddr' => 'baseMacAddr',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'outsideRemark' => 'outsideRemark',
        'classId' => 'classId',
        'invalidRecordType' => 'invalidRecordType',
        'invalidRecordMsg' => 'invalidRecordMsg',
        'deviceSN' => 'deviceSN',
        'bizId' => 'bizId',
    ];
    public function validate() {
        Model::validatePattern('userCheckTime', $this->userCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('baseCheckTime', $this->baseCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userAccuracy) {
            $res['userAccuracy'] = $this->userAccuracy;
        }
        if (null !== $this->userLatitude) {
            $res['userLatitude'] = $this->userLatitude;
        }
        if (null !== $this->userLongitude) {
            $res['userLongitude'] = $this->userLongitude;
        }
        if (null !== $this->userAddress) {
            $res['userAddress'] = $this->userAddress;
        }
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->locationMethod) {
            $res['locationMethod'] = $this->locationMethod;
        }
        if (null !== $this->isLegal) {
            $res['isLegal'] = $this->isLegal;
        }
        if (null !== $this->userCheckTime) {
            $res['userCheckTime'] = $this->userCheckTime;
        }
        if (null !== $this->procInstId) {
            $res['procInstId'] = $this->procInstId;
        }
        if (null !== $this->baseCheckTime) {
            $res['baseCheckTime'] = $this->baseCheckTime;
        }
        if (null !== $this->approveId) {
            $res['approveId'] = $this->approveId;
        }
        if (null !== $this->timeResult) {
            $res['timeResult'] = $this->timeResult;
        }
        if (null !== $this->locationResult) {
            $res['locationResult'] = $this->locationResult;
        }
        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->workDate) {
            $res['workDate'] = $this->workDate;
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
        if (null !== $this->userSsid) {
            $res['userSsid'] = $this->userSsid;
        }
        if (null !== $this->userMacAddr) {
            $res['userMacAddr'] = $this->userMacAddr;
        }
        if (null !== $this->planCheckTime) {
            $res['planCheckTime'] = $this->planCheckTime;
        }
        if (null !== $this->baseAddress) {
            $res['baseAddress'] = $this->baseAddress;
        }
        if (null !== $this->baseLongitude) {
            $res['baseLongitude'] = $this->baseLongitude;
        }
        if (null !== $this->baseLatitude) {
            $res['baseLatitude'] = $this->baseLatitude;
        }
        if (null !== $this->baseAccuracy) {
            $res['baseAccuracy'] = $this->baseAccuracy;
        }
        if (null !== $this->baseSsid) {
            $res['baseSsid'] = $this->baseSsid;
        }
        if (null !== $this->baseMacAddr) {
            $res['baseMacAddr'] = $this->baseMacAddr;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->outsideRemark) {
            $res['outsideRemark'] = $this->outsideRemark;
        }
        if (null !== $this->classId) {
            $res['classId'] = $this->classId;
        }
        if (null !== $this->invalidRecordType) {
            $res['invalidRecordType'] = $this->invalidRecordType;
        }
        if (null !== $this->invalidRecordMsg) {
            $res['invalidRecordMsg'] = $this->invalidRecordMsg;
        }
        if (null !== $this->deviceSN) {
            $res['deviceSN'] = $this->deviceSN;
        }
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return recordresult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userAccuracy'])){
            $model->userAccuracy = $map['userAccuracy'];
        }
        if(isset($map['userLatitude'])){
            $model->userLatitude = $map['userLatitude'];
        }
        if(isset($map['userLongitude'])){
            $model->userLongitude = $map['userLongitude'];
        }
        if(isset($map['userAddress'])){
            $model->userAddress = $map['userAddress'];
        }
        if(isset($map['deviceId'])){
            $model->deviceId = $map['deviceId'];
        }
        if(isset($map['locationMethod'])){
            $model->locationMethod = $map['locationMethod'];
        }
        if(isset($map['isLegal'])){
            $model->isLegal = $map['isLegal'];
        }
        if(isset($map['userCheckTime'])){
            $model->userCheckTime = $map['userCheckTime'];
        }
        if(isset($map['procInstId'])){
            $model->procInstId = $map['procInstId'];
        }
        if(isset($map['baseCheckTime'])){
            $model->baseCheckTime = $map['baseCheckTime'];
        }
        if(isset($map['approveId'])){
            $model->approveId = $map['approveId'];
        }
        if(isset($map['timeResult'])){
            $model->timeResult = $map['timeResult'];
        }
        if(isset($map['locationResult'])){
            $model->locationResult = $map['locationResult'];
        }
        if(isset($map['checkType'])){
            $model->checkType = $map['checkType'];
        }
        if(isset($map['sourceType'])){
            $model->sourceType = $map['sourceType'];
        }
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        if(isset($map['workDate'])){
            $model->workDate = $map['workDate'];
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
        if(isset($map['userSsid'])){
            $model->userSsid = $map['userSsid'];
        }
        if(isset($map['userMacAddr'])){
            $model->userMacAddr = $map['userMacAddr'];
        }
        if(isset($map['planCheckTime'])){
            $model->planCheckTime = $map['planCheckTime'];
        }
        if(isset($map['baseAddress'])){
            $model->baseAddress = $map['baseAddress'];
        }
        if(isset($map['baseLongitude'])){
            $model->baseLongitude = $map['baseLongitude'];
        }
        if(isset($map['baseLatitude'])){
            $model->baseLatitude = $map['baseLatitude'];
        }
        if(isset($map['baseAccuracy'])){
            $model->baseAccuracy = $map['baseAccuracy'];
        }
        if(isset($map['baseSsid'])){
            $model->baseSsid = $map['baseSsid'];
        }
        if(isset($map['baseMacAddr'])){
            $model->baseMacAddr = $map['baseMacAddr'];
        }
        if(isset($map['gmtCreate'])){
            $model->gmtCreate = $map['gmtCreate'];
        }
        if(isset($map['gmtModified'])){
            $model->gmtModified = $map['gmtModified'];
        }
        if(isset($map['outsideRemark'])){
            $model->outsideRemark = $map['outsideRemark'];
        }
        if(isset($map['classId'])){
            $model->classId = $map['classId'];
        }
        if(isset($map['invalidRecordType'])){
            $model->invalidRecordType = $map['invalidRecordType'];
        }
        if(isset($map['invalidRecordMsg'])){
            $model->invalidRecordMsg = $map['invalidRecordMsg'];
        }
        if(isset($map['deviceSN'])){
            $model->deviceSN = $map['deviceSN'];
        }
        if(isset($map['bizId'])){
            $model->bizId = $map['bizId'];
        }
        return $model;
    }
    /**
     * @description userAccuracy
     * @var string
     */
    public $userAccuracy;

    /**
     * @description userLatitude
     * @var string
     */
    public $userLatitude;

    /**
     * @description userLongitude
     * @var string
     */
    public $userLongitude;

    /**
     * @description userAddress
     * @var string
     */
    public $userAddress;

    /**
     * @description deviceId
     * @var string
     */
    public $deviceId;

    /**
     * @description locationMethod
     * @var string
     */
    public $locationMethod;

    /**
     * @description isLegal
     * @var string
     */
    public $isLegal;

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
     * @description baseCheckTime
     * @var string
     */
    public $baseCheckTime;

    /**
     * @description approveId
     * @var int
     */
    public $approveId;

    /**
     * @description timeResult
     * @var string
     */
    public $timeResult;

    /**
     * @description locationResult
     * @var string
     */
    public $locationResult;

    /**
     * @description checkType
     * @var string
     */
    public $checkType;

    /**
     * @description sourceType
     * @var string
     */
    public $sourceType;

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

    /**
     * @description userSsid
     * @var string
     */
    public $userSsid;

    /**
     * @description userMacAddr
     * @var string
     */
    public $userMacAddr;

    /**
     * @description planCheckTime
     * @var string
     */
    public $planCheckTime;

    /**
     * @description baseAddress
     * @var string
     */
    public $baseAddress;

    /**
     * @description baseLongitude
     * @var string
     */
    public $baseLongitude;

    /**
     * @description baseLatitude
     * @var string
     */
    public $baseLatitude;

    /**
     * @description baseAccuracy
     * @var string
     */
    public $baseAccuracy;

    /**
     * @description baseSsid
     * @var string
     */
    public $baseSsid;

    /**
     * @description baseMacAddr
     * @var string
     */
    public $baseMacAddr;

    /**
     * @description gmtCreate
     * @var string
     */
    public $gmtCreate;

    /**
     * @description gmtModified
     * @var string
     */
    public $gmtModified;

    /**
     * @description outsideRemark
     * @var string
     */
    public $outsideRemark;

    /**
     * @description classId
     * @var int
     */
    public $classId;

    /**
     * @description invalidRecordType
     * @var string
     */
    public $invalidRecordType;

    /**
     * @description invalidRecordMsg
     * @var string
     */
    public $invalidRecordMsg;

    /**
     * @description deviceSN
     * @var string
     */
    public $deviceSN;

    /**
     * @description bizId
     * @var string
     */
    public $bizId;

}
