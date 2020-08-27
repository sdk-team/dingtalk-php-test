<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'name' => 'name',
        'ext' => 'ext',
        'locationOffset' => 'location_offset',
        'groupKey' => 'group_key',
        'enableFaceCheck' => 'enable_face_check',
        'enableFaceBeauty' => 'enable_face_beauty',
        'enableCameraCheck' => 'enable_camera_check',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ext) {
            $res['ext'] = $this->ext;
        }
        if (null !== $this->locationOffset) {
            $res['location_offset'] = $this->locationOffset;
        }
        if (null !== $this->groupKey) {
            $res['group_key'] = $this->groupKey;
        }
        if (null !== $this->enableFaceCheck) {
            $res['enable_face_check'] = $this->enableFaceCheck;
        }
        if (null !== $this->enableFaceBeauty) {
            $res['enable_face_beauty'] = $this->enableFaceBeauty;
        }
        if (null !== $this->enableCameraCheck) {
            $res['enable_camera_check'] = $this->enableCameraCheck;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['ext'])){
            $model->ext = $map['ext'];
        }
        if(isset($map['location_offset'])){
            $model->locationOffset = $map['location_offset'];
        }
        if(isset($map['group_key'])){
            $model->groupKey = $map['group_key'];
        }
        if(isset($map['enable_face_check'])){
            $model->enableFaceCheck = $map['enable_face_check'];
        }
        if(isset($map['enable_face_beauty'])){
            $model->enableFaceBeauty = $map['enable_face_beauty'];
        }
        if(isset($map['enable_camera_check'])){
            $model->enableCameraCheck = $map['enable_camera_check'];
        }
        return $model;
    }
    /**
     * @description 考勤组名称
     * @var string
     */
    public $name;

    /**
     * @description 扩展字段，JSON格式
     * @var string
     */
    public $ext;

    /**
     * @description 打卡范围，单位：米
     * @var int
     */
    public $locationOffset;

    /**
     * @description 考勤组id
     * @var string
     */
    public $groupKey;

    /**
     * @description 是否开启笑脸打卡(若开启笑脸则默认开启拍照打卡)，默认false
     * @var bool
     */
    public $enableFaceCheck;

    /**
     * @description 是否开启美颜，默认false
     * @var bool
     */
    public $enableFaceBeauty;

    /**
     * @description 是否开启拍照打卡，默认false
     * @var bool
     */
    public $enableCameraCheck;

}
