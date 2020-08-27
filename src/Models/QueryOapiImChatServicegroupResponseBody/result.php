<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImChatServicegroupResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'url' => 'url',
        'title' => 'title',
        'openConversationId' => 'open_conversation_id',
        'memberCount' => 'member_count',
        'adminCount' => 'admin_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->openConversationId) {
            $res['open_conversation_id'] = $this->openConversationId;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->adminCount) {
            $res['admin_count'] = $this->adminCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['open_conversation_id'])){
            $model->openConversationId = $map['open_conversation_id'];
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['admin_count'])){
            $model->adminCount = $map['admin_count'];
        }
        return $model;
    }
    /**
     * @description 群链接
     * @var string
     */
    public $url;

    /**
     * @description 群标题
     * @var string
     */
    public $title;

    /**
     * @description 开放的会话id
     * @var string
     */
    public $openConversationId;

    /**
     * @description 全部成员数量
     * @var int
     */
    public $memberCount;

    /**
     * @description 管理员数量
     * @var int
     */
    public $adminCount;

}
