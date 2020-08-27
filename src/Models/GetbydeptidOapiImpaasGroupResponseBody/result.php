<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbydeptidOapiImpaasGroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'owner' => 'owner',
        'tag' => 'tag',
        'icon' => 'icon',
        'title' => 'title',
        'openConversationId' => 'open_conversation_id',
        'conversationId' => 'conversation_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['owner'])){
            $model->owner = $map['owner'];
        }
        if(isset($map['tag'])){
            $model->tag = $map['tag'];
        }
        if(isset($map['icon'])){
            $model->icon = $map['icon'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        return $model;
    }
    /**
     * @description owner
     * @var int
     */
    public $owner;

    /**
     * @description tag
     * @var int
     */
    public $tag;

    /**
     * @description icon
     * @var string
     */
    public $icon;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description open_conversation_id
     * @var string
     */
    public $openConversationId;

    /**
     * @description conversation_id
     * @var string
     */
    public $conversationId;

}
