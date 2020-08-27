<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiChatThemeParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'mediaid' => 'mediaid',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('mediaid', $this->mediaid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->mediaid) {
            $res['mediaid'] = $this->mediaid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiChatThemeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['mediaid'])){
            $model->mediaid = $map['mediaid'];
        }
        return $model;
    }
    /**
     * @description 会话id
     * @var string
     */
    public $chatid;

    /**
     * @description 图片id
     * @var string
     */
    public $mediaid;

}
