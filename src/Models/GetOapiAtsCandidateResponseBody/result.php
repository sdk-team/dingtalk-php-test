<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAtsCandidateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'candidateId' => 'candidate_id',
        'gmtCreateMils' => 'gmt_create_mils',
        'gmtModifiedMils' => 'gmt_modified_mils',
        'name' => 'name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->candidateId) {
            $res['candidate_id'] = $this->candidateId;
        }
        if (null !== $this->gmtCreateMils) {
            $res['gmt_create_mils'] = $this->gmtCreateMils;
        }
        if (null !== $this->gmtModifiedMils) {
            $res['gmt_modified_mils'] = $this->gmtModifiedMils;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['candidate_id'])){
            $model->candidateId = $map['candidate_id'];
        }
        if(isset($map['gmt_create_mils'])){
            $model->gmtCreateMils = $map['gmt_create_mils'];
        }
        if(isset($map['gmt_modified_mils'])){
            $model->gmtModifiedMils = $map['gmt_modified_mils'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        return $model;
    }
    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 候选人id
     * @var string
     */
    public $candidateId;

    /**
     * @description 创建时间，unix毫秒时间戳
     * @var int
     */
    public $gmtCreateMils;

    /**
     * @description 修改时间，unix毫秒时间戳
     * @var int
     */
    public $gmtModifiedMils;

    /**
     * @description 候选人姓名
     * @var string
     */
    public $name;

}
