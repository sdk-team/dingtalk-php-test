<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UploadOapiAttendanceRecordParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'deviceName' => 'device_name',
        'deviceId' => 'device_id',
        'photoUrl' => 'photo_url',
        'userCheckTime' => 'user_check_time',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('userCheckTime', $this->userCheckTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->deviceName) {
            $res['device_name'] = $this->deviceName;
        }
        if (null !== $this->deviceId) {
            $res['device_id'] = $this->deviceId;
        }
        if (null !== $this->photoUrl) {
            $res['photo_url'] = $this->photoUrl;
        }
        if (null !== $this->userCheckTime) {
            $res['user_check_time'] = $this->userCheckTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UploadOapiAttendanceRecordParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['device_name'])){
            $model->deviceName = $map['device_name'];
        }
        if(isset($map['device_id'])){
            $model->deviceId = $map['device_id'];
        }
        if(isset($map['photo_url'])){
            $model->photoUrl = $map['photo_url'];
        }
        if(isset($map['user_check_time'])){
            $model->userCheckTime = $map['user_check_time'];
        }
        return $model;
    }
    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 打卡设备名称
     * @var string
     */
    public $deviceName;

    /**
     * @description 设备唯一标识
     * @var string
     */
    public $deviceId;

    /**
     * @description 打卡备注图片地址，必须是公网可访问的地址
     * @var string
     */
    public $photoUrl;

    /**
     * @description 员工打卡的时间
     * @var int
     */
    public $userCheckTime;

}
