<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchaddOapiAtsJobResponseBody\result\result\result;

use AlibabaCloud\Tea\Model;

class item extends Model {
    protected $_name = [
        'name' => 'name',
        'jobCode' => 'job_code',
        'jobId' => 'job_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->jobCode) {
            $res['job_code'] = $this->jobCode;
        }
        if (null !== $this->jobId) {
            $res['job_id'] = $this->jobId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return item
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['job_code'])){
            $model->jobCode = $map['job_code'];
        }
        if(isset($map['job_id'])){
            $model->jobId = $map['job_id'];
        }
        return $model;
    }
    /**
     * @description 职位名称
     * @var string
     */
    public $name;

    /**
     * @description 职位编号
     * @var string
     */
    public $jobCode;

    /**
     * @description 职位唯一标识
     * @var string
     */
    public $jobId;

}
