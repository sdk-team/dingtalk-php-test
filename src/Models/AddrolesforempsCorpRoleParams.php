<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class AddrolesforempsCorpRoleParams extends Model {
    protected $_name = [
        'rolelidList' => 'rolelid_list',
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('rolelidList', $this->rolelidList, true);
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->rolelidList) {
            $res['rolelid_list'] = $this->rolelidList;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AddrolesforempsCorpRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rolelid_list'])){
            if(!empty($map['rolelid_list'])){
                $model->rolelidList = $map['rolelid_list'];
            }
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 角色id list
     * @var array
     */
    public $rolelidList;

    /**
     * @description 员工id list
     * @var array
     */
    public $useridList;

}
