<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiSmartdeviceFacegroupParams extends Model {
    protected $_name = [
        'bizId' => 'biz_id',
        'title' => 'title',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
        'status' => 'status',
        'greetingMsg' => 'greeting_msg',
        'bgImgUrl' => 'bg_img_url',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateMaxLength('bizId', $this->bizId, 23);
        Model::validateMaxLength('title', $this->title, 32);
        Model::validateMaxLength('greetingMsg', $this->greetingMsg, 16);
        Model::validateMaxLength('bgImgUrl', $this->bgImgUrl, 512);
        Model::validateMaximum('status', $this->status, 2);
        Model::validateMinimum('status', $this->status, 1);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->greetingMsg) {
            $res['greeting_msg'] = $this->greetingMsg;
        }
        if (null !== $this->bgImgUrl) {
            $res['bg_img_url'] = $this->bgImgUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiSmartdeviceFacegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['greeting_msg'])){
            $model->greetingMsg = $map['greeting_msg'];
        }
        if(isset($map['bg_img_url'])){
            $model->bgImgUrl = $map['bg_img_url'];
        }
        return $model;
    }
    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

    /**
     * @description 识别组的标题
     * @var string
     */
    public $title;

    /**
     * @description 开始时间
     * @var int
     */
    public $startTime;

    /**
     * @description 结束时间
     * @var int
     */
    public $endTime;

    /**
     * @description 识别组启用状态：1-已启用；2未启用；
     * @var int
     */
    public $status;

    /**
     * @description 识别成功后的问候语
     * @var string
     */
    public $greetingMsg;

    /**
     * @description M2上的定制UI
     * @var string
     */
    public $bgImgUrl;

}
