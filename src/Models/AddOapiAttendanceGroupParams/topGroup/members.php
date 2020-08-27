<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceGroupParams\topGroup;

use AlibabaCloud\Tea\Model;

class members extends Model {
    protected $_name = [
        'role' => 'role',
        'corpId' => 'corp_id',
        'type' => 'type',
        'userId' => 'user_id',
    ];
    public function validate() {
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('userId', $this->userId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return members
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        return $model;
    }
    /**
     * @description 角色
     * @var string
     */
    public $role;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 用户id
     * @var string
     */
    public $userId;

}
