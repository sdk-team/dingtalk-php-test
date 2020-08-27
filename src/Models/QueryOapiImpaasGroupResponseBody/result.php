<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImpaasGroupResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiImpaasGroupResponseBody\result\creater;

class result extends Model {
    protected $_name = [
        'chatid' => 'chatid',
        'groupName' => 'group_name',
        'type' => 'type',
        'memberLimit' => 'member_limit',
        'memberCount' => 'member_count',
        'creater' => 'creater',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chatid) {
            $res['chatid'] = $this->chatid;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->memberLimit) {
            $res['member_limit'] = $this->memberLimit;
        }
        if (null !== $this->memberCount) {
            $res['member_count'] = $this->memberCount;
        }
        if (null !== $this->creater) {
            $res['creater'] = null !== $this->creater ? $this->creater->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chatid'])){
            $model->chatid = $map['chatid'];
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['member_limit'])){
            $model->memberLimit = $map['member_limit'];
        }
        if(isset($map['member_count'])){
            $model->memberCount = $map['member_count'];
        }
        if(isset($map['creater'])){
            $model->creater = creater::fromMap($map['creater']);
        }
        return $model;
    }
    /**
     * @description 群ID
     * @var string
     */
    public $chatid;

    /**
     * @description 群名称
     * @var string
     */
    public $groupName;

    /**
     * @description 群类型
     * @var int
     */
    public $type;

    /**
     * @description 群成员人数上限
     * @var int
     */
    public $memberLimit;

    /**
     * @description 群成员人数
     * @var int
     */
    public $memberCount;

    /**
     * @description 群主
     * @var creater
     */
    public $creater;

}
