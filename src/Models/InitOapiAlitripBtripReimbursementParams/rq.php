<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAlitripBtripReimbursementParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAlitripBtripReimbursementParams\rq\operator;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAlitripBtripReimbursementParams\rq\auditList;

class rq extends Model {
    protected $_name = [
        'title' => 'title',
        'payAmount' => 'pay_amount',
        'corpid' => 'corpid',
        'departId' => 'depart_id',
        'thirdpartyFlowId' => 'thirdparty_flow_id',
        'status' => 'status',
        'applyFlowNo' => 'apply_flow_no',
        'detailUrl' => 'detail_url',
        'isvCode' => 'isv_code',
        'operator' => 'operator',
        'auditList' => 'audit_list',
        'departName' => 'depart_name',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('payAmount', $this->payAmount, true);
        Model::validateRequired('corpid', $this->corpid, true);
        Model::validateRequired('thirdpartyFlowId', $this->thirdpartyFlowId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('detailUrl', $this->detailUrl, true);
        Model::validateRequired('isvCode', $this->isvCode, true);
        Model::validateRequired('operator', $this->operator, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->thirdpartyFlowId) {
            $res['thirdparty_flow_id'] = $this->thirdpartyFlowId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->applyFlowNo) {
            $res['apply_flow_no'] = $this->applyFlowNo;
        }
        if (null !== $this->detailUrl) {
            $res['detail_url'] = $this->detailUrl;
        }
        if (null !== $this->isvCode) {
            $res['isv_code'] = $this->isvCode;
        }
        if (null !== $this->operator) {
            $res['operator'] = null !== $this->operator ? $this->operator->toMap() : null;
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
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['pay_amount'])){
            $model->payAmount = $map['pay_amount'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['depart_id'])){
            $model->departId = $map['depart_id'];
        }
        if(isset($map['thirdparty_flow_id'])){
            $model->thirdpartyFlowId = $map['thirdparty_flow_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['apply_flow_no'])){
            $model->applyFlowNo = $map['apply_flow_no'];
        }
        if(isset($map['detail_url'])){
            $model->detailUrl = $map['detail_url'];
        }
        if(isset($map['isv_code'])){
            $model->isvCode = $map['isv_code'];
        }
        if(isset($map['operator'])){
            $model->operator = operator::fromMap($map['operator']);
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
        if(isset($map['depart_name'])){
            $model->departName = $map['depart_name'];
        }
        return $model;
    }
    /**
     * @description 报销单标题
     * @var string
     */
    public $title;

    /**
     * @description 报销金额
     * @var int
     */
    public $payAmount;

    /**
     * @description corp id
     * @var string
     */
    public $corpid;

    /**
     * @description 部门ID，不填时取用户所在部门id
     * @var string
     */
    public $departId;

    /**
     * @description 第三方流程id
     * @var string
     */
    public $thirdpartyFlowId;

    /**
     * @description 状态  0：审批中，1：已同意，2：已拒绝，4：已撤销
     * @var int
     */
    public $status;

    /**
     * @description 申请单编号
     * @var int
     */
    public $applyFlowNo;

    /**
     * @description 报销单详情
     * @var string
     */
    public $detailUrl;

    /**
     * @description isv标识
     * @var string
     */
    public $isvCode;

    /**
     * @description 报销人
     * @var operator
     */
    public $operator;

    /**
     * @description 审批列表
     * @var array
     */
    public $auditList;

    /**
     * @description 部门名称，不填时取用户所在部门id
     * @var string
     */
    public $departName;

}
