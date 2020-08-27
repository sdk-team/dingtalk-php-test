<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\actionCard;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\oa;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\voice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\file;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\image;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\text;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\markdown;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg;

class SendOapiChatParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'actionCard' => 'action_card',
        'oa' => 'oa',
        'voice' => 'voice',
        'file' => 'file',
        'image' => 'image',
        'link' => 'link',
        'text' => 'text',
        'msgtype' => 'msgtype',
        'markdown' => 'markdown',
        'msg' => 'msg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->actionCard) {
            $res['action_card'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
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
        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->link) {
            $res['link'] = null !== $this->link ? $this->link->toMap() : null;
        }
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        if (null !== $this->msg) {
            $res['msg'] = null !== $this->msg ? $this->msg->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['action_card'])){
            $model->actionCard = actionCard::fromMap($map['action_card']);
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
        if(isset($map['image'])){
            $model->image = image::fromMap($map['image']);
        }
        if(isset($map['link'])){
            $model->link = link::fromMap($map['link']);
        }
        if(isset($map['text'])){
            $model->text = text::fromMap($map['text']);
        }
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        if(isset($map['msg'])){
            $model->msg = msg::fromMap($map['msg']);
        }
        return $model;
    }
    /**
     * @description 群会话id
     * @var string
     */
    public $chatid;

    /**
     * @description actionCard消息
     * @var actionCard
     */
    public $actionCard;

    /**
     * @description OA消息
     * @var oa
     */
    public $oa;

    /**
     * @description 语音消息
     * @var voice
     */
    public $voice;

    /**
     * @description 文件消息
     * @var file
     */
    public $file;

    /**
     * @description 图片消息
     * @var image
     */
    public $image;

    /**
     * @description 链接消息
     * @var link
     */
    public $link;

    /**
     * @description 文本消息
     * @var text
     */
    public $text;

    /**
     * @description 消息类型
     * @var string
     */
    public $msgtype;

    /**
     * @description markdown消息
     * @var markdown
     */
    public $markdown;

    /**
     * @description 消息格式
     * @var msg
     */
    public $msg;

}
