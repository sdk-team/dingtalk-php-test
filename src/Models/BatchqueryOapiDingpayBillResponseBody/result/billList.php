<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\BatchqueryOapiDingpayBillResponseBody\result;

use AlibabaCloud\Tea\Model;

class billList extends Model {
    protected $_name = [
        'amount' => 'amount',
        'applyPayOperatorUserid' => 'apply_pay_operator_userid',
        'billCategory' => 'bill_category',
        'billNo' => 'bill_no',
        'bizCode' => 'biz_code',
        'createOperatorUserid' => 'create_operator_userid',
        'extension' => 'extension',
        'gmtApplyPay' => 'gmt_apply_pay',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'gmtPay' => 'gmt_pay',
        'orderNo' => 'order_no',
        'outBizNo' => 'out_biz_no',
        'payChannel' => 'pay_channel',
        'payChannelBizNo' => 'pay_channel_biz_no',
        'payeeId' => 'payee_id',
        'payeeUserType' => 'payee_user_type',
        'payerId' => 'payer_id',
        'payerUserType' => 'payer_user_type',
        'principalId' => 'principal_id',
        'sourceAppId' => 'source_app_id',
        'status' => 'status',
        'title' => 'title',
        'payChannelPayerRealUid' => 'pay_channel_payer_real_uid',
        'terminationReason' => 'termination_reason',
        'terminationOperatorId' => 'termination_operator_id',
        'receiptorType' => 'receiptor_type',
        'payChannelPayeeRealUid' => 'pay_channel_payee_real_uid',
    ];
    public function validate() {
        Model::validatePattern('gmtApplyPay', $this->gmtApplyPay, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtPay', $this->gmtPay, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->applyPayOperatorUserid) {
            $res['apply_pay_operator_userid'] = $this->applyPayOperatorUserid;
        }
        if (null !== $this->billCategory) {
            $res['bill_category'] = $this->billCategory;
        }
        if (null !== $this->billNo) {
            $res['bill_no'] = $this->billNo;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->createOperatorUserid) {
            $res['create_operator_userid'] = $this->createOperatorUserid;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->gmtApplyPay) {
            $res['gmt_apply_pay'] = $this->gmtApplyPay;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->gmtPay) {
            $res['gmt_pay'] = $this->gmtPay;
        }
        if (null !== $this->orderNo) {
            $res['order_no'] = $this->orderNo;
        }
        if (null !== $this->outBizNo) {
            $res['out_biz_no'] = $this->outBizNo;
        }
        if (null !== $this->payChannel) {
            $res['pay_channel'] = $this->payChannel;
        }
        if (null !== $this->payChannelBizNo) {
            $res['pay_channel_biz_no'] = $this->payChannelBizNo;
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
        if (null !== $this->principalId) {
            $res['principal_id'] = $this->principalId;
        }
        if (null !== $this->sourceAppId) {
            $res['source_app_id'] = $this->sourceAppId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->payChannelPayerRealUid) {
            $res['pay_channel_payer_real_uid'] = $this->payChannelPayerRealUid;
        }
        if (null !== $this->terminationReason) {
            $res['termination_reason'] = $this->terminationReason;
        }
        if (null !== $this->terminationOperatorId) {
            $res['termination_operator_id'] = $this->terminationOperatorId;
        }
        if (null !== $this->receiptorType) {
            $res['receiptor_type'] = $this->receiptorType;
        }
        if (null !== $this->payChannelPayeeRealUid) {
            $res['pay_channel_payee_real_uid'] = $this->payChannelPayeeRealUid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return billList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['amount'])){
            $model->amount = $map['amount'];
        }
        if(isset($map['apply_pay_operator_userid'])){
            $model->applyPayOperatorUserid = $map['apply_pay_operator_userid'];
        }
        if(isset($map['bill_category'])){
            $model->billCategory = $map['bill_category'];
        }
        if(isset($map['bill_no'])){
            $model->billNo = $map['bill_no'];
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        if(isset($map['create_operator_userid'])){
            $model->createOperatorUserid = $map['create_operator_userid'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['gmt_apply_pay'])){
            $model->gmtApplyPay = $map['gmt_apply_pay'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['gmt_pay'])){
            $model->gmtPay = $map['gmt_pay'];
        }
        if(isset($map['order_no'])){
            $model->orderNo = $map['order_no'];
        }
        if(isset($map['out_biz_no'])){
            $model->outBizNo = $map['out_biz_no'];
        }
        if(isset($map['pay_channel'])){
            $model->payChannel = $map['pay_channel'];
        }
        if(isset($map['pay_channel_biz_no'])){
            $model->payChannelBizNo = $map['pay_channel_biz_no'];
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
        if(isset($map['principal_id'])){
            $model->principalId = $map['principal_id'];
        }
        if(isset($map['source_app_id'])){
            $model->sourceAppId = $map['source_app_id'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['pay_channel_payer_real_uid'])){
            $model->payChannelPayerRealUid = $map['pay_channel_payer_real_uid'];
        }
        if(isset($map['termination_reason'])){
            $model->terminationReason = $map['termination_reason'];
        }
        if(isset($map['termination_operator_id'])){
            $model->terminationOperatorId = $map['termination_operator_id'];
        }
        if(isset($map['receiptor_type'])){
            $model->receiptorType = $map['receiptor_type'];
        }
        if(isset($map['pay_channel_payee_real_uid'])){
            $model->payChannelPayeeRealUid = $map['pay_channel_payee_real_uid'];
        }
        return $model;
    }
    /**
     * @description 金额（单位：分）
     * @var int
     */
    public $amount;

    /**
     * @description 发起支付操作员userId
     * @var string
     */
    public $applyPayOperatorUserid;

    /**
     * @description INCOME收入、EXPENSE支出
     * @var string
     */
    public $billCategory;

    /**
     * @description 账单号
     * @var string
     */
    public $billNo;

    /**
     * @description 业务代码
     * @var string
     */
    public $bizCode;

    /**
     * @description 创单操作员userId
     * @var string
     */
    public $createOperatorUserid;

    /**
     * @description 扩展属性
     * @var string
     */
    public $extension;

    /**
     * @description 申请支付时间
     * @var string
     */
    public $gmtApplyPay;

    /**
     * @description 创单时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 记录更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 完成付款时间
     * @var string
     */
    public $gmtPay;

    /**
     * @description 订单号
     * @var string
     */
    public $orderNo;

    /**
     * @description 外部流水号
     * @var string
     */
    public $outBizNo;

    /**
     * @description 支付渠道
     * @var string
     */
    public $payChannel;

    /**
     * @description 支付渠道方流水号
     * @var string
     */
    public $payChannelBizNo;

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
     * @description 记账主体corpId或者userId
     * @var string
     */
    public $principalId;

    /**
     * @description 来源应用ID
     * @var string
     */
    public $sourceAppId;

    /**
     * @description 状态
     * @var string
     */
    public $status;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 支付渠道方付款者实际出资UID
     * @var string
     */
    public $payChannelPayerRealUid;

    /**
     * @description 中止支付原因
     * @var string
     */
    public $terminationReason;

    /**
     * @description 中止操作员id
     * @var string
     */
    public $terminationOperatorId;

    /**
     * @description 收款人账户类型
     * @var string
     */
    public $receiptorType;

    /**
     * @description 收款方真实账号
     * @var string
     */
    public $payChannelPayeeRealUid;

}
