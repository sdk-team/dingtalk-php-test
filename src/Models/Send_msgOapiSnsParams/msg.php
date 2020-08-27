<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_msgOapiSnsParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Send_msgOapiSnsParams\msg\eapp;

class msg extends Model {
    protected $_name = [
        'msgtype' => 'msgtype',
        'eapp' => 'eapp',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->msgtype) {
            $res['msgtype'] = $this->msgtype;
        }
        if (null !== $this->eapp) {
            $res['eapp'] = null !== $this->eapp ? $this->eapp->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return msg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['msgtype'])){
            $model->msgtype = $map['msgtype'];
        }
        if(isset($map['eapp'])){
            $model->eapp = eapp::fromMap($map['eapp']);
        }
        return $model;
    }
    /**
     * @description 消息类型
     * @var string
     */
    public $msgtype;

    /**
     * @description 消息内容
     * @var eapp
     */
    public $eapp;

}
