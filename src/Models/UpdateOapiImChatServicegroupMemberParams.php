<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiImChatServicegroupMemberParams extends Model {
    protected $_name = [
        'memberDingtalkIds' => 'member_dingtalk_ids',
        'action' => 'action',
        'chatId' => 'chat_id',
    ];
    public function validate() {
        Model::validateRequired('memberDingtalkIds', $this->memberDingtalkIds, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('chatId', $this->chatId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->memberDingtalkIds) {
            $res['member_dingtalk_ids'] = $this->memberDingtalkIds;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiImChatServicegroupMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['member_dingtalk_ids'])){
            if(!empty($map['member_dingtalk_ids'])){
                $model->memberDingtalkIds = $map['member_dingtalk_ids'];
            }
        }
        if(isset($map['action'])){
            $model->action = $map['action'];
        }
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        return $model;
    }
    /**
     * @description 成员的ID列表，英文逗号分隔
     * @var array
     */
    public $memberDingtalkIds;

    /**
     * @description 更新类型，REMOVE 移除、SET_ADMIN设为管理员、SET_NORMAL 设为普通成员
     * @var string
     */
    public $action;

    /**
     * @description 开放的chatId
     * @var string
     */
    public $chatId;

}
