<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavChatSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'groupChatUserCount' => 'group_chat_user_count',
        'messageTotalCount' => 'message_total_count',
        'messageUserCount' => 'message_user_count',
        'chatUserCount' => 'chat_user_count',
        'groupCount' => 'group_count',
        'newGroupCount' => 'new_group_count',
        'activeGroupCount' => 'active_group_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupChatUserCount) {
            $res['group_chat_user_count'] = $this->groupChatUserCount;
        }
        if (null !== $this->messageTotalCount) {
            $res['message_total_count'] = $this->messageTotalCount;
        }
        if (null !== $this->messageUserCount) {
            $res['message_user_count'] = $this->messageUserCount;
        }
        if (null !== $this->chatUserCount) {
            $res['chat_user_count'] = $this->chatUserCount;
        }
        if (null !== $this->groupCount) {
            $res['group_count'] = $this->groupCount;
        }
        if (null !== $this->newGroupCount) {
            $res['new_group_count'] = $this->newGroupCount;
        }
        if (null !== $this->activeGroupCount) {
            $res['active_group_count'] = $this->activeGroupCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_chat_user_count'])){
            $model->groupChatUserCount = $map['group_chat_user_count'];
        }
        if(isset($map['message_total_count'])){
            $model->messageTotalCount = $map['message_total_count'];
        }
        if(isset($map['message_user_count'])){
            $model->messageUserCount = $map['message_user_count'];
        }
        if(isset($map['chat_user_count'])){
            $model->chatUserCount = $map['chat_user_count'];
        }
        if(isset($map['group_count'])){
            $model->groupCount = $map['group_count'];
        }
        if(isset($map['new_group_count'])){
            $model->newGroupCount = $map['new_group_count'];
        }
        if(isset($map['active_group_count'])){
            $model->activeGroupCount = $map['active_group_count'];
        }
        return $model;
    }
    /**
     * @description 群聊用户数
     * @var int
     */
    public $groupChatUserCount;

    /**
     * @description 消息数
     * @var int
     */
    public $messageTotalCount;

    /**
     * @description 聊天用户数
     * @var int
     */
    public $messageUserCount;

    /**
     * @description 单聊用户数
     * @var int
     */
    public $chatUserCount;

    /**
     * @description 总群数
     * @var int
     */
    public $groupCount;

    /**
     * @description 新增群数（当日）
     * @var int
     */
    public $newGroupCount;

    /**
     * @description 活跃群数（当日）
     * @var int
     */
    public $activeGroupCount;

}
