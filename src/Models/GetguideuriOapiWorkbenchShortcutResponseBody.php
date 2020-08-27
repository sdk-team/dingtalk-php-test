<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetguideuriOapiWorkbenchShortcutResponseBody extends Model {
    protected $_name = [
        'guideUri' => 'guide_uri',
        'errcode' => 'errcode',
        'errmsg' => 'errmsg',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->guideUri) {
            $res['guide_uri'] = $this->guideUri;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetguideuriOapiWorkbenchShortcutResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['guide_uri'])){
            $model->guideUri = $map['guide_uri'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        return $model;
    }
    /**
     * @description 快捷方式添加到工作台引导页地址
     * @var string
     */
    public $guideUri;

    /**
     * @description 服务返回码
     * @var int
     */
    public $errcode;

    /**
     * @description 服务返回信息
     * @var string
     */
    public $errmsg;

}
