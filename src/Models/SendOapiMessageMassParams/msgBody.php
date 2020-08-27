<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\voice;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\oa;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\file;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\markdown;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiMessageMassParams\msgBody\actionCard;

class msgBody extends Model {
    protected $_name = [
        'voice' => 'voice',
        'oa' => 'oa',
        'file' => 'file',
        'link' => 'link',
        'markdown' => 'markdown',
        'actionCard' => 'action_card',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toMap() : null;
        }
        if (null !== $this->oa) {
            $res['oa'] = null !== $this->oa ? $this->oa->toMap() : null;
        }
        if (null !== $this->file) {
            $res['file'] = null !== $this->file ? $this->file->toMap() : null;
        }
        if (null !== $this->link) {
            $res['link'] = null !== $this->link ? $this->link->toMap() : null;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        if (null !== $this->actionCard) {
            $res['action_card'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return msgBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['voice'])){
            $model->voice = voice::fromMap($map['voice']);
        }
        if(isset($map['oa'])){
            $model->oa = oa::fromMap($map['oa']);
        }
        if(isset($map['file'])){
            $model->file = file::fromMap($map['file']);
        }
        if(isset($map['link'])){
            $model->link = link::fromMap($map['link']);
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        if(isset($map['action_card'])){
            $model->actionCard = actionCard::fromMap($map['action_card']);
        }
        return $model;
    }
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
     * @description markdown消息
     * @var markdown
     */
    public $markdown;

    /**
     * @description action_card卡片消息
     * @var actionCard
     */
    public $actionCard;

}
