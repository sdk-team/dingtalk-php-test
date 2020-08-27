<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetOapiChatTagParams extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'groupTag' => 'group_tag',
    ];
    public function validate() {
        Model::validateRequired('chatid', $this->chatid, true);
        Model::validateRequired('groupTag', $this->groupTag, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->groupTag) {
            $res['group_tag'] = $this->groupTag;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetOapiChatTagParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['group_tag'])){
            $model->groupTag = $map['group_tag'];
        }
        return $model;
    }
    /**
     * @description 内部群的id
     * @var string
     */
    public $chatid;

    /**
     * @description 群标签的类型。1表示经销群；2表示销管群
     * @var int
     */
    public $groupTag;

}
