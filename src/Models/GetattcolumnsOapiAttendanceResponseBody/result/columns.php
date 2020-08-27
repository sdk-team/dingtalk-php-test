<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetattcolumnsOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class columns extends Model {
    protected $_name = [
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'alias' => 'alias',
        'expressionId' => 'expression_id',
        'status' => 'status',
        'extension' => 'extension',
        'subType' => 'sub_type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->expressionId) {
            $res['expression_id'] = $this->expressionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['alias'])){
            $model->alias = $map['alias'];
        }
        if(isset($map['expression_id'])){
            $model->expressionId = $map['expression_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['sub_type'])){
            $model->subType = $map['sub_type'];
        }
        return $model;
    }
    /**
     * @description 列id
     * @var int
     */
    public $id;

    /**
     * @description 列类型
     * @var int
     */
    public $type;

    /**
     * @description 列名
     * @var string
     */
    public $name;

    /**
     * @description 列别名
     * @var string
     */
    public $alias;

    /**
     * @description 列表达式id
     * @var int
     */
    public $expressionId;

    /**
     * @description 列的状态
     * @var int
     */
    public $status;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

    /**
     * @description 子类型
     * @var int
     */
    public $subType;

}
