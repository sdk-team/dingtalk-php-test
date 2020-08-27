<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdategroupnickOapiChatParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'chatid' => 'chatid',
        'groupNick' => 'group_nick',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('groupNick', $this->groupNick, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->groupNick) {
            $res['group_nick'] = $this->groupNick;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdategroupnickOapiChatParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['group_nick'])){
            $model->groupNick = $map['group_nick'];
        }
        return $model;
    }
    /**
     * @description 用户userid
     * @var string
     */
    public $userid;

    /**
     * @description chatid
     * @var string
     */
    public $chatid;

    /**
     * @description 群昵称
     * @var string
     */
    public $groupNick;

}
