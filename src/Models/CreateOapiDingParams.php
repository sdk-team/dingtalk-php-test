<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiDingParams\attachment;

class CreateOapiDingParams extends Model {
    protected $_name = [
        'creatorUserid' => 'creator_userid',
        'receiverUserids' => 'receiver_userids',
        'remindType' => 'remind_type',
        'remindTime' => 'remind_time',
        'textContent' => 'text_content',
        'attachment' => 'attachment',
    ];
    public function validate() {
        Model::validateRequired('creatorUserid', $this->creatorUserid, true);
        Model::validateRequired('receiverUserids', $this->receiverUserids, true);
        Model::validateRequired('remindType', $this->remindType, true);
        Model::validateRequired('remindTime', $this->remindTime, true);
        Model::validateRequired('textContent', $this->textContent, true);
        Model::validateMaxLength('textContent', $this->textContent, 5000);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->receiverUserids) {
            $res['receiver_userids'] = $this->receiverUserids;
        }
        if (null !== $this->remindType) {
            $res['remind_type'] = $this->remindType;
        }
        if (null !== $this->remindTime) {
            $res['remind_time'] = $this->remindTime;
        }
        if (null !== $this->textContent) {
            $res['text_content'] = $this->textContent;
        }
        if (null !== $this->attachment) {
            $res['attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiDingParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['receiver_userids'])){
            if(!empty($map['receiver_userids'])){
                $model->receiverUserids = $map['receiver_userids'];
            }
        }
        if(isset($map['remind_type'])){
            $model->remindType = $map['remind_type'];
        }
        if(isset($map['remind_time'])){
            $model->remindTime = $map['remind_time'];
        }
        if(isset($map['text_content'])){
            $model->textContent = $map['text_content'];
        }
        if(isset($map['attachment'])){
            $model->attachment = attachment::fromMap($map['attachment']);
        }
        return $model;
    }
    /**
     * @description 发送者工号
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 接收者工号列表
     * @var array
     */
    public $receiverUserids;

    /**
     * @description 提醒类型:1-应用内;2-短信
     * @var int
     */
    public $remindType;

    /**
     * @description 发送时间(单位:毫秒)
     * @var int
     */
    public $remindTime;

    /**
     * @description 通知内容
     * @var string
     */
    public $textContent;

    /**
     * @description 附件内容
     * @var attachment
     */
    public $attachment;

}
