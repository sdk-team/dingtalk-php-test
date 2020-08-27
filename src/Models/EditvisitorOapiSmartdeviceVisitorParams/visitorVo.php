<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\EditvisitorOapiSmartdeviceVisitorParams;

use AlibabaCloud\Tea\Model;

class visitorVo extends Model {
    protected $_name = [
        'appointedEndtime' => 'appointed_endtime',
        'appointedStarttime' => 'appointed_starttime',
        'extraInfo' => 'extra_info',
        'mediaId' => 'media_id',
        'mobile' => 'mobile',
        'notifyUserList' => 'notify_user_list',
        'recognizeEndtime' => 'recognize_endtime',
        'recognizeStarttime' => 'recognize_starttime',
        'userName' => 'user_name',
        'userid' => 'userid',
        'userType' => 'user_type',
    ];
    public function validate() {
        Model::validateRequired('appointedEndtime', $this->appointedEndtime, true);
        Model::validateRequired('appointedStarttime', $this->appointedStarttime, true);
        Model::validateRequired('notifyUserList', $this->notifyUserList, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('userType', $this->userType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appointedEndtime) {
            $res['appointed_endtime'] = $this->appointedEndtime;
        }
        if (null !== $this->appointedStarttime) {
            $res['appointed_starttime'] = $this->appointedStarttime;
        }
        if (null !== $this->extraInfo) {
            $res['extra_info'] = $this->extraInfo;
        }
        if (null !== $this->mediaId) {
            $res['media_id'] = $this->mediaId;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->notifyUserList) {
            $res['notify_user_list'] = $this->notifyUserList;
        }
        if (null !== $this->recognizeEndtime) {
            $res['recognize_endtime'] = $this->recognizeEndtime;
        }
        if (null !== $this->recognizeStarttime) {
            $res['recognize_starttime'] = $this->recognizeStarttime;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return visitorVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['appointed_endtime'])){
            $model->appointedEndtime = $map['appointed_endtime'];
        }
        if(isset($map['appointed_starttime'])){
            $model->appointedStarttime = $map['appointed_starttime'];
        }
        if(isset($map['extra_info'])){
            $model->extraInfo = $map['extra_info'];
        }
        if(isset($map['media_id'])){
            $model->mediaId = $map['media_id'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['notify_user_list'])){
            if(!empty($map['notify_user_list'])){
                $model->notifyUserList = $map['notify_user_list'];
            }
        }
        if(isset($map['recognize_endtime'])){
            $model->recognizeEndtime = $map['recognize_endtime'];
        }
        if(isset($map['recognize_starttime'])){
            $model->recognizeStarttime = $map['recognize_starttime'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_type'])){
            $model->userType = $map['user_type'];
        }
        return $model;
    }
    /**
     * @description 预约开始时间
     * @var int
     */
    public $appointedEndtime;

    /**
     * @description 预约结束时间
     * @var int
     */
    public $appointedStarttime;

    /**
     * @description 扩展信息
     * @var string
     */
    public $extraInfo;

    /**
     * @description 可识别照片
     * @var string
     */
    public $mediaId;

    /**
     * @description 访客手机号
     * @var string
     */
    public $mobile;

    /**
     * @description 通知用户ID
     * @var array
     */
    public $notifyUserList;

    /**
     * @description 识别开始时间
     * @var int
     */
    public $recognizeEndtime;

    /**
     * @description 识别结束时间
     * @var int
     */
    public $recognizeStarttime;

    /**
     * @description 访客姓名
     * @var string
     */
    public $userName;

    /**
     * @description 访客外部联系人ID
     * @var string
     */
    public $userid;

    /**
     * @description 来访目的
     * @var string
     */
    public $userType;

}
