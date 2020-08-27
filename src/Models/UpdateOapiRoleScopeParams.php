<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiRoleScopeParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'roleId' => 'role_id',
        'deptIds' => 'dept_ids',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('roleId', $this->roleId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->roleId) {
            $res['role_id'] = $this->roleId;
        }
        if (null !== $this->deptIds) {
            $res['dept_ids'] = $this->deptIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiRoleScopeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['role_id'])){
            $model->roleId = $map['role_id'];
        }
        if(isset($map['dept_ids'])){
            if(!empty($map['dept_ids'])){
                $model->deptIds = $map['dept_ids'];
            }
        }
        return $model;
    }
    /**
     * @description 员工在企业中的ID
     * @var string
     */
    public $userid;

    /**
     * @description 角色ID
     * @var int
     */
    public $roleId;

    /**
     * @description 部门ID列表数
     * @var array
     */
    public $deptIds;

}
