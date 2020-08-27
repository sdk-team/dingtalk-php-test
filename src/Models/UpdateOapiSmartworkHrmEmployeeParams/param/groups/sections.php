<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param\groups;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiSmartworkHrmEmployeeParams\param\groups\sections\section;

class sections extends Model {
    protected $_name = [
        'section' => 'section',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->section) {
            $res['section'] = [];
            if(null !== $this->section && is_array($this->section)){
                $n = 0;
                foreach($this->section as $item){
                    $res['section'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sections
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['section'])){
            if(!empty($map['section'])){
                $model->section = [];
                $n = 0;
                foreach($map['section'] as $item) {
                    $model->section[$n++] = null !== $item ? section::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 单个组所有字段
     * @var array
     */
    public $section;

}
