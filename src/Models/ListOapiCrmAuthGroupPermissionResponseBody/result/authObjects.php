<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\operateScope;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCrmAuthGroupPermissionResponseBody\result\authObjects\manageScope;

class authObjects extends Model {
    protected $_name = [
        'name' => 'name',
        'operateScope' => 'operate_scope',
        'label' => 'label',
        'manageScope' => 'manage_scope',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->operateScope) {
            $res['operate_scope'] = [];
            if(null !== $this->operateScope && is_array($this->operateScope)){
                $n = 0;
                foreach($this->operateScope as $item){
                    $res['operate_scope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->manageScope) {
            $res['manage_scope'] = [];
            if(null !== $this->manageScope && is_array($this->manageScope)){
                $n = 0;
                foreach($this->manageScope as $item){
                    $res['manage_scope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authObjects
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['operate_scope'])){
            if(!empty($map['operate_scope'])){
                $model->operateScope = [];
                $n = 0;
                foreach($map['operate_scope'] as $item) {
                    $model->operateScope[$n++] = null !== $item ? operateScope::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        if(isset($map['manage_scope'])){
            if(!empty($map['manage_scope'])){
                $model->manageScope = [];
                $n = 0;
                foreach($map['manage_scope'] as $item) {
                    $model->manageScope[$n++] = null !== $item ? manageScope::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 权限组名称
     * @var string
     */
    public $name;

    /**
     * @description 操作范围
     * @var array
     */
    public $operateScope;

    /**
     * @description 表单名称
     * @var string
     */
    public $label;

    /**
     * @description 管理范围
     * @var array
     */
    public $manageScope;

}
