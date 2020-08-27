<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RecordOapiCheckinResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'name' => 'name',
        'userId' => 'userId',
        'avatar' => 'avatar',
        'timestamp' => 'timestamp',
        'place' => 'place',
        'detailPlace' => 'detailPlace',
        'remark' => 'remark',
        'imageList' => 'imageList',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->place) {
            $res['place'] = $this->place;
        }
        if (null !== $this->detailPlace) {
            $res['detailPlace'] = $this->detailPlace;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->imageList) {
            $res['imageList'] = $this->imageList;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['userId'])){
            $model->userId = $map['userId'];
        }
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['timestamp'])){
            $model->timestamp = $map['timestamp'];
        }
        if(isset($map['place'])){
            $model->place = $map['place'];
        }
        if(isset($map['detailPlace'])){
            $model->detailPlace = $map['detailPlace'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['imageList'])){
            if(!empty($map['imageList'])){
                $model->imageList = $map['imageList'];
            }
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        return $model;
    }
    /**
     * @description 成员名称
     * @var string
     */
    public $name;

    /**
     * @description 员工唯一标识ID（不可修改）
     * @var string
     */
    public $userId;

    /**
     * @description 头像url
     * @var string
     */
    public $avatar;

    /**
     * @description 签到时间
     * @var int
     */
    public $timestamp;

    /**
     * @description 签到地址
     * @var string
     */
    public $place;

    /**
     * @description 签到详细地址
     * @var string
     */
    public $detailPlace;

    /**
     * @description 签到备注
     * @var string
     */
    public $remark;

    /**
     * @description 签到照片url列表
     * @var array
     */
    public $imageList;

    /**
     * @description 纬度
     * @var string
     */
    public $latitude;

    /**
     * @description 经度
     * @var string
     */
    public $longitude;

}
