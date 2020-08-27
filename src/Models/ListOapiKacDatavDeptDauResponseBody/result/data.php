<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavDeptDauResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'dailyActiveUsers' => 'daily_active_users',
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'contactsNumber' => 'contacts_number',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dailyActiveUsers) {
            $res['daily_active_users'] = $this->dailyActiveUsers;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->contactsNumber) {
            $res['contacts_number'] = $this->contactsNumber;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['daily_active_users'])){
            $model->dailyActiveUsers = $map['daily_active_users'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['contacts_number'])){
            $model->contactsNumber = $map['contacts_number'];
        }
        return $model;
    }
    /**
     * @description 日活跃人数
     * @var int
     */
    public $dailyActiveUsers;

    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 通讯录人数
     * @var int
     */
    public $contactsNumber;

}
