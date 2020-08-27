<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class BatchquerycountOapiDingpayBillParams extends Model {
    protected $_name = [
        'billCategory' => 'bill_category',
        'bizCode' => 'biz_code',
        'extension' => 'extension',
        'gmtApplyPayBeginTime' => 'gmt_apply_pay_begin_time',
        'gmtApplyPayEndTime' => 'gmt_apply_pay_end_time',
        'gmtCreateBeginTime' => 'gmt_create_begin_time',
        'gmtCreateEndTime' => 'gmt_create_end_time',
        'gmtPayBeginTime' => 'gmt_pay_begin_time',
        'gmtPayEndTime' => 'gmt_pay_end_time',
        'maxAmount' => 'max_amount',
        'minAmount' => 'min_amount',
        'payChannelList' => 'pay_channel_list',
        'payChannelPayerRealUid' => 'pay_channel_payer_real_uid',
        'payeeId' => 'payee_id',
        'payeeUserType' => 'payee_user_type',
        'payerId' => 'payer_id',
        'payerUserType' => 'payer_user_type',
        'statusList' => 'status_list',
        'title' => 'title',
        'applyPayOperatorUserid' => 'apply_pay_operator_userid',
        'createOperatorUserid' => 'create_operator_userid',
        'receiptorTypeList' => 'receiptor_type_list',
        'terminationReason' => 'termination_reason',
    ];
    public function validate() {
        Model::validatePattern('gmtApplyPayBeginTime', $this->gmtApplyPayBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtApplyPayEndTime', $this->gmtApplyPayEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreateBeginTime', $this->gmtCreateBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreateEndTime', $this->gmtCreateEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtPayBeginTime', $this->gmtPayBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtPayEndTime', $this->gmtPayEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->billCategory) {
            $res['bill_category'] = $this->billCategory;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->gmtApplyPayBeginTime) {
            $res['gmt_apply_pay_begin_time'] = $this->gmtApplyPayBeginTime;
        }
        if (null !== $this->gmtApplyPayEndTime) {
            $res['gmt_apply_pay_end_time'] = $this->gmtApplyPayEndTime;
        }
        if (null !== $this->gmtCreateBeginTime) {
            $res['gmt_create_begin_time'] = $this->gmtCreateBeginTime;
        }
        if (null !== $this->gmtCreateEndTime) {
            $res['gmt_create_end_time'] = $this->gmtCreateEndTime;
        }
        if (null !== $this->gmtPayBeginTime) {
            $res['gmt_pay_begin_time'] = $this->gmtPayBeginTime;
        }
        if (null !== $this->gmtPayEndTime) {
            $res['gmt_pay_end_time'] = $this->gmtPayEndTime;
        }
        if (null !== $this->maxAmount) {
            $res['max_amount'] = $this->maxAmount;
        }
        if (null !== $this->minAmount) {
            $res['min_amount'] = $this->minAmount;
        }
        if (null !== $this->payChannelList) {
            $res['pay_channel_list'] = $this->payChannelList;
        }
        if (null !== $this->payChannelPayerRealUid) {
            $res['pay_channel_payer_real_uid'] = $this->payChannelPayerRealUid;
        }
        if (null !== $this->payeeId) {
            $res['payee_id'] = $this->payeeId;
        }
        if (null !== $this->payeeUserType) {
            $res['payee_user_type'] = $this->payeeUserType;
        }
        if (null !== $this->payerId) {
            $res['payer_id'] = $this->payerId;
        }
        if (null !== $this->payerUserType) {
            $res['payer_user_type'] = $this->payerUserType;
        }
        if (null !== $this->statusList) {
            $res['status_list'] = $this->statusList;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->applyPayOperatorUserid) {
            $res['apply_pay_operator_userid'] = $this->applyPayOperatorUserid;
        }
        if (null !== $this->createOperatorUserid) {
            $res['create_operator_userid'] = $this->createOperatorUserid;
        }
        if (null !== $this->receiptorTypeList) {
            $res['receiptor_type_list'] = $this->receiptorTypeList;
        }
        if (null !== $this->terminationReason) {
            $res['termination_reason'] = $this->terminationReason;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchquerycountOapiDingpayBillParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['bill_category'])){
            $model->billCategory = $map['bill_category'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['gmt_apply_pay_begin_time'])){
            $model->gmtApplyPayBeginTime = $map['gmt_apply_pay_begin_time'];
        }
        if(isset($map['gmt_apply_pay_end_time'])){
            $model->gmtApplyPayEndTime = $map['gmt_apply_pay_end_time'];
        }
        if(isset($map['gmt_create_begin_time'])){
            $model->gmtCreateBeginTime = $map['gmt_create_begin_time'];
        }
        if(isset($map['gmt_create_end_time'])){
            $model->gmtCreateEndTime = $map['gmt_create_end_time'];
        }
        if(isset($map['gmt_pay_begin_time'])){
            $model->gmtPayBeginTime = $map['gmt_pay_begin_time'];
        }
        if(isset($map['gmt_pay_end_time'])){
            $model->gmtPayEndTime = $map['gmt_pay_end_time'];
        }
        if(isset($map['max_amount'])){
            $model->maxAmount = $map['max_amount'];
        }
        if(isset($map['min_amount'])){
            $model->minAmount = $map['min_amount'];
        }
        if(isset($map['pay_channel_list'])){
            if(!empty($map['pay_channel_list'])){
                $model->payChannelList = $map['pay_channel_list'];
            }
        }
        if(isset($map['pay_channel_payer_real_uid'])){
            $model->payChannelPayerRealUid = $map['pay_channel_payer_real_uid'];
        }
        if(isset($map['payee_id'])){
            $model->payeeId = $map['payee_id'];
        }
        if(isset($map['payee_user_type'])){
            $model->payeeUserType = $map['payee_user_type'];
        }
        if(isset($map['payer_id'])){
            $model->payerId = $map['payer_id'];
        }
        if(isset($map['payer_user_type'])){
            $model->payerUserType = $map['payer_user_type'];
        }
        if(isset($map['status_list'])){
            if(!empty($map['status_list'])){
                $model->statusList = $map['status_list'];
            }
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['apply_pay_operator_userid'])){
            $model->applyPayOperatorUserid = $map['apply_pay_operator_userid'];
        }
        if(isset($map['create_operator_userid'])){
            $model->createOperatorUserid = $map['create_operator_userid'];
        }
        if(isset($map['receiptor_type_list'])){
            if(!empty($map['receiptor_type_list'])){
                $model->receiptorTypeList = $map['receiptor_type_list'];
            }
        }
        if(isset($map['termination_reason'])){
            $model->terminationReason = $map['termination_reason'];
        }
        return $model;
    }
    /**
     * @description INCOME收入、EXPENSE支出
     * @var string
     */
    public $billCategory;

    /**
     * @description 业务代码
     * @var string
     */
    public $bizCode;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extension;

    /**
     * @description 申请付款开始时间
     * @var string
     */
    public $gmtApplyPayBeginTime;

    /**
     * @description 申请付款截止时间
     * @var string
     */
    public $gmtApplyPayEndTime;

    /**
     * @description 创单开始时间
     * @var string
     */
    public $gmtCreateBeginTime;

    /**
     * @description 创单截止时间
     * @var string
     */
    public $gmtCreateEndTime;

    /**
     * @description 完成付款开始时间
     * @var string
     */
    public $gmtPayBeginTime;

    /**
     * @description 完成付款截止时间
     * @var string
     */
    public $gmtPayEndTime;

    /**
     * @description 最大金额（单位：分）
     * @var int
     */
    public $maxAmount;

    /**
     * @description 最小金额（单位：分）
     * @var int
     */
    public $minAmount;

    /**
     * @description 支付渠道列表
     * @var array
     */
    public $payChannelList;

    /**
     * @description 支付渠道方付款者实际出资UID
     * @var string
     */
    public $payChannelPayerRealUid;

    /**
     * @description 收款者corpId或者userId
     * @var string
     */
    public $payeeId;

    /**
     * @description 收款者类型
     * @var string
     */
    public $payeeUserType;

    /**
     * @description 付款者corpId或者userId
     * @var string
     */
    public $payerId;

    /**
     * @description 付款者类型
     * @var string
     */
    public $payerUserType;

    /**
     * @description 状态列表
     * @var array
     */
    public $statusList;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 申请支付者userid
     * @var string
     */
    public $applyPayOperatorUserid;

    /**
     * @description 创单者userid
     * @var string
     */
    public $createOperatorUserid;

    /**
     * @description 收款人账户类型
     * @var array
     */
    public $receiptorTypeList;

    /**
     * @description 中止支付原因
     * @var string
     */
    public $terminationReason;

}
