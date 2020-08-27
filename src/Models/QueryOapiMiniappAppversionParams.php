<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiMiniappAppversionParams extends Model {
    protected $_name = [
        'modelKey' => 'model_key',
    ];
    public function validate() {
        Model::validateRequired('modelKey', $this->modelKey, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->modelKey) {
            $res['model_key'] = $this->modelKey;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiMiniappAppversionParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['model_key'])){
            $model->modelKey = $map['model_key'];
        }
        return $model;
    }
    /**
     * @description 查询参数
     * @var string
     */
    public $modelKey;

}
