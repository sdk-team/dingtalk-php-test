<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiVillageScreenParams;

use AlibabaCloud\Tea\Model;

class req extends Model {
    protected $_name = [
        'params' => 'params',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return req
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['params'])){
            $model->params = $map['params'];
        }
        return $model;
    }
    /**
     * @description -
     * @var string
     */
    public $params;

}
