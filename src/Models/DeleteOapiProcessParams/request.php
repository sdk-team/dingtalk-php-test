<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DeleteOapiProcessParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processCode' => 'process_code',
        'cleanRunningTask' => 'clean_running_task',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->cleanRunningTask) {
            $res['clean_running_task'] = $this->cleanRunningTask;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['clean_running_task'])){
            $model->cleanRunningTask = $map['clean_running_task'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId，ISV必填
     * @var int
     */
    public $agentid;

    /**
     * @description 流程code
     * @var string
     */
    public $processCode;

    /**
     * @description 是否清理运行中的任务
     * @var bool
     */
    public $cleanRunningTask;

}
