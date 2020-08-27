<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRhinoHumanresEmployeeProcessCapacityParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'tenantId' => 'tenant_id',
        'workNos' => 'work_nos',
        'category' => 'category',
        'processStructuralClusterIdList' => 'process_structural_cluster_id_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->workNos) {
            $res['work_nos'] = $this->workNos;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->processStructuralClusterIdList) {
            $res['process_structural_cluster_id_list'] = $this->processStructuralClusterIdList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoHumanresEmployeeProcessCapacityParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['work_nos'])){
            if(!empty($map['work_nos'])){
                $model->workNos = $map['work_nos'];
            }
        }
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        if(isset($map['process_structural_cluster_id_list'])){
            if(!empty($map['process_structural_cluster_id_list'])){
                $model->processStructuralClusterIdList = $map['process_structural_cluster_id_list'];
            }
        }
        return $model;
    }
    /**
     * @description 1
     * @var string
     */
    public $userid;

    /**
     * @description 1
     * @var string
     */
    public $tenantId;

    /**
     * @description 1
     * @var array
     */
    public $workNos;

    /**
     * @description 1
     * @var string
     */
    public $category;

    /**
     * @description 1
     * @var array
     */
    public $processStructuralClusterIdList;

}
