<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\markdown;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\oa;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\voice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\file;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\image;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\text;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\actionCard;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg;

class Send_to_conversationOapiMessageParams extends Model {
    protected $_name = [
        'sender' => 'sender',
        'markdown' => 'markdown',
        'oa' => 'oa',
        'voice' => 'voice',
        'file' => 'file',
        'link' => 'link',
        'image' => 'image',
        'text' => 'text',
        'msgtype' => 'msgtype',
        'cid' => 'cid',
        'actionCard' => 'action_card',
        'msg' => 'msg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sender) {
            $res['sender'] = $this->sender;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        if (null !== $this->oa) {
            $res['oa'] = null !== $this->oa ? $this->oa->toMap() : null;
        }
        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toMap() : null;
        }
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->link) {
            $res['link'] = null !== $this->link ? $this->link->toMap() : null;
        }
        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->actionCard) {
            $res['action_card'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['msg'] = null !== $this->msg ? $this->msg->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Send_to_conversationOapiMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sender'])){
            $model->sender = $map['sender'];
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        if(isset($map['oa'])){
            $model->oa = oa::fromMap($map['oa']);
        }
        if(isset($map['voice'])){
            $model->voice = voice::fromMap($map['voice']);
        }
        if(isset($map['file'])){
            $model->file = file::fromMap($map['file']);
        }
        if(isset($map['link'])){
            $model->link = link::fromMap($map['link']);
        }
        if(isset($map['image'])){
            $model->image = image::fromMap($map['image']);
        }
        if(isset($map['text'])){
            $model->text = text::fromMap($map['text']);
        }
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['action_card'])){
            $model->actionCard = actionCard::fromMap($map['action_card']);
        }
        if(isset($map['msg'])){
            $model->msg = msg::fromMap($map['msg']);
        }
        return $model;
    }
    /**
     * @description 消息发送者员工ID
     * @var string
     */
    public $sender;

    /**
     * @description markdown消息
     * @var markdown
     */
    public $markdown;

    /**
     * @description OA消息
     * @var oa
     */
    public $oa;

    /**
     * @description voice消息
     * @var voice
     */
    public $voice;

    /**
     * @description file消息
     * @var file
     */
    public $file;

    /**
     * @description link消息
     * @var link
     */
    public $link;

    /**
     * @description image消息
     * @var image
     */
    public $image;

    /**
     * @description text消息
     * @var text
     */
    public $text;

    /**
     * @description 消息类型
     * @var string
     */
    public $msgtype;

    /**
     * @description 群消息或者个人聊天会话Id，(通过JSAPI之pickConversation接口唤起联系人界面选择之后即可拿到会话ID，之后您可以使用获取到的cid调用此接口）
     * @var string
     */
    public $cid;

    /**
     * @description ActionCard消息
     * @var actionCard
     */
    public $actionCard;

    /**
     * @description 消息内容
     * @var msg
     */
    public $msg;

}
