<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\TransferOapiAlitripBtripCostCenterParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'thirdpartId' => 'thirdpart_id',
        'costCenterId' => 'cost_center_id',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('thirdpartId', $this->thirdpartId, true);
        Model::validateRequired('costCenterId', $this->costCenterId, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
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
        if(isset($map['cost_center_id'])){
            $model->costCenterId = $map['cost_center_id'];
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
     * @description 商旅成本中心id
     * @var int
     */
    public $costCenterId;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
