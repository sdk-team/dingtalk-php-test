<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiAtsCandidateParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'candidateId' => 'candidate_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('candidateId', $this->candidateId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->candidateId) {
            $res['candidate_id'] = $this->candidateId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiAtsCandidateParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['candidate_id'])){
            $model->candidateId = $map['candidate_id'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 候选人id
     * @var string
     */
    public $candidateId;

}
