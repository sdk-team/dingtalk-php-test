<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_jsapi_ticketOapiResponseBody extends Model {
    protected $_name = [
        'expiresIn' => 'expires_in',
        'ticket' => 'ticket',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->expiresIn) {
            $res['expires_in'] = $this->expiresIn;
        }
        if (null !== $this->ticket) {
            $res['ticket'] = $this->ticket;
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
     * @return Get_jsapi_ticketOapiResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['expires_in'])){
            $model->expiresIn = $map['expires_in'];
        }
        if(isset($map['ticket'])){
            $model->ticket = $map['ticket'];
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
     * @description 票据过期时间
     * @var int
     */
    public $expiresIn;

    /**
     * @description 用于JS API的临时票据
     * @var string
     */
    public $ticket;

    /**
     * @description errmsg
     * @var string
     */
    public $errmsg;

    /**
     * @description errcode
     * @var int
     */
    public $errcode;

}
