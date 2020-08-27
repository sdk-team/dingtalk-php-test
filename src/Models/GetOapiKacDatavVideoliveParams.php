<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavVideoliveParams\paramVideoLiveSummaryRequest;

class GetOapiKacDatavVideoliveParams extends Model {
    protected $_name = [
        'paramVideoLiveSummaryRequest' => 'param_video_live_summary_request',
    ];
    public function validate() {
        Model::validateRequired('paramVideoLiveSummaryRequest', $this->paramVideoLiveSummaryRequest, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->paramVideoLiveSummaryRequest) {
            $res['param_video_live_summary_request'] = null !== $this->paramVideoLiveSummaryRequest ? $this->paramVideoLiveSummaryRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiKacDatavVideoliveParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param_video_live_summary_request'])){
            $model->paramVideoLiveSummaryRequest = paramVideoLiveSummaryRequest::fromMap($map['param_video_live_summary_request']);
        }
        return $model;
    }
    /**
     * @description 请求参数对象
     * @var paramVideoLiveSummaryRequest
     */
    public $paramVideoLiveSummaryRequest;

}
