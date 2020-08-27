<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListshortcutOapiOrgResponseBody\result;

use AlibabaCloud\Tea\Model;

class shortcuts extends Model {
    protected $_name = [
        'type' => 'type',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return shortcuts
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description 类型，1表示工作台微应用
     * @var int
     */
    public $type;

    /**
     * @description 微应用的agentId
     * @var string
     */
    public $value;

}
