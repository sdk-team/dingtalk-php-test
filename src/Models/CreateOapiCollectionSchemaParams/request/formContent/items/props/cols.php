<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCollectionSchemaParams\request\formContent\items\props;

use AlibabaCloud\Tea\Model;

class cols extends Model {
    protected $_name = [
        'alias' => 'alias',
        'name' => 'name',
        'key' => 'key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return cols
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['alias'])){
            $model->alias = $map['alias'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        return $model;
    }
    /**
     * @description 别名
     * @var string
     */
    public $alias;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 主键
     * @var string
     */
    public $key;

}
