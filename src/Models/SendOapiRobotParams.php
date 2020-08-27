<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\text;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\at;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\link;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\markdown;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\actionCard;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiRobotParams\feedCard;

class SendOapiRobotParams extends Model {
    protected $_name = [
        'msgtype' => 'msgtype',
        'text' => 'text',
        'at' => 'at',
        'link' => 'link',
        'markdown' => 'markdown',
        'actionCard' => 'actionCard',
        'feedCard' => 'feedCard',
    ];
    public function validate() {
        Model::validateRequired('msgtype', $this->msgtype, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toMap() : null;
        }
        if (null !== $this->at) {
            $res['at'] = null !== $this->at ? $this->at->toMap() : null;
        }
        if (null !== $this->link) {
            $res['link'] = null !== $this->link ? $this->link->toMap() : null;
        }
        if (null !== $this->markdown) {
            $res['markdown'] = null !== $this->markdown ? $this->markdown->toMap() : null;
        }
        if (null !== $this->actionCard) {
            $res['actionCard'] = null !== $this->actionCard ? $this->actionCard->toMap() : null;
        }
        if (null !== $this->feedCard) {
            $res['feedCard'] = null !== $this->feedCard ? $this->feedCard->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiRobotParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['text'])){
            $model->text = text::fromMap($map['text']);
        }
        if(isset($map['at'])){
            $model->at = at::fromMap($map['at']);
        }
        if(isset($map['link'])){
            $model->link = link::fromMap($map['link']);
        }
        if(isset($map['markdown'])){
            $model->markdown = markdown::fromMap($map['markdown']);
        }
        if(isset($map['actionCard'])){
            $model->actionCard = actionCard::fromMap($map['actionCard']);
        }
        if(isset($map['feedCard'])){
            $model->feedCard = feedCard::fromMap($map['feedCard']);
        }
        return $model;
    }
    /**
     * @description 消息类型
     * @var string
     */
    public $msgtype;

    /**
     * @description text类型
     * @var text
     */
    public $text;

    /**
     * @description 被@人的手机号
     * @var at
     */
    public $at;

    /**
     * @description 消息类型，此时固定为:link
     * @var link
     */
    public $link;

    /**
     * @description 此消息类型为固定markdown
     * @var markdown
     */
    public $markdown;

    /**
     * @description 此消息类型为固定actionCard
     * @var actionCard
     */
    public $actionCard;

    /**
     * @description 此消息类型为固定feedCard
     * @var feedCard
     */
    public $feedCard;

}
