<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiTdpProjectBasicParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'projectId' => 'project_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiTdpProjectBasicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['project_id'])){
            $model->projectId = $map['project_id'];
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 项目ID
     * @var string
     */
    public $projectId;

}
