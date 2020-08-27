<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProcessStructuralClusterResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoHumanresProcessStructuralClusterResponseBody\model\processStructuralCluster;

class model extends Model {
    protected $_name = [
        'processStructuralCluster' => 'process_structural_cluster',
        'bizIdProcess' => 'biz_id_process',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->processStructuralCluster) {
            $res['process_structural_cluster'] = null !== $this->processStructuralCluster ? $this->processStructuralCluster->toMap() : null;
        }
        if (null !== $this->bizIdProcess) {
            $res['biz_id_process'] = $this->bizIdProcess;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_structural_cluster'])){
            $model->processStructuralCluster = processStructuralCluster::fromMap($map['process_structural_cluster']);
        }
        if(isset($map['biz_id_process'])){
            $model->bizIdProcess = $map['biz_id_process'];
        }
        return $model;
    }
    /**
     * @description 结构化工序详情
     * @var processStructuralCluster
     */
    public $processStructuralCluster;

    /**
     * @description 工序id
     * @var string
     */
    public $bizIdProcess;

}
