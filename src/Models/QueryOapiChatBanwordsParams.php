<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiChatBanwordsParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiChatBanwordsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 会话ID
     * @var string
     */
    public $chatid;

    /**
     * @description 被查询的用户ID
     * @var string
     */
    public $userid;

}
