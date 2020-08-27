<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiIndustryUserResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiIndustryUserResponseBody\result\details\roles;

class details extends Model {
    protected $_name = [
        'feature' => 'feature',
        'roles' => 'roles',
        'name' => 'name',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
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
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return details
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['feature'])){
            $model->feature = $map['feature'];
        }
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
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 员工特征
     * @var string
     */
    public $feature;

    /**
     * @description 标签列表
     * @var array
     */
    public $roles;

    /**
     * @description 员工名
     * @var string
     */
    public $name;

    /**
     * @description 员工id
     * @var string
     */
    public $userid;

}
