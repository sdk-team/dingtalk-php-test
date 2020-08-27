<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiAtsJobParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'jobId' => 'job_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('jobId', $this->jobId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAtsJobParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        return $model;
    }
    /**
     * @description 业务唯一标识，接入前请提前沟通
     * @var string
     */
    public $bizCode;

    /**
     * @description 职位唯一标识
     * @var string
     */
    public $jobId;

}
