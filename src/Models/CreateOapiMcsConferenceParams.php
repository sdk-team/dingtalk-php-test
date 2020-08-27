<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiMcsConferenceParams extends Model {
    protected $_name = [
        'title' => 'title',
        'bizKey' => 'biz_key',
        'roomValidTime' => 'room_valid_time',
        'isPushRecord' => 'is_push_record',
        'preferenceRegion' => 'preference_region',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('bizKey', $this->bizKey, true);
        Model::validateRequired('roomValidTime', $this->roomValidTime, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->bizKey) {
            $res['biz_key'] = $this->bizKey;
        }
        if (null !== $this->roomValidTime) {
            $res['room_valid_time'] = $this->roomValidTime;
        }
        if (null !== $this->isPushRecord) {
            $res['is_push_record'] = $this->isPushRecord;
        }
        if (null !== $this->preferenceRegion) {
            $res['preference_region'] = $this->preferenceRegion;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiMcsConferenceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['biz_key'])){
            $model->bizKey = $map['biz_key'];
        }
        if(isset($map['room_valid_time'])){
            $model->roomValidTime = $map['room_valid_time'];
        }
        if(isset($map['is_push_record'])){
            $model->isPushRecord = $map['is_push_record'];
        }
        if(isset($map['preference_region'])){
            $model->preferenceRegion = $map['preference_region'];
        }
        return $model;
    }
    /**
     * @description 视频会议标题
     * @var string
     */
    public $title;

    /**
     * @description 由MCS颁发给调用三方的使用凭证
     * @var string
     */
    public $bizKey;

    /**
     * @description 视频会议从创建之时起的最多保留时间
     * @var int
     */
    public $roomValidTime;

    /**
     * @description 是否推送通话记录
     * @var bool
     */
    public $isPushRecord;

    /**
     * @description 倾向发起地 目前支持 CN-HZ/CN-HK/CN-BJ
     * @var string
     */
    public $preferenceRegion;

}
