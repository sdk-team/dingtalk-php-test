<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Visible_scopesOapiMicroappResponseBody extends Model {
    protected $_name = [
        'userVisibleScopes' => 'userVisibleScopes',
        'deptVisibleScopes' => 'deptVisibleScopes',
        'isHidden' => 'isHidden',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userVisibleScopes) {
            $res['userVisibleScopes'] = $this->userVisibleScopes;
        }
        if (null !== $this->deptVisibleScopes) {
            $res['deptVisibleScopes'] = $this->deptVisibleScopes;
        }
        if (null !== $this->isHidden) {
            $res['isHidden'] = $this->isHidden;
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
     * @return Visible_scopesOapiMicroappResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userVisibleScopes'])){
            if(!empty($map['userVisibleScopes'])){
                $model->userVisibleScopes = $map['userVisibleScopes'];
            }
        }
        if(isset($map['deptVisibleScopes'])){
            if(!empty($map['deptVisibleScopes'])){
                $model->deptVisibleScopes = $map['deptVisibleScopes'];
            }
        }
        if(isset($map['isHidden'])){
            $model->isHidden = $map['isHidden'];
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
     * @description 微应用的可见用户id列表，格式为JSON数组
     * @var array
     */
    public $userVisibleScopes;

    /**
     * @description 微应用的可见部门id列表，格式为JSON数组
     * @var array
     */
    public $deptVisibleScopes;

    /**
     * @description 是否仅限管理员可见
     * @var bool
     */
    public $isHidden;

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
