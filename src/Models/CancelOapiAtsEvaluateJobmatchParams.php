<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CancelOapiAtsEvaluateJobmatchParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'extData' => 'ext_data',
        'outerEvaluateId' => 'outer_evaluate_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('extData', $this->extData, true);
        Model::validateRequired('outerEvaluateId', $this->outerEvaluateId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->extData) {
            $res['ext_data'] = $this->extData;
        }
        if (null !== $this->outerEvaluateId) {
            $res['outer_evaluate_id'] = $this->outerEvaluateId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CancelOapiAtsEvaluateJobmatchParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['ext_data'])){
            $model->extData = $map['ext_data'];
        }
        if(isset($map['outer_evaluate_id'])){
            $model->outerEvaluateId = $map['outer_evaluate_id'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 请求扩展字段
     * @var string
     */
    public $extData;

    /**
     * @description 外部测评系统测评id，全局唯一
     * @var string
     */
    public $outerEvaluateId;

}
