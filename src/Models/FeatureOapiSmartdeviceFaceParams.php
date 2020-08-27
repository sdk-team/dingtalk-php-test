<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class FeatureOapiSmartdeviceFaceParams extends Model {
    protected $_name = [
        'modelType' => 'model_type',
        'modelVersion' => 'model_version',
        'useridList' => 'userid_list',
    ];
    public function validate() {
        Model::validateRequired('modelType', $this->modelType, true);
        Model::validateRequired('modelVersion', $this->modelVersion, true);
        Model::validateRequired('useridList', $this->useridList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->modelType) {
            $res['model_type'] = $this->modelType;
        }
        if (null !== $this->modelVersion) {
            $res['model_version'] = $this->modelVersion;
        }
        if (null !== $this->useridList) {
            $res['userid_list'] = $this->useridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FeatureOapiSmartdeviceFaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['model_type'])){
            $model->modelType = $map['model_type'];
        }
        if(isset($map['model_version'])){
            $model->modelVersion = $map['model_version'];
        }
        if(isset($map['userid_list'])){
            if(!empty($map['userid_list'])){
                $model->useridList = $map['userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 算法模型
     * @var int
     */
    public $modelType;

    /**
     * @description 模型版本
     * @var string
     */
    public $modelVersion;

    /**
     * @description 用户id列表
     * @var array
     */
    public $useridList;

}
