<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiRhinoMosExecOperationConditionParams\getClothesConditionReq;

class GetOapiRhinoMosExecOperationConditionParams extends Model {
    protected $_name = [
        'getClothesConditionReq' => 'get_clothes_condition_req',
    ];
    public function validate() {
        Model::validateRequired('getClothesConditionReq', $this->getClothesConditionReq, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->getClothesConditionReq) {
            $res['get_clothes_condition_req'] = null !== $this->getClothesConditionReq ? $this->getClothesConditionReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiRhinoMosExecOperationConditionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['get_clothes_condition_req'])){
            $model->getClothesConditionReq = getClothesConditionReq::fromMap($map['get_clothes_condition_req']);
        }
        return $model;
    }
    /**
     * @description 请求
     * @var getClothesConditionReq
     */
    public $getClothesConditionReq;

}
