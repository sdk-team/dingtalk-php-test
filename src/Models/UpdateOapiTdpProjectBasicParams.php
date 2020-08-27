<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiTdpProjectBasicParams\project;

class UpdateOapiTdpProjectBasicParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'operatorUserid' => 'operator_userid',
        'projectId' => 'project_id',
        'project' => 'project',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->project) {
            $res['project'] = null !== $this->project ? $this->project->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiTdpProjectBasicParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        if(isset($map['project_id'])){
            $model->projectId = $map['project_id'];
        }
        if(isset($map['project'])){
            $model->project = project::fromMap($map['project']);
        }
        return $model;
    }
    /**
     * @description 微应用agentId
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 操作者id
     * @var string
     */
    public $operatorUserid;

    /**
     * @description 项目ID
     * @var string
     */
    public $projectId;

    /**
     * @description 项目信息
     * @var project
     */
    public $project;

}
