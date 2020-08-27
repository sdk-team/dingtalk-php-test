<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessFormConditionResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model {
    protected $_name = [
        'id' => 'id',
        'label' => 'label',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['label'])){
            $model->label = $map['label'];
        }
        return $model;
    }
    /**
     * @description 表单id
     * @var string
     */
    public $id;

    /**
     * @description 表单名称
     * @var string
     */
    public $label;

}
