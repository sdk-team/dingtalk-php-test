<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\actionCard;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\markdown;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\oa;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\voice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\file;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\image;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_to_conversationOapiMessageParams\msg\text;

class msg extends Model {
    protected $_name = [
        'actionCard' => 'action_card',
        'markdown' => 'markdown',
        'oa' => 'oa',
        'voice' => 'voice',
        'file' => 'file',
        'link' => 'link',
        'image' => 'image',
        'text' => 'text',
        'msgtype' => 'msgtype',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionCard) {
            $res['action_card'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
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
        return $res;
    }
    /**
     * @param array $map
     * @return msg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['action_card'])){
            $model->actionCard = actionCard::fromMap($map['action_card']);
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
        return $model;
    }
    /**
     * @description 消息内容，支持markdown，语法参考标准markdown语法。图片举例：![alt text](mediaId)
     * @var actionCard
     */
    public $actionCard;

    /**
     * @description markdown消息
     * @var markdown
     */
    public $markdown;

    /**
     * @description oa消息
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
     * @description 链接消息
     * @var link
     */
    public $link;

    /**
     * @description 图片消息
     * @var image
     */
    public $image;

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

}
