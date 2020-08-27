<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels\contentModels;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels\baseModel;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UploadOapiPlanetomFeedsParams\feedInfoModels\payModel;

class feedInfoModels extends Model {
    protected $_name = [
        'contentModels' => 'content_models',
        'baseModel' => 'base_model',
        'payModel' => 'pay_model',
        'workGroupName' => 'work_group_name',
        'resourceType' => 'resource_type',
    ];
    public function validate() {
        Model::validateRequired('contentModels', $this->contentModels, true);
        Model::validateRequired('baseModel', $this->baseModel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->contentModels) {
            $res['content_models'] = [];
            if(null !== $this->contentModels && is_array($this->contentModels)){
                $n = 0;
                foreach($this->contentModels as $item){
                    $res['content_models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->baseModel) {
            $res['base_model'] = null !== $this->baseModel ? $this->baseModel->toMap() : null;
        }
        if (null !== $this->payModel) {
            $res['pay_model'] = null !== $this->payModel ? $this->payModel->toMap() : null;
        }
        if (null !== $this->workGroupName) {
            $res['work_group_name'] = $this->workGroupName;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return feedInfoModels
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['content_models'])){
            if(!empty($map['content_models'])){
                $model->contentModels = [];
                $n = 0;
                foreach($map['content_models'] as $item) {
                    $model->contentModels[$n++] = null !== $item ? contentModels::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['base_model'])){
            $model->baseModel = baseModel::fromMap($map['base_model']);
        }
        if(isset($map['pay_model'])){
            $model->payModel = payModel::fromMap($map['pay_model']);
        }
        if(isset($map['work_group_name'])){
            $model->workGroupName = $map['work_group_name'];
        }
        if(isset($map['resource_type'])){
            $model->resourceType = $map['resource_type'];
        }
        return $model;
    }
    /**
     * @description 内容列表，一个为单课，多个为系列课
     * @var array
     */
    public $contentModels;

    /**
     * @description 课程基础
     * @var baseModel
     */
    public $baseModel;

    /**
     * @description 支付信息
     * @var payModel
     */
    public $payModel;

    /**
     * @description 服务群名称
     * @var string
     */
    public $workGroupName;

    /**
     * @description 资源类型 0 免费公开课 4 平价引流课 5 专栏课 6 训练营课
     * @var int
     */
    public $resourceType;

}
