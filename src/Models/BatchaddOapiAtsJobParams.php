<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobParams\jobs;

class BatchaddOapiAtsJobParams extends Model {
    protected $_name = [
        'bizCode' => 'biz_code',
        'jobs' => 'jobs',
        'opUserId' => 'op_user_id',
    ];
    public function validate() {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('jobs', $this->jobs, true);
        Model::validateRequired('opUserId', $this->opUserId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->jobs) {
            $res['jobs'] = [];
            if(null !== $this->jobs && is_array($this->jobs)){
                $n = 0;
                foreach($this->jobs as $item){
                    $res['jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->opUserId) {
            $res['op_user_id'] = $this->opUserId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchaddOapiAtsJobParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['jobs'])){
            if(!empty($map['jobs'])){
                $model->jobs = [];
                $n = 0;
                foreach($map['jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['op_user_id'])){
            $model->opUserId = $map['op_user_id'];
        }
        return $model;
    }
    /**
     * @description 招聘业务标识
     * @var string
     */
    public $bizCode;

    /**
     * @description 职位列表，单次最多20个
     * @var array
     */
    public $jobs;

    /**
     * @description 操作人员工标识
     * @var string
     */
    public $opUserId;

}
