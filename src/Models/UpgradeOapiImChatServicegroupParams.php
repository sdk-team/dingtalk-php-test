<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpgradeOapiImChatServicegroupParams extends Model {
    protected $_name = [
        'chatId' => 'chat_id',
    ];
    public function validate() {
        Model::validateRequired('chatId', $this->chatId, true);
        Model::validateMaxLength('chatId', $this->chatId, 128);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatId) {
            $res['chat_id'] = $this->chatId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpgradeOapiImChatServicegroupParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chat_id'])){
            $model->chatId = $map['chat_id'];
        }
        return $model;
    }
    /**
     * @description 开放的chatId
     * @var string
     */
    public $chatId;

}
