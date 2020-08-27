<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetupdatedataOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class checkRecordList extends Model {
    protected $_name = [
        'recordId' => 'record_id',
        'sourceType' => 'source_type',
        'userAccuracy' => 'user_accuracy',
        'validMatched' => 'valid_matched',
        'userCheckTime' => 'user_check_time',
        'userLongitude' => 'user_longitude',
        'userSsid' => 'user_ssid',
        'baseAccuracy' => 'base_accuracy',
        'userMacAddr' => 'user_mac_addr',
        'userLatitude' => 'user_latitude',
        'baseAddress' => 'base_address',
        'invalidRecordMsg' => 'invalid_record_msg',
        'invalidRecordType' => 'invalid_record_type',
    ];
    public function validate() {
        Model::validatePattern('userCheckTime', $this->userCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        if (null !== $this->sourceType) {
            $res['source_type'] = $this->sourceType;
        }
        if (null !== $this->userAccuracy) {
            $res['user_accuracy'] = $this->userAccuracy;
        }
        if (null !== $this->validMatched) {
            $res['valid_matched'] = $this->validMatched;
        }
        if (null !== $this->userCheckTime) {
            $res['user_check_time'] = $this->userCheckTime;
        }
        if (null !== $this->userLongitude) {
            $res['user_longitude'] = $this->userLongitude;
        }
        if (null !== $this->userSsid) {
            $res['user_ssid'] = $this->userSsid;
        }
        if (null !== $this->baseAccuracy) {
            $res['base_accuracy'] = $this->baseAccuracy;
        }
        if (null !== $this->userMacAddr) {
            $res['user_mac_addr'] = $this->userMacAddr;
        }
        if (null !== $this->userLatitude) {
            $res['user_latitude'] = $this->userLatitude;
        }
        if (null !== $this->baseAddress) {
            $res['base_address'] = $this->baseAddress;
        }
        if (null !== $this->invalidRecordMsg) {
            $res['invalid_record_msg'] = $this->invalidRecordMsg;
        }
        if (null !== $this->invalidRecordType) {
            $res['invalid_record_type'] = $this->invalidRecordType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return checkRecordList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        if(isset($map['source_type'])){
            $model->sourceType = $map['source_type'];
        }
        if(isset($map['user_accuracy'])){
            $model->userAccuracy = $map['user_accuracy'];
        }
        if(isset($map['valid_matched'])){
            $model->validMatched = $map['valid_matched'];
        }
        if(isset($map['user_check_time'])){
            $model->userCheckTime = $map['user_check_time'];
        }
        if(isset($map['user_longitude'])){
            $model->userLongitude = $map['user_longitude'];
        }
        if(isset($map['user_ssid'])){
            $model->userSsid = $map['user_ssid'];
        }
        if(isset($map['base_accuracy'])){
            $model->baseAccuracy = $map['base_accuracy'];
        }
        if(isset($map['user_mac_addr'])){
            $model->userMacAddr = $map['user_mac_addr'];
        }
        if(isset($map['user_latitude'])){
            $model->userLatitude = $map['user_latitude'];
        }
        if(isset($map['base_address'])){
            $model->baseAddress = $map['base_address'];
        }
        if(isset($map['invalid_record_msg'])){
            $model->invalidRecordMsg = $map['invalid_record_msg'];
        }
        if(isset($map['invalid_record_type'])){
            $model->invalidRecordType = $map['invalid_record_type'];
        }
        return $model;
    }
    /**
     * @description 流水id
     * @var int
     */
    public $recordId;

    /**
     * @description 打卡来源
     * @var string
     */
    public $sourceType;

    /**
     * @description 用户定位精度
     * @var string
     */
    public $userAccuracy;

    /**
     * @description 是否匹配
     * @var bool
     */
    public $validMatched;

    /**
     * @description 用户打卡时间
     * @var string
     */
    public $userCheckTime;

    /**
     * @description 打卡维度
     * @var string
     */
    public $userLongitude;

    /**
     * @description wifi名称
     * @var string
     */
    public $userSsid;

    /**
     * @description 基本定位精度
     * @var string
     */
    public $baseAccuracy;

    /**
     * @description mac地址
     * @var string
     */
    public $userMacAddr;

    /**
     * @description 打卡纬度
     * @var string
     */
    public $userLatitude;

    /**
     * @description 打卡基础地质
     * @var string
     */
    public $baseAddress;

    /**
     * @description 流水无效的原因
     * @var string
     */
    public $invalidRecordMsg;

    /**
     * @description 流水无效的类型
     * @var string
     */
    public $invalidRecordType;

}
