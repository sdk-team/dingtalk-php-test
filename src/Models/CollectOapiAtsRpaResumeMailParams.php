<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CollectOapiAtsRpaResumeMailParams\param;

class CollectOapiAtsRpaResumeMailParams extends Model {
    protected $_name = [
        'param' => 'param',
        'bizCode' => 'biz_code',
    ];
    public function validate() {
        Model::validateRequired('param', $this->param, true);
        Model::validateRequired('bizCode', $this->bizCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->param) {
            $res['param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CollectOapiAtsRpaResumeMailParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['param'])){
            $model->param = param::fromMap($map['param']);
        }
        if(isset($map['biz_code'])){
            $model->bizCode = $map['biz_code'];
        }
        return $model;
    }
    /**
     * @description 简历文件参数
     * @var param
     */
    public $param;

    /**
     * @description 业务唯一标识，接入前请提前沟通
     * @var string
     */
    public $bizCode;

}
