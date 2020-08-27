<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ForecastOapiProcessApproversResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ForecastOapiProcessApproversResponseBody\result\approvers;

class result extends Model {
    protected $_name = [
        'nodeName' => 'node_name',
        'nodeShowName' => 'node_show_name',
        'approvers' => 'approvers',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nodeName) {
            $res['node_name'] = $this->nodeName;
        }
        if (null !== $this->nodeShowName) {
            $res['node_show_name'] = $this->nodeShowName;
        }
        if (null !== $this->approvers) {
            $res['approvers'] = [];
            if(null !== $this->approvers && is_array($this->approvers)){
                $n = 0;
                foreach($this->approvers as $item){
                    $res['approvers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['node_name'])){
            $model->nodeName = $map['node_name'];
        }
        if(isset($map['node_show_name'])){
            $model->nodeShowName = $map['node_show_name'];
        }
        if(isset($map['approvers'])){
            if(!empty($map['approvers'])){
                $model->approvers = [];
                $n = 0;
                foreach($map['approvers'] as $item) {
                    $model->approvers[$n++] = null !== $item ? approvers::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 节点名称
     * @var string
     */
    public $nodeName;

    /**
     * @description 节点展示名称
     * @var string
     */
    public $nodeShowName;

    /**
     * @description 审批人列表
     * @var array
     */
    public $approvers;

}
