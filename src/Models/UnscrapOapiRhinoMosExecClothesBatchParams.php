<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UnscrapOapiRhinoMosExecClothesBatchParams\batchClothesPerformReq;

class UnscrapOapiRhinoMosExecClothesBatchParams extends Model {
    protected $_name = [
        'batchClothesPerformReq' => 'batch_clothes_perform_req',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->batchClothesPerformReq) {
            $res['batch_clothes_perform_req'] = null !== $this->batchClothesPerformReq ? $this->batchClothesPerformReq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UnscrapOapiRhinoMosExecClothesBatchParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['batch_clothes_perform_req'])){
            $model->batchClothesPerformReq = batchClothesPerformReq::fromMap($map['batch_clothes_perform_req']);
        }
        return $model;
    }
    /**
     * @description 入参
     * @var batchClothesPerformReq
     */
    public $batchClothesPerformReq;

}
