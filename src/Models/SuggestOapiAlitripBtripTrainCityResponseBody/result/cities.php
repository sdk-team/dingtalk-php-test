<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SuggestOapiAlitripBtripTrainCityResponseBody\result;

use AlibabaCloud\Tea\Model;

class cities extends Model {
    protected $_name = [
        'name' => 'name',
        'code' => 'code',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return cities
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        return $model;
    }
    /**
     * @description 城市名称
     * @var string
     */
    public $name;

    /**
     * @description 城市码
     * @var string
     */
    public $code;

}
