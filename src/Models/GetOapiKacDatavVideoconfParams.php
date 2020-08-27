<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavVideoconfParams\paramMcsSummaryRequest;

class GetOapiKacDatavVideoconfParams extends Model {
    protected $_name = [
        'paramMcsSummaryRequest' => 'param_mcs_summary_request',
    ];
    public function validate() {
        Model::validateRequired('paramMcsSummaryRequest', $this->paramMcsSummaryRequest, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->paramMcsSummaryRequest) {
            $res['param_mcs_summary_request'] = null !== $this->paramMcsSummaryRequest ? $this->paramMcsSummaryRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiKacDatavVideoconfParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param_mcs_summary_request'])){
            $model->paramMcsSummaryRequest = paramMcsSummaryRequest::fromMap($map['param_mcs_summary_request']);
        }
        return $model;
    }
    /**
     * @description 请求对象类型
     * @var paramMcsSummaryRequest
     */
    public $paramMcsSummaryRequest;

}
