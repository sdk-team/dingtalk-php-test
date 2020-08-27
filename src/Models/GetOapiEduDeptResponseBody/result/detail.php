<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduDeptResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model {
    protected $_name = [
        'nick' => 'nick',
        'chain' => 'chain',
        'feature' => 'feature',
        'name' => 'name',
        'contactType' => 'contact_type',
        'deptType' => 'dept_type',
        'deptId' => 'dept_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }
        if (null !== $this->chain) {
            $res['chain'] = $this->chain;
        }
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->contactType) {
            $res['contact_type'] = $this->contactType;
        }
        if (null !== $this->deptType) {
            $res['dept_type'] = $this->deptType;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return detail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nick'])){
            $model->nick = $map['nick'];
        }
        if(isset($map['chain'])){
            $model->chain = $map['chain'];
        }
        if(isset($map['feature'])){
            $model->feature = $map['feature'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['contact_type'])){
            $model->contactType = $map['contact_type'];
        }
        if(isset($map['dept_type'])){
            $model->deptType = $map['dept_type'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        return $model;
    }
    /**
     * @description 部门nick
     * @var string
     */
    public $nick;

    /**
     * @description 部门链，不包括当前部门
     * @var string
     */
    public $chain;

    /**
     * @description 部门节点特有属性
     * @var string
     */
    public $feature;

    /**
     * @description 部门名
     * @var string
     */
    public $name;

    /**
     * @description 通讯录类型。自定义or经典模型
     * @var string
     */
    public $contactType;

    /**
     * @description 部门节点类型
     * @var string
     */
    public $deptType;

    /**
     * @description 部门id
     * @var int
     */
    public $deptId;

}
