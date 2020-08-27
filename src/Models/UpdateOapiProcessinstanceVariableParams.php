<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiProcessinstanceVariableParams\variables;

class UpdateOapiProcessinstanceVariableParams extends Model {
    protected $_name = [
        'processInstanceId' => 'process_instance_id',
        'remark' => 'remark',
        'variables' => 'variables',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('variables', $this->variables, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if(null !== $this->variables && is_array($this->variables)){
                $n = 0;
                foreach($this->variables as $item){
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiProcessinstanceVariableParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['variables'])){
            if(!empty($map['variables'])){
                $model->variables = [];
                $n = 0;
                foreach($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 审批实例id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 变量列表
     * @var array
     */
    public $variables;

}
