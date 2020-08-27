<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ScopesOapiAuthResponseBody;

use AlibabaCloud\Tea\Model;

class authOrgScopes extends Model {
    protected $_name = [
        'authedUser' => 'authed_user',
        'authedDept' => 'authed_dept',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authedUser) {
            $res['authed_user'] = $this->authedUser;
        }
        if (null !== $this->authedDept) {
            $res['authed_dept'] = $this->authedDept;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authOrgScopes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['authed_user'])){
            if(!empty($map['authed_user'])){
                $model->authedUser = $map['authed_user'];
            }
        }
        if(isset($map['authed_dept'])){
            if(!empty($map['authed_dept'])){
                $model->authedDept = $map['authed_dept'];
            }
        }
        return $model;
    }
    /**
     * @description 企业授权的员工userid列表
     * @var array
     */
    public $authedUser;

    /**
     * @description 企业授权的部门id列表
     * @var array
     */
    public $authedDept;

}
