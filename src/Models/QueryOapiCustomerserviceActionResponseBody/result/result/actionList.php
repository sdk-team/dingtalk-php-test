<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionResponseBody\result\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionResponseBody\result\result\actionList\actionContent;

class actionList extends Model {
    protected $_name = [
        'actionContent' => 'action_content',
        'operator' => 'operator',
        'operatorRole' => 'operator_role',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->actionContent) {
            $res['action_content'] = [];
            if(null !== $this->actionContent && is_array($this->actionContent)){
                $n = 0;
                foreach($this->actionContent as $item){
                    $res['action_content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->operatorRole) {
            $res['operator_role'] = $this->operatorRole;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return actionList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['action_content'])){
            if(!empty($map['action_content'])){
                $model->actionContent = [];
                $n = 0;
                foreach($map['action_content'] as $item) {
                    $model->actionContent[$n++] = null !== $item ? actionContent::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['operator'])){
            $model->operator = $map['operator'];
        }
        if(isset($map['operator_role'])){
            $model->operatorRole = $map['operator_role'];
        }
        return $model;
    }
    /**
     * @description 动作表单字段列表
     * @var array
     */
    public $actionContent;

    /**
     * @description 执行人
     * @var string
     */
    public $operator;

    /**
     * @description 创建者1；客服 4；
     * @var string
     */
    public $operatorRole;

}
