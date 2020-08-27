<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_agentOapiServiceResponseBody extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'name' => 'name',
        'logoUrl' => 'logo_url',
        'description' => 'description',
        'close' => 'close',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->logoUrl) {
            $res['logo_url'] = $this->logoUrl;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->close) {
            $res['close'] = $this->close;
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
     * @return Get_agentOapiServiceResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['logo_url'])){
            $model->logoUrl = $map['logo_url'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['close'])){
            $model->close = $map['close'];
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
     * @description agentid
     * @var int
     */
    public $agentid;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description logo_url
     * @var string
     */
    public $logoUrl;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description close
     * @var int
     */
    public $close;

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
