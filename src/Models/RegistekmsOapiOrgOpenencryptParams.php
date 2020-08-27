<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\RegistekmsOapiOrgOpenencryptParams\topKmsMeta;

class RegistekmsOapiOrgOpenencryptParams extends Model {
    protected $_name = [
        'topKmsMeta' => 'top_kms_meta',
    ];
    public function validate() {
        Model::validateRequired('topKmsMeta', $this->topKmsMeta, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->topKmsMeta) {
            $res['top_kms_meta'] = null !== $this->topKmsMeta ? $this->topKmsMeta->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return RegistekmsOapiOrgOpenencryptParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['top_kms_meta'])){
            $model->topKmsMeta = topKmsMeta::fromMap($map['top_kms_meta']);
        }
        return $model;
    }
    /**
     * @description 请求参数
     * @var topKmsMeta
     */
    public $topKmsMeta;

}
