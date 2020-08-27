<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiIndustryUserResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiIndustryUserResponseBody\result\roles;

class result extends Model {
    protected $_name = [
        'roles' => 'roles',
        'name' => 'name',
        'feature' => 'feature',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->roles) {
            $res['roles'] = [];
            if(null !== $this->roles && is_array($this->roles)){
                $n = 0;
                foreach($this->roles as $item){
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['roles'])){
            if(!empty($map['roles'])){
                $model->roles = [];
                $n = 0;
                foreach($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['feature'])){
            $model->feature = $map['feature'];
        }
        return $model;
    }
    /**
     * @description 员工角色列表
     * @var array
     */
    public $roles;

    /**
     * @description 员工名字
     * @var string
     */
    public $name;

    /**
     * @description 员工特征
     * @var string
     */
    public $feature;

}
