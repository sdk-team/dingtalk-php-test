<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SubmitOapiEduCardTaskParams extends Model {
    protected $_name = [
        'content' => 'content',
        'meteringNumber' => 'metering_number',
        'userCardTaskId' => 'user_card_task_id',
        'cardType' => 'card_type',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->meteringNumber) {
            $res['metering_number'] = $this->meteringNumber;
        }
        if (null !== $this->userCardTaskId) {
            $res['user_card_task_id'] = $this->userCardTaskId;
        }
        if (null !== $this->cardType) {
            $res['card_type'] = $this->cardType;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitOapiEduCardTaskParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['content'])){
            $model->content = $map['content'];
        }
        if(isset($map['metering_number'])){
            $model->meteringNumber = $map['metering_number'];
        }
        if(isset($map['user_card_task_id'])){
            $model->userCardTaskId = $map['user_card_task_id'];
        }
        if(isset($map['card_type'])){
            $model->cardType = $map['card_type'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 打卡内容
     * @var string
     */
    public $content;

    /**
     * @description 计量数量
     * @var string
     */
    public $meteringNumber;

    /**
     * @description 任务id
     * @var int
     */
    public $userCardTaskId;

    /**
     * @description 打卡类型,跳绳:jump
     * @var string
     */
    public $cardType;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
