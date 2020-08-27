<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetrolegroupCorpRoleParams extends Model {
    protected $_name = [
        'groupId' => 'group_id',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetrolegroupCorpRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        return $model;
    }
    /**
     * @description 角色组的Id
     * @var int
     */
    public $groupId;

}
