<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiCustomizeConversationParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'chatId' => 'chat_id',
        'extensionKey' => 'extension_key',
        'extensionValue' => 'extension_value',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('chatId', $this->chatId, true);
        Model::validateRequired('extensionKey', $this->extensionKey, true);
        Model::validateRequired('extensionValue', $this->extensionValue, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        if (null !== $this->extensionKey) {
            $res['extension_key'] = $this->extensionKey;
        }
        if (null !== $this->extensionValue) {
            $res['extension_value'] = $this->extensionValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCustomizeConversationParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        if(isset($map['extension_key'])){
            $model->extensionKey = $map['extension_key'];
        }
        if(isset($map['extension_value'])){
            $model->extensionValue = $map['extension_value'];
        }
        return $model;
    }
    /**
     * @description 员工账号
     * @var string
     */
    public $userid;

    /**
     * @description 会话id
     * @var string
     */
    public $chatId;

    /**
     * @description extensionKey
     * @var string
     */
    public $extensionKey;

    /**
     * @description extensionValue
     * @var string
     */
    public $extensionValue;

}
