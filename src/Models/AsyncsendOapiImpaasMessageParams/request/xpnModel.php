<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AsyncsendOapiImpaasMessageParams\request;

use AlibabaCloud\Tea\Model;

class xpnModel extends Model {
    protected $_name = [
        'alertContent' => 'alert_content',
        'params' => 'params',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->alertContent) {
            $res['alert_content'] = $this->alertContent;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return xpnModel
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['alert_content'])){
            $model->alertContent = $map['alert_content'];
        }
        if(isset($map['params'])){
            $model->params = $map['params'];
        }
        return $model;
    }
    /**
     * @description 推送文案
     * @var string
     */
    public $alertContent;

    /**
     * @description 推送参数，透传
     * @var string
     */
    public $params;

}
