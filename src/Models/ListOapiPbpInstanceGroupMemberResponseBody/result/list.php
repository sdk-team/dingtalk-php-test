<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiPbpInstanceGroupMemberResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'type' => 'type',
        'memberId' => 'member_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->memberId) {
            $res['member_id'] = $this->memberId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['member_id'])){
            $model->memberId = $map['member_id'];
        }
        return $model;
    }
    /**
     * @description 成员类型，0表示员工，1表示部门
     * @var int
     */
    public $type;

    /**
     * @description 成员id，根据类型不同表示不同
     * @var string
     */
    public $memberId;

}
