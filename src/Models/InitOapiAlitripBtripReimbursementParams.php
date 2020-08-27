<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAlitripBtripReimbursementParams\rq;

class InitOapiAlitripBtripReimbursementParams extends Model {
    protected $_name = [
        'rq' => 'rq',
    ];
    public function validate() {
        Model::validateRequired('rq', $this->rq, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->rq) {
            $res['rq'] = null !== $this->rq ? $this->rq->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return InitOapiAlitripBtripReimbursementParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rq'])){
            $model->rq = rq::fromMap($map['rq']);
        }
        return $model;
    }
    /**
     * @description 入参，创建报销单参数
     * @var rq
     */
    public $rq;

}
