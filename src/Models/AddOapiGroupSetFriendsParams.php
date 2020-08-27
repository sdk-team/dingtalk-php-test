<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddOapiGroupSetFriendsParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'isProhibit' => 'is_prohibit',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('isProhibit', $this->isProhibit, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->isProhibit) {
            $res['is_prohibit'] = $this->isProhibit;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddOapiGroupSetFriendsParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['is_prohibit'])){
            $model->isProhibit = $map['is_prohibit'];
        }
        return $model;
    }
    /**
     * @description 会话Id
     * @var string
     */
    public $chatid;

    /**
     * @description true表示开启禁止开关，false表示关闭
     * @var bool
     */
    public $isProhibit;

}
