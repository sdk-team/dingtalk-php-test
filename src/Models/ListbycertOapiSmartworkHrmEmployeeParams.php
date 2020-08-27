<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbycertOapiSmartworkHrmEmployeeParams\params;

class ListbycertOapiSmartworkHrmEmployeeParams extends Model {
    protected $_name = [
        'params' => 'params',
    ];
    public function validate() {
        Model::validateRequired('params', $this->params, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = [];
            if(null !== $this->params && is_array($this->params)){
                $n = 0;
                foreach($this->params as $item){
                    $res['params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbycertOapiSmartworkHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['params'])){
            if(!empty($map['params'])){
                $model->params = [];
                $n = 0;
                foreach($map['params'] as $item) {
                    $model->params[$n++] = null !== $item ? params::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 查询参数
     * @var array
     */
    public $params;

}
