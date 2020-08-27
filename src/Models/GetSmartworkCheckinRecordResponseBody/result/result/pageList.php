<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetSmartworkCheckinRecordResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class pageList extends Model {
    protected $_name = [
        'checkinTime' => 'checkin_time',
        'imageList' => 'image_list',
        'detailPlace' => 'detail_place',
        'remark' => 'remark',
        'userid' => 'userid',
        'place' => 'place',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
        'visitUser' => 'visit_user',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->checkinTime) {
            $res['checkin_time'] = $this->checkinTime;
        }
        if (null !== $this->imageList) {
            $res['image_list'] = $this->imageList;
        }
        if (null !== $this->detailPlace) {
            $res['detail_place'] = $this->detailPlace;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->place) {
            $res['place'] = $this->place;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->visitUser) {
            $res['visit_user'] = $this->visitUser;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return pageList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['checkin_time'])){
            $model->checkinTime = $map['checkin_time'];
        }
        if(isset($map['image_list'])){
            if(!empty($map['image_list'])){
                $model->imageList = $map['image_list'];
            }
        }
        if(isset($map['detail_place'])){
            $model->detailPlace = $map['detail_place'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['place'])){
            $model->place = $map['place'];
        }
        if(isset($map['longitude'])){
            $model->longitude = $map['longitude'];
        }
        if(isset($map['latitude'])){
            $model->latitude = $map['latitude'];
        }
        if(isset($map['visit_user'])){
            $model->visitUser = $map['visit_user'];
        }
        return $model;
    }
    /**
     * @description 签到时间,单位毫秒
     * @var int
     */
    public $checkinTime;

    /**
     * @description 签到照片url列表
     * @var array
     */
    public $imageList;

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
     * @description 员工唯一标识
     * @var string
     */
    public $userid;

    /**
     * @description 签到地址
     * @var string
     */
    public $place;

    /**
     * @description 签到位置经度（暂未开放）
     * @var string
     */
    public $longitude;

    /**
     * @description 签到位置维度（暂未开放）
     * @var string
     */
    public $latitude;

    /**
     * @description 签到的拜访对象，可以为外部联系人的userid或者用户自己输入的名字
     * @var string
     */
    public $visitUser;

}
