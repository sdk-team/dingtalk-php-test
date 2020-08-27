<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAlitripBtripReimbursementParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiAlitripBtripReimbursementParams\rq\auditList;

class rq extends Model {
    protected $_name = [
        'flowNo' => 'flow_no',
        'corpid' => 'corpid',
        'auditList' => 'audit_list',
        'operateTime' => 'operate_time',
        'status' => 'status',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
    ];
    public function validate() {
        Model::validateRequired('flowNo', $this->flowNo, true);
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('auditList', $this->auditList, true);
        Model::validateRequired('operateTime', $this->operateTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('thirdpartyFlowId', $this->thirdpartyFlowId, true);
        Model::validatePattern('operateTime', $this->operateTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->flowNo) {
            $res['flow_no'] = $this->flowNo;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->auditList) {
            $res['audit_list'] = [];
            if(null !== $this->auditList && is_array($this->auditList)){
                $n = 0;
                foreach($this->auditList as $item){
                    $res['audit_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operateTime) {
            $res['operate_time'] = $this->operateTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->thirdpartyFlowId) {
            $res['thirdparty_flow_id'] = $this->thirdpartyFlowId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['flow_no'])){
            $model->flowNo = $map['flow_no'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['audit_list'])){
            if(!empty($map['audit_list'])){
                $model->auditList = [];
                $n = 0;
                foreach($map['audit_list'] as $item) {
                    $model->auditList[$n++] = null !== $item ? auditList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['operate_time'])){
            $model->operateTime = $map['operate_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['thirdparty_flow_id'])){
            $model->thirdpartyFlowId = $map['thirdparty_flow_id'];
        }
        return $model;
    }
    /**
     * @description 审批单号
     * @var int
     */
    public $flowNo;

    /**
     * @description corp id
     * @var string
     */
    public $corpid;

    /**
     * @description 审批人列表
     * @var array
     */
    public $auditList;

    /**
     * @description 审批操作时间
     * @var string
     */
    public $operateTime;

    /**
     * @description 审批状态
     * @var int
     */
    public $status;

    /**
     * @description 第三方报销单id
     * @var string
     */
    public $thirdpartyFlowId;

}
