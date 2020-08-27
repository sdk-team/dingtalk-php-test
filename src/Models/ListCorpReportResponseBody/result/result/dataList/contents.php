<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListCorpReportResponseBody\result\result\dataList;

use AlibabaCloud\Tea\Model;

class contents extends Model {
    protected $_name = [
        'sort' => 'sort',
        'type' => 'type',
        'value' => 'value',
        'key' => 'key',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return contents
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['sort'])){
            $model->sort = $map['sort'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        return $model;
    }
    /**
     * @description 排序
     * @var string
     */
    public $sort;

    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 用户填写的内容
     * @var string
     */
    public $value;

    /**
     * @description 模板内容
     * @var string
     */
    public $key;

}
