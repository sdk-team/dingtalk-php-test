<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiAlitripBtripCostCenterParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'thirdpartId' => 'thirdpart_id',
        'corpid' => 'corpid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 第三方成本中心id
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
