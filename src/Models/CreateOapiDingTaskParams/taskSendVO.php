<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiDingTaskParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiDingTaskParams\taskSendVO\attachment;

class taskSendVO extends Model {
    protected $_name = [
        'sendUserid' => 'send_userid',
        'contentType' => 'content_type',
        'content' => 'content',
        'remindType' => 'remind_type',
        'remindTime' => 'remind_time',
        'receiverUserid' => 'receiver_userid',
        'deadLine' => 'dead_line',
        'taskAheadRemindTime' => 'task_ahead_remind_time',
        'taskAheadRemindType' => 'task_ahead_remind_type',
        'attachment' => 'attachment',
    ];
    public function validate() {
        Model::validateRequired('sendUserid', $this->sendUserid, true);
        Model::validateRequired('contentType', $this->contentType, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('remindType', $this->remindType, true);
        Model::validateRequired('receiverUserid', $this->receiverUserid, true);
        Model::validateRequired('deadLine', $this->deadLine, true);
        Model::validateMaxLength('content', $this->content, 256);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->sendUserid) {
            $res['send_userid'] = $this->sendUserid;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->remindType) {
            $res['remind_type'] = $this->remindType;
        }
        if (null !== $this->remindTime) {
            $res['remind_time'] = $this->remindTime;
        }
        if (null !== $this->receiverUserid) {
            $res['receiver_userid'] = $this->receiverUserid;
        }
        if (null !== $this->deadLine) {
            $res['dead_line'] = $this->deadLine;
        }
        if (null !== $this->taskAheadRemindTime) {
            $res['task_ahead_remind_time'] = $this->taskAheadRemindTime;
        }
        if (null !== $this->taskAheadRemindType) {
            $res['task_ahead_remind_type'] = $this->taskAheadRemindType;
        }
        if (null !== $this->attachment) {
            $res['attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return taskSendVO
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['send_userid'])){
            $model->sendUserid = $map['send_userid'];
        }
        if(isset($map['content_type'])){
            $model->contentType = $map['content_type'];
        }
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['remind_type'])){
            $model->remindType = $map['remind_type'];
        }
        if(isset($map['remind_time'])){
            $model->remindTime = $map['remind_time'];
        }
        if(isset($map['receiver_userid'])){
            $model->receiverUserid = $map['receiver_userid'];
        }
        if(isset($map['dead_line'])){
            $model->deadLine = $map['dead_line'];
        }
        if(isset($map['task_ahead_remind_time'])){
            $model->taskAheadRemindTime = $map['task_ahead_remind_time'];
        }
        if(isset($map['task_ahead_remind_type'])){
            $model->taskAheadRemindType = $map['task_ahead_remind_type'];
        }
        if(isset($map['attachment'])){
            $model->attachment = attachment::fromMap($map['attachment']);
        }
        return $model;
    }
    /**
     * @description 发送者ID
     * @var string
     */
    public $sendUserid;

    /**
     * @description 任务内容类型；1-文本；目前只支持文本；
     * @var int
     */
    public $contentType;

    /**
     * @description 任务内容
     * @var string
     */
    public $content;

    /**
     * @description 提醒方式；1-应用内；目前只支持应用内；
     * @var int
     */
    public $remindType;

    /**
     * @description 提醒时间（单位：毫秒），datetime转成long
     * @var int
     */
    public $remindTime;

    /**
     * @description 任务执行人
     * @var string
     */
    public $receiverUserid;

    /**
     * @description 任务截止时间（单位：毫秒），datetime转成long
     * @var int
     */
    public $deadLine;

    /**
     * @description 任务截止前提醒时间
     * @var int
     */
    public $taskAheadRemindTime;

    /**
     * @description 提醒类型:1-应用内
     * @var int
     */
    public $taskAheadRemindType;

    /**
     * @description 附件
     * @var attachment
     */
    public $attachment;

}
