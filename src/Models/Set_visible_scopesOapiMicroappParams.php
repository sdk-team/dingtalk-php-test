<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Set_visible_scopesOapiMicroappParams extends Model {
    protected $_name = [
        'userVisibleScopes' => 'userVisibleScopes',
        'deptVisibleScopes' => 'deptVisibleScopes',
        'isHidden' => 'isHidden',
        'agentId' => 'agentId',
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
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Set_visible_scopesOapiMicroappParams
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
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        return $model;
    }
    /**
     * @description 设置可见的员工id列表，格式为JSON数组
     * @var array
     */
    public $userVisibleScopes;

    /**
     * @description 设置可见的部门id列表，格式为JSON数组
     * @var array
     */
    public $deptVisibleScopes;

    /**
     * @description 是否仅限管理员可见，true代表仅限管理员可见
     * @var bool
     */
    public $isHidden;

    /**
     * @description 微应用实例化id
     * @var int
     */
    public $agentId;

}
