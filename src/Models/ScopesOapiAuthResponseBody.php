<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ScopesOapiAuthResponseBody\authOrgScopes;

class ScopesOapiAuthResponseBody extends Model {
    protected $_name = [
        'conditionField' => 'condition_field',
        'authOrgScopes' => 'auth_org_scopes',
        'authUserField' => 'auth_user_field',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->conditionField) {
            $res['condition_field'] = $this->conditionField;
        }
        if (null !== $this->authOrgScopes) {
            $res['auth_org_scopes'] = null !== $this->authOrgScopes ? $this->authOrgScopes->toMap() : null;
        }
        if (null !== $this->authUserField) {
            $res['auth_user_field'] = $this->authUserField;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ScopesOapiAuthResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['condition_field'])){
            if(!empty($map['condition_field'])){
                $model->conditionField = $map['condition_field'];
            }
        }
        if(isset($map['auth_org_scopes'])){
            $model->authOrgScopes = authOrgScopes::fromMap($map['auth_org_scopes']);
        }
        if(isset($map['auth_user_field'])){
            if(!empty($map['auth_user_field'])){
                $model->authUserField = $map['auth_user_field'];
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description ISV可以直接使用企业的功能字段
     * @var array
     */
    public $conditionField;

    /**
     * @description auth_org_scopes
     * @var authOrgScopes
     */
    public $authOrgScopes;

    /**
     * @description 可以得到的企业用户字段
     * @var array
     */
    public $authUserField;

    /**
     * @description 对返回码的文本描述内容
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回码
     * @var int
     */
    public $errcode;

}
