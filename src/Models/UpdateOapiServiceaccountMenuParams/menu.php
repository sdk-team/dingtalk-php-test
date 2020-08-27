<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiServiceaccountMenuParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiServiceaccountMenuParams\menu\button;

class menu extends Model {
    protected $_name = [
        'button' => 'button',
        'enableInput' => 'enable_input',
        'status' => 'status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->button) {
            $res['button'] = [];
            if(null !== $this->button && is_array($this->button)){
                $n = 0;
                foreach($this->button as $item){
                    $res['button'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableInput) {
            $res['enable_input'] = $this->enableInput;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return menu
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['button'])){
            if(!empty($map['button'])){
                $model->button = [];
                $n = 0;
                foreach($map['button'] as $item) {
                    $model->button[$n++] = null !== $item ? button::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['enable_input'])){
            $model->enableInput = $map['enable_input'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 菜单按钮列表
     * @var array
     */
    public $button;

    /**
     * @description 是否允许用户输入
     * @var bool
     */
    public $enableInput;

    /**
     * @description 状态，0-正常，1-停用
     * @var int
     */
    public $status;

}
