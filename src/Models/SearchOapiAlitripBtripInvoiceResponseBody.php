<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SearchOapiAlitripBtripInvoiceResponseBody\invoice;

class SearchOapiAlitripBtripInvoiceResponseBody extends Model {
    protected $_name = [
        'invoice' => 'invoice',
        'success' => 'success',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->invoice) {
            $res['invoice'] = [];
            if(null !== $this->invoice && is_array($this->invoice)){
                $n = 0;
                foreach($this->invoice as $item){
                    $res['invoice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchOapiAlitripBtripInvoiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['invoice'])){
            if(!empty($map['invoice'])){
                $model->invoice = [];
                $n = 0;
                foreach($map['invoice'] as $item) {
                    $model->invoice[$n++] = null !== $item ? invoice::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['success'])){
            $model->success = $map['success'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 发票列表
     * @var array
     */
    public $invoice;

    /**
     * @description 成功标识
     * @var bool
     */
    public $success;

    /**
     * @description 错误信息
     * @var string
     */
    public $errmsg;

    /**
     * @description 错误码
     * @var int
     */
    public $errcode;

}
