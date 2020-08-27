<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RecallOapiChatMessageParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'msgid' => 'msgid',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('msgid', $this->msgid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->msgid) {
            $res['msgid'] = $this->msgid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RecallOapiChatMessageParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['msgid'])){
            $model->msgid = $map['msgid'];
        }
        return $model;
    }
    /**
     * @description 会话id
     * @var string
     */
    public $chatid;

    /**
     * @description 消息id
     * @var string
     */
    public $msgid;

}
