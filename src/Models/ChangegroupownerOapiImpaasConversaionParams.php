<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ChangegroupownerOapiImpaasConversaionParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'userid' => 'userid',
        'channel' => 'channel',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ChangegroupownerOapiImpaasConversaionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        return $model;
    }
    /**
     * @description 钉钉会话id
     * @var string
     */
    public $chatid;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

    /**
     * @description 应用channel
     * @var string
     */
    public $channel;

}
