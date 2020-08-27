<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiCrmObjectmetaResponseBody\result\fields;

use AlibabaCloud\Tea\Model;

class rollUpSummaryFields extends Model {
    protected $_name = [
        'name' => 'name',
        'aggregator' => 'aggregator',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->aggregator) {
            $res['aggregator'] = $this->aggregator;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rollUpSummaryFields
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['aggregator'])){
            $model->aggregator = $map['aggregator'];
        }
        return $model;
    }
    /**
     * @description 需要汇总的明细内字段名
     * @var string
     */
    public $name;

    /**
     * @description 汇总方法
     * @var string
     */
    public $aggregator;

}
