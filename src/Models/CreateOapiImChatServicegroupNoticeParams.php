<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiImChatServicegroupNoticeParams extends Model {
    protected $_name = [
        'chatId' => 'chat_id',
        'userid' => 'userid',
        'uniqueKey' => 'unique_key',
        'sendDing' => 'send_ding',
        'title' => 'title',
        'textContent' => 'text_content',
        'sticky' => 'sticky',
    ];
    public function validate() {
        Model::validateRequired('chatId', $this->chatId, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('uniqueKey', $this->uniqueKey, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('textContent', $this->textContent, true);
        Model::validateMaxLength('title', $this->title, 200);
        Model::validateMaxLength('textContent', $this->textContent, 2000);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->uniqueKey) {
            $res['unique_key'] = $this->uniqueKey;
        }
        if (null !== $this->sendDing) {
            $res['send_ding'] = $this->sendDing;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->textContent) {
            $res['text_content'] = $this->textContent;
        }
        if (null !== $this->sticky) {
            $res['sticky'] = $this->sticky;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiImChatServicegroupNoticeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['unique_key'])){
            $model->uniqueKey = $map['unique_key'];
        }
        if(isset($map['send_ding'])){
            $model->sendDing = $map['send_ding'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['text_content'])){
            $model->textContent = $map['text_content'];
        }
        if(isset($map['sticky'])){
            $model->sticky = $map['sticky'];
        }
        return $model;
    }
    /**
     * @description 要创建群公告的群id
     * @var string
     */
    public $chatId;

    /**
     * @description 创建者id
     * @var string
     */
    public $userid;

    /**
     * @description 唯一性key，由调用方提供，避免重复操作。
     * @var string
     */
    public $uniqueKey;

    /**
     * @description 是否发送ding提醒
     * @var bool
     */
    public $sendDing;

    /**
     * @description 群公告标题
     * @var string
     */
    public $title;

    /**
     * @description 群公告内容
     * @var string
     */
    public $textContent;

    /**
     * @description 是否置顶
     * @var bool
     */
    public $sticky;

}
