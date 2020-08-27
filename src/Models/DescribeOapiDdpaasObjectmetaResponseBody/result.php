<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiDdpaasObjectmetaResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DescribeOapiDdpaasObjectmetaResponseBody\result\fields;

class result extends Model {
    protected $_name = [
        'fields' => 'fields',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = [];
            if(null !== $this->fields && is_array($this->fields)){
                $n = 0;
                foreach($this->fields as $item){
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['fields'])){
            if(!empty($map['fields'])){
                $model->fields = [];
                $n = 0;
                foreach($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 字段列表
     * @var array
     */
    public $fields;

}
