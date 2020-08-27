<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessagestatusOapiImpaasMessageParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetmessagestatusOapiImpaasMessageParams\request\senderid;

class request extends Model {
    protected $_name = [
        'taskid' => 'taskid',
        'senderid' => 'senderid',
    ];
    public function validate() {
        Model::validateRequired('taskid', $this->taskid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->taskid) {
            $res['taskid'] = $this->taskid;
        }
        if (null !== $this->senderid) {
            $res['senderid'] = null !== $this->senderid ? $this->senderid->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['taskid'])){
            $model->taskid = $map['taskid'];
        }
        if(isset($map['senderid'])){
            $model->senderid = senderid::fromMap($map['senderid']);
        }
        return $model;
    }
    /**
     * @description 异步返回的任务ID
     * @var int
     */
    public $taskid;

    /**
     * @description 账号信息
     * @var senderid
     */
    public $senderid;

}
