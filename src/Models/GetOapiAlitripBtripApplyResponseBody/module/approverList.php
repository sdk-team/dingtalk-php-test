<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAlitripBtripApplyResponseBody\module;

use AlibabaCloud\Tea\Model;

class approverList extends Model {
    protected $_name = [
        'order' => 'order',
        'userid' => 'userid',
        'userName' => 'user_name',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'note' => 'note',
        'operateTime' => 'operate_time',
    ];
    public function validate() {
        Model::validatePattern('operateTime', $this->operateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['status_desc'] = $this->statusDesc;
        }
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }
        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return approverList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order'])){
            $model->order = $map['order'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['status_desc'])){
            $model->statusDesc = $map['status_desc'];
        }
        if(isset($map['note'])){
            $model->note = $map['note'];
        }
        if(isset($map['operate_time'])){
            $model->operateTime = $map['operate_time'];
        }
        return $model;
    }
    /**
     * @description 审批人顺序
     * @var int
     */
    public $order;

    /**
     * @description 审批人id
     * @var string
     */
    public $userid;

    /**
     * @description 审批人名称
     * @var string
     */
    public $userName;

    /**
     * @description 审批状态：0审批中 1已同意 2已拒绝 3已转交，4已取消 5已终止 6发起审批 7评论
     * @var int
     */
    public $status;

    /**
     * @description 审批状态描述
     * @var string
     */
    public $statusDesc;

    /**
     * @description 审批意见
     * @var string
     */
    public $note;

    /**
     * @description 操作时间
     * @var string
     */
    public $operateTime;

}
