<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result\columns;

use AlibabaCloud\Tea\Model;

class columnvo extends Model {
    protected $_name = [
        'name' => 'name',
        'subType' => 'sub_type',
        'extension' => 'extension',
        'status' => 'status',
        'expressionId' => 'expression_id',
        'alias' => 'alias',
        'type' => 'type',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->subType) {
            $res['sub_type'] = $this->subType;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->expressionId) {
            $res['expression_id'] = $this->expressionId;
        }
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columnvo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['sub_type'])){
            $model->subType = $map['sub_type'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['expression_id'])){
            $model->expressionId = $map['expression_id'];
        }
        if(isset($map['alias'])){
            $model->alias = $map['alias'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description 子类型
     * @var int
     */
    public $subType;

    /**
     * @description 扩展字段
     * @var string
     */
    public $extension;

    /**
     * @description 列状态
     * @var int
     */
    public $status;

    /**
     * @description 表达式id
     * @var int
     */
    public $expressionId;

    /**
     * @description 别名
     * @var string
     */
    public $alias;

    /**
     * @description 列类型
     * @var int
     */
    public $type;

    /**
     * @description 列id
     * @var int
     */
    public $id;

}
