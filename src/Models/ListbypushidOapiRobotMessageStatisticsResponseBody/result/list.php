<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbypushidOapiRobotMessageStatisticsResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'groupMemberUnreadCount' => 'group_member_unread_count',
        'groupMemberCount' => 'group_member_count',
        'conversationId' => 'conversation_id',
        'pushId' => 'push_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groupMemberUnreadCount) {
            $res['group_member_unread_count'] = $this->groupMemberUnreadCount;
        }
        if (null !== $this->groupMemberCount) {
            $res['group_member_count'] = $this->groupMemberCount;
        }
        if (null !== $this->conversationId) {
            $res['conversation_id'] = $this->conversationId;
        }
        if (null !== $this->pushId) {
            $res['push_id'] = $this->pushId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_member_unread_count'])){
            $model->groupMemberUnreadCount = $map['group_member_unread_count'];
        }
        if(isset($map['group_member_count'])){
            $model->groupMemberCount = $map['group_member_count'];
        }
        if(isset($map['conversation_id'])){
            $model->conversationId = $map['conversation_id'];
        }
        if(isset($map['push_id'])){
            $model->pushId = $map['push_id'];
        }
        return $model;
    }
    /**
     * @description 群成员未读数量
     * @var int
     */
    public $groupMemberUnreadCount;

    /**
     * @description 群成员数量
     * @var int
     */
    public $groupMemberCount;

    /**
     * @description 群Id
     * @var string
     */
    public $conversationId;

    /**
     * @description 机器人消息推送Id
     * @var string
     */
    public $pushId;

}
