<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavVideoliveParams;

use AlibabaCloud\Tea\Model;

class paramVideoLiveSummaryRequest extends Model {
    protected $_name = [
        'dataId' => 'data_id',
    ];
    public function validate() {
        Model::validateRequired('dataId', $this->dataId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->dataId) {
            $res['data_id'] = $this->dataId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return paramVideoLiveSummaryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data_id'])){
            $model->dataId = $map['data_id'];
        }
        return $model;
    }
    /**
     * @description 日期标识
     * @var string
     */
    public $dataId;

}
