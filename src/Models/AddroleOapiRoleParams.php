<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddroleOapiRoleParams extends Model {
    protected $_name = [
        'roleName' => 'roleName',
        'groupId' => 'groupId',
    ];
    public function validate() {
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddroleOapiRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roleName'])){
            $model->roleName = $map['roleName'];
        }
        if(isset($map['groupId'])){
            $model->groupId = $map['groupId'];
        }
        return $model;
    }
    /**
     * @description test
     * @var string
     */
    public $roleName;

    /**
     * @description test
     * @var int
     */
    public $groupId;

}
