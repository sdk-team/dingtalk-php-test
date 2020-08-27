<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresEmployeeProcessCapacityResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'workNo' => 'work_no',
        'statisticsValue' => 'statistics_value',
        'statisticCategory' => 'statistic_category',
        'productionQuantity' => 'production_quantity',
        'tenantId' => 'tenant_id',
        'processStructuralClusterId' => 'process_structural_cluster_id',
        'processCapacityId' => 'process_capacity_id',
        'category' => 'category',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->workNo) {
            $res['work_no'] = $this->workNo;
        }
        if (null !== $this->statisticsValue) {
            $res['statistics_value'] = $this->statisticsValue;
        }
        if (null !== $this->statisticCategory) {
            $res['statistic_category'] = $this->statisticCategory;
        }
        if (null !== $this->productionQuantity) {
            $res['production_quantity'] = $this->productionQuantity;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->processStructuralClusterId) {
            $res['process_structural_cluster_id'] = $this->processStructuralClusterId;
        }
        if (null !== $this->processCapacityId) {
            $res['process_capacity_id'] = $this->processCapacityId;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['work_no'])){
            $model->workNo = $map['work_no'];
        }
        if(isset($map['statistics_value'])){
            $model->statisticsValue = $map['statistics_value'];
        }
        if(isset($map['statistic_category'])){
            $model->statisticCategory = $map['statistic_category'];
        }
        if(isset($map['production_quantity'])){
            $model->productionQuantity = $map['production_quantity'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['process_structural_cluster_id'])){
            $model->processStructuralClusterId = $map['process_structural_cluster_id'];
        }
        if(isset($map['process_capacity_id'])){
            $model->processCapacityId = $map['process_capacity_id'];
        }
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        return $model;
    }
    /**
     * @description 工号
     * @var string
     */
    public $workNo;

    /**
     * @description 统计值
     * @var string
     */
    public $statisticsValue;

    /**
     * @description 统计类型
     * @var int
     */
    public $statisticCategory;

    /**
     * @description 经验值
     * @var int
     */
    public $productionQuantity;

    /**
     * @description 租户
     * @var string
     */
    public $tenantId;

    /**
     * @description 结构化工序id
     * @var int
     */
    public $processStructuralClusterId;

    /**
     * @description 工序技能id
     * @var int
     */
    public $processCapacityId;

    /**
     * @description 订单品类
     * @var string
     */
    public $category;

}
