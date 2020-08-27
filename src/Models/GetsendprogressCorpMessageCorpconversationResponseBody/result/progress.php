<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsendprogressCorpMessageCorpconversationResponseBody\result;

use AlibabaCloud\Tea\Model;

class progress extends Model {
    protected $_name = [
        'progressInPercent' => 'progress_in_percent',
        'status' => 'status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->progressInPercent) {
            $res['progress_in_percent'] = $this->progressInPercent;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return progress
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['progress_in_percent'])){
            $model->progressInPercent = $map['progress_in_percent'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 取值 0-100，表示处理的百分比
     * @var int
     */
    public $progressInPercent;

    /**
     * @description 任务执行状态,0=未开始,1=处理中,2=处理完毕
     * @var int
     */
    public $status;

}
