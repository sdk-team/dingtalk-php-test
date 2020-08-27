<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAttendanceGroupMemberParams;

use AlibabaCloud\Tea\Model;

class updateParam extends Model {
    protected $_name = [
        'removeExtraUsers' => 'remove_extra_users',
        'removeDepts' => 'remove_depts',
        'removeUsers' => 'remove_users',
        'addDepts' => 'add_depts',
        'addUsers' => 'add_users',
        'addExtraUsers' => 'add_extra_users',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->removeExtraUsers) {
            $res['remove_extra_users'] = $this->removeExtraUsers;
        }
        if (null !== $this->removeDepts) {
            $res['remove_depts'] = $this->removeDepts;
        }
        if (null !== $this->removeUsers) {
            $res['remove_users'] = $this->removeUsers;
        }
        if (null !== $this->addDepts) {
            $res['add_depts'] = $this->addDepts;
        }
        if (null !== $this->addUsers) {
            $res['add_users'] = $this->addUsers;
        }
        if (null !== $this->addExtraUsers) {
            $res['add_extra_users'] = $this->addExtraUsers;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return updateParam
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['remove_extra_users'])){
            if(!empty($map['remove_extra_users'])){
                $model->removeExtraUsers = $map['remove_extra_users'];
            }
        }
        if(isset($map['remove_depts'])){
            if(!empty($map['remove_depts'])){
                $model->removeDepts = $map['remove_depts'];
            }
        }
        if(isset($map['remove_users'])){
            if(!empty($map['remove_users'])){
                $model->removeUsers = $map['remove_users'];
            }
        }
        if(isset($map['add_depts'])){
            if(!empty($map['add_depts'])){
                $model->addDepts = $map['add_depts'];
            }
        }
        if(isset($map['add_users'])){
            if(!empty($map['add_users'])){
                $model->addUsers = $map['add_users'];
            }
        }
        if(isset($map['add_extra_users'])){
            if(!empty($map['add_extra_users'])){
                $model->addExtraUsers = $map['add_extra_users'];
            }
        }
        return $model;
    }
    /**
     * @description 要删除的无需考勤人员，没有的话，无需赋值
     * @var array
     */
    public $removeExtraUsers;

    /**
     * @description 要删除的考勤部门，没有的话，无需赋值
     * @var array
     */
    public $removeDepts;

    /**
     * @description 要删除的考勤人员，没有的话，无需赋值
     * @var array
     */
    public $removeUsers;

    /**
     * @description 要添加的考勤部门，没有的话，无需赋值
     * @var array
     */
    public $addDepts;

    /**
     * @description 要添加的考勤人员，没有的话，无需赋值
     * @var array
     */
    public $addUsers;

    /**
     * @description 要添加的无需考勤人员，没有的话，无需赋值
     * @var array
     */
    public $addExtraUsers;

}
