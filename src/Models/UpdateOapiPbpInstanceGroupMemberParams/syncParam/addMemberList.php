<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiPbpInstanceGroupMemberParams\syncParam;

use AlibabaCloud\Tea\Model;

class addMemberList extends Model {
    protected $_name = [
        'memberId' => 'member_id',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return addMemberList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['member_id'])){
            $model->memberId = $map['member_id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @description 员工userId
     * @var string
     */
    public $memberId;

    /**
     * @description 成员类型，0表示员工
     * @var int
     */
    public $type;

}
