<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchupdateOapiChatNickParams;

use AlibabaCloud\Tea\Model;

class userNickModel extends Model {
    protected $_name = [
        'nick' => 'nick',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('nick', $this->nick, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userNickModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 昵称
     * @var string
     */
    public $nick;

    /**
     * @description userId
     * @var string
     */
    public $userid;

}
