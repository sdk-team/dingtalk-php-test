<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAlitripBtripReimbursementParams\rq;

use AlibabaCloud\Tea\Model;

class auditList extends Model {
    protected $_name = [
        'userid' => 'userid',
        'status' => 'status',
        'operateTime' => 'operate_time',
        'note' => 'note',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('operateTime', $this->operateTime, true);
        Model::validatePattern('operateTime', $this->operateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return auditList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['operate_time'])){
            $model->operateTime = $map['operate_time'];
        }
        if(isset($map['note'])){
            $model->note = $map['note'];
        }
        return $model;
    }
    /**
     * @description 审批人id
     * @var string
     */
    public $userid;

    /**
     * @description 审批状态：0审批中 1已同意 2已拒绝 3已转交，4已取消 5已终止
     * @var int
     */
    public $status;

    /**
     * @description 审批操作时间
     * @var string
     */
    public $operateTime;

    /**
     * @description 备注
     * @var string
     */
    public $note;

}
