<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\text;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\image;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\file;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\voice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\oa;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\actionCard;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiChatParams\msg\markdown;

class msg extends Model {
    protected $_name = [
        'text' => 'text',
        'msgtype' => 'msgtype',
        'link' => 'link',
        'image' => 'image',
        'file' => 'file',
        'voice' => 'voice',
        'oa' => 'oa',
        'actionCard' => 'action_card',
        'markdown' => 'markdown',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->link) {
            $res['link'] = null !== $this->link ? $this->link->toMap() : null;
        }
        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toMap() : null;
        }
        if (null !== $this->oa) {
            $res['oa'] = null !== $this->oa ? $this->oa->toMap() : null;
        }
        if (null !== $this->actionCard) {
            $res['action_card'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return msg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['text'])){
            $model->text = text::fromMap($map['text']);
        }
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['link'])){
            $model->link = link::fromMap($map['link']);
        }
        if(isset($map['image'])){
            $model->image = image::fromMap($map['image']);
        }
        if(isset($map['file'])){
            $model->file = file::fromMap($map['file']);
        }
        if(isset($map['voice'])){
            $model->voice = voice::fromMap($map['voice']);
        }
        if(isset($map['oa'])){
            $model->oa = oa::fromMap($map['oa']);
        }
        if(isset($map['action_card'])){
            $model->actionCard = actionCard::fromMap($map['action_card']);
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        return $model;
    }
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
     * @description link消息
     * @var link
     */
    public $link;

    /**
     * @description 图片消息
     * @var image
     */
    public $image;

    /**
     * @description 文件消息
     * @var file
     */
    public $file;

    /**
     * @description 语音消息
     * @var voice
     */
    public $voice;

    /**
     * @description oa消息
     * @var oa
     */
    public $oa;

    /**
     * @description action_card卡片消息
     * @var actionCard
     */
    public $actionCard;

    /**
     * @description markdown消息
     * @var markdown
     */
    public $markdown;

}
