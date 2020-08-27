<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class RemoverolesforempsCorpRoleParams extends Model {
    protected $_name = [
        'roleidList' => 'roleid_list',
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('roleidList', $this->roleidList, true);
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->roleidList) {
            $res['roleid_list'] = $this->roleidList;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RemoverolesforempsCorpRoleParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roleid_list'])){
            if(!empty($map['roleid_list'])){
                $model->roleidList = $map['roleid_list'];
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
     * @description 角色标签id
     * @var array
     */
    public $roleidList;

    /**
     * @description 用户userId
     * @var array
     */
    public $useridList;

}
