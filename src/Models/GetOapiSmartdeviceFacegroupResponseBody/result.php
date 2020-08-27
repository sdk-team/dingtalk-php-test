<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiSmartdeviceFacegroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'greetingMsg' => 'greeting_msg',
        'bgImgUrl' => 'bg_img_url',
        'status' => 'status',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'title' => 'title',
        'bizId' => 'biz_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->greetingMsg) {
            $res['greeting_msg'] = $this->greetingMsg;
        }
        if (null !== $this->bgImgUrl) {
            $res['bg_img_url'] = $this->bgImgUrl;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['greeting_msg'])){
            $model->greetingMsg = $map['greeting_msg'];
        }
        if(isset($map['bg_img_url'])){
            $model->bgImgUrl = $map['bg_img_url'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        return $model;
    }
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

    /**
     * @description 识别组启用状态：1-已启用；2未启用；
     * @var int
     */
    public $status;

    /**
     * @description 结束时间
     * @var int
     */
    public $endTime;

    /**
     * @description 开始时间
     * @var int
     */
    public $startTime;

    /**
     * @description 识别组的标题
     * @var string
     */
    public $title;

    /**
     * @description 业务id
     * @var string
     */
    public $bizId;

}
