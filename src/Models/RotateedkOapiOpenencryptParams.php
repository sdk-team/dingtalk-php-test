<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RotateedkOapiOpenencryptParams\topEdkRotateManual;

class RotateedkOapiOpenencryptParams extends Model {
    protected $_name = [
        'topEdkRotateManual' => 'top_edk_rotate_manual',
    ];
    public function validate() {
        Model::validateRequired('topEdkRotateManual', $this->topEdkRotateManual, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topEdkRotateManual) {
            $res['top_edk_rotate_manual'] = null !== $this->topEdkRotateManual ? $this->topEdkRotateManual->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RotateedkOapiOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_edk_rotate_manual'])){
            $model->topEdkRotateManual = topEdkRotateManual::fromMap($map['top_edk_rotate_manual']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topEdkRotateManual
     */
    public $topEdkRotateManual;

}
