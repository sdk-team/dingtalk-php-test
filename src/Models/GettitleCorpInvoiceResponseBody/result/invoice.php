<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GettitleCorpInvoiceResponseBody\result;

use AlibabaCloud\Tea\Model;

class invoice extends Model {
    protected $_name = [
        'remark' => 'remark',
        'address' => 'address',
        'contact' => 'contact',
        'bankName' => 'bank_name',
        'account' => 'account',
        'dutyPara' => 'duty_para',
        'title' => 'title',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }
        if (null !== $this->bankName) {
            $res['bank_name'] = $this->bankName;
        }
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->dutyPara) {
            $res['duty_para'] = $this->dutyPara;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return invoice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['remark'])){
            $model->remark = $map['remark'];
        }
        if(isset($map['address'])){
            $model->address = $map['address'];
        }
        if(isset($map['contact'])){
            $model->contact = $map['contact'];
        }
        if(isset($map['bank_name'])){
            $model->bankName = $map['bank_name'];
        }
        if(isset($map['account'])){
            $model->account = $map['account'];
        }
        if(isset($map['duty_para'])){
            $model->dutyPara = $map['duty_para'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        return $model;
    }
    /**
     * @description 备注
     * @var string
     */
    public $remark;

    /**
     * @description 企业注册地址
     * @var string
     */
    public $address;

    /**
     * @description 联系方式
     * @var string
     */
    public $contact;

    /**
     * @description 开户行
     * @var string
     */
    public $bankName;

    /**
     * @description 银行账户
     * @var string
     */
    public $account;

    /**
     * @description 税号
     * @var string
     */
    public $dutyPara;

    /**
     * @description 发票抬头
     * @var string
     */
    public $title;

}
