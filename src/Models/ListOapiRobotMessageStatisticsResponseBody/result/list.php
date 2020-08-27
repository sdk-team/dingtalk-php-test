<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiRobotMessageStatisticsResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'reachGroupMemberUnreadCount' => 'reach_group_member_unread_count',
        'reachGroupMemberCount' => 'reach_group_member_count',
        'reachGroupCount' => 'reach_group_count',
        'pushId' => 'push_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reachGroupMemberUnreadCount) {
            $res['reach_group_member_unread_count'] = $this->reachGroupMemberUnreadCount;
        }
        if (null !== $this->reachGroupMemberCount) {
            $res['reach_group_member_count'] = $this->reachGroupMemberCount;
        }
        if (null !== $this->reachGroupCount) {
            $res['reach_group_count'] = $this->reachGroupCount;
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
        if(isset($map['reach_group_member_unread_count'])){
            $model->reachGroupMemberUnreadCount = $map['reach_group_member_unread_count'];
        }
        if(isset($map['reach_group_member_count'])){
            $model->reachGroupMemberCount = $map['reach_group_member_count'];
        }
        if(isset($map['reach_group_count'])){
            $model->reachGroupCount = $map['reach_group_count'];
        }
        if(isset($map['push_id'])){
            $model->pushId = $map['push_id'];
        }
        return $model;
    }
    /**
     * @description 触达群成员未读数量
     * @var int
     */
    public $reachGroupMemberUnreadCount;

    /**
     * @description 触达群成员数量
     * @var int
     */
    public $reachGroupMemberCount;

    /**
     * @description 触达群数量
     * @var int
     */
    public $reachGroupCount;

    /**
     * @description 机器人消息推送Id
     * @var string
     */
    public $pushId;

}
