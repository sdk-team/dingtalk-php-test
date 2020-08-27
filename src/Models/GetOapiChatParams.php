<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiChatParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        return $model;
    }
    /**
     * @description 群会话的id
     * @var string
     */
    public $chatid;

}
