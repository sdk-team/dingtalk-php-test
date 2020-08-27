<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateconfigOapiOpenencryptParams\topResourceKmsConfig;

class UpdateconfigOapiOpenencryptParams extends Model {
    protected $_name = [
        'topResourceKmsConfig' => 'top_resource_kms_config',
    ];
    public function validate() {
        Model::validateRequired('topResourceKmsConfig', $this->topResourceKmsConfig, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topResourceKmsConfig) {
            $res['top_resource_kms_config'] = null !== $this->topResourceKmsConfig ? $this->topResourceKmsConfig->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateconfigOapiOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_resource_kms_config'])){
            $model->topResourceKmsConfig = topResourceKmsConfig::fromMap($map['top_resource_kms_config']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topResourceKmsConfig
     */
    public $topResourceKmsConfig;

}
