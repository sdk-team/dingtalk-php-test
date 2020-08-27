<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavDauSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'dailyActiveUsers' => 'daily_active_users',
        'activatedCount' => 'activated_count',
        'contactsCount' => 'contacts_count',
        'chatUserCount' => 'chat_user_count',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dailyActiveUsers) {
            $res['daily_active_users'] = $this->dailyActiveUsers;
        }
        if (null !== $this->activatedCount) {
            $res['activated_count'] = $this->activatedCount;
        }
        if (null !== $this->contactsCount) {
            $res['contacts_count'] = $this->contactsCount;
        }
        if (null !== $this->chatUserCount) {
            $res['chat_user_count'] = $this->chatUserCount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['daily_active_users'])){
            $model->dailyActiveUsers = $map['daily_active_users'];
        }
        if(isset($map['activated_count'])){
            $model->activatedCount = $map['activated_count'];
        }
        if(isset($map['contacts_count'])){
            $model->contactsCount = $map['contacts_count'];
        }
        if(isset($map['chat_user_count'])){
            $model->chatUserCount = $map['chat_user_count'];
        }
        return $model;
    }
    /**
     * @description 日活跃人数
     * @var int
     */
    public $dailyActiveUsers;

    /**
     * @description 激活人数（累计）
     * @var int
     */
    public $activatedCount;

    /**
     * @description 通讯录人数
     * @var int
     */
    public $contactsCount;

    /**
     * @description 聊天用户数
     * @var int
     */
    public $chatUserCount;

}
