<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendOapiDingParams\openDingSendVo;

class SendOapiDingParams extends Model {
    protected $_name = [
        'openDingSendVo' => 'open_ding_send_vo',
    ];
    public function validate() {
        Model::validateRequired('openDingSendVo', $this->openDingSendVo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->openDingSendVo) {
            $res['open_ding_send_vo'] = null !== $this->openDingSendVo ? $this->openDingSendVo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendOapiDingParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['open_ding_send_vo'])){
            $model->openDingSendVo = openDingSendVo::fromMap($map['open_ding_send_vo']);
        }
        return $model;
    }
    /**
     * @description 发DING的请求体
     * @var openDingSendVo
     */
    public $openDingSendVo;

}
