<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAlitripBtripApprovalParams;

use AlibabaCloud\Tea\Model;

class rq extends Model {
    protected $_name = [
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'operateTime' => 'operate_time',
        'status' => 'status',
        'userid' => 'userid',
        'userName' => 'user_name',
        'note' => 'note',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('thirdpartApplyId', $this->thirdpartApplyId, true);
        Model::validateRequired('operateTime', $this->operateTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validatePattern('operateTime', $this->operateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thirdpart_apply_id'])){
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if(isset($map['operate_time'])){
            $model->operateTime = $map['operate_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
        }
        if(isset($map['note'])){
            $model->note = $map['note'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 外部申请单id
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @description 操作时间
     * @var string
     */
    public $operateTime;

    /**
     * @description 1已同意 2已拒绝 3已转交 4已取消
     * @var int
     */
    public $status;

    /**
     * @description 审批人id
     * @var string
     */
    public $userid;

    /**
     * @description 审批人名字
     * @var string
     */
    public $userName;

    /**
     * @description 备注
     * @var string
     */
    public $note;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
