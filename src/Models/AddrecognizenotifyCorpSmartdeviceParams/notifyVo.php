<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddrecognizenotifyCorpSmartdeviceParams;

use AlibabaCloud\Tea\Model;

class notifyVo extends Model {
    protected $_name = [
        'notifyUserList' => 'notify_user_list',
        'notifyType' => 'notify_type',
        'notifyTemplate' => 'notify_template',
        'recognizeStarttime' => 'recognize_starttime',
        'recognizeEndtime' => 'recognize_endtime',
        'appointedEndtime' => 'appointed_endtime',
        'appointedStarttime' => 'appointed_starttime',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('notifyType', $this->notifyType, true);
        Model::validateRequired('notifyTemplate', $this->notifyTemplate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->notifyUserList) {
            $res['notify_user_list'] = $this->notifyUserList;
        }
        if (null !== $this->notifyType) {
            $res['notify_type'] = $this->notifyType;
        }
        if (null !== $this->notifyTemplate) {
            $res['notify_template'] = $this->notifyTemplate;
        }
        if (null !== $this->recognizeStarttime) {
            $res['recognize_starttime'] = $this->recognizeStarttime;
        }
        if (null !== $this->recognizeEndtime) {
            $res['recognize_endtime'] = $this->recognizeEndtime;
        }
        if (null !== $this->appointedEndtime) {
            $res['appointed_endtime'] = $this->appointedEndtime;
        }
        if (null !== $this->appointedStarttime) {
            $res['appointed_starttime'] = $this->appointedStarttime;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return notifyVo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['notify_user_list'])){
            if(!empty($map['notify_user_list'])){
                $model->notifyUserList = $map['notify_user_list'];
            }
        }
        if(isset($map['notify_type'])){
            $model->notifyType = $map['notify_type'];
        }
        if(isset($map['notify_template'])){
            $model->notifyTemplate = $map['notify_template'];
        }
        if(isset($map['recognize_starttime'])){
            $model->recognizeStarttime = $map['recognize_starttime'];
        }
        if(isset($map['recognize_endtime'])){
            $model->recognizeEndtime = $map['recognize_endtime'];
        }
        if(isset($map['appointed_endtime'])){
            $model->appointedEndtime = $map['appointed_endtime'];
        }
        if(isset($map['appointed_starttime'])){
            $model->appointedStarttime = $map['appointed_starttime'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 被通知的用户列表
     * @var array
     */
    public $notifyUserList;

    /**
     * @description 通知类型 仅支持1：用户
     * @var int
     */
    public $notifyType;

    /**
     * @description 消息内容的模板，key向智能硬件团队申请
     * @var string
     */
    public $notifyTemplate;

    /**
     * @description 识别开始时间 timestamp(毫秒)
     * @var int
     */
    public $recognizeStarttime;

    /**
     * @description 识别结束时间 timestamp(毫秒)
     * @var int
     */
    public $recognizeEndtime;

    /**
     * @description 预约开始时间 timestamp(毫秒)
     * @var int
     */
    public $appointedEndtime;

    /**
     * @description 预约结束时间 timestamp(毫秒)
     * @var int
     */
    public $appointedStarttime;

    /**
     * @description 联系人id
     * @var string
     */
    public $userid;

}
