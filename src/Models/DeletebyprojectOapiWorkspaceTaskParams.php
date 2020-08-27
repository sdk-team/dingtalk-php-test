<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeletebyprojectOapiWorkspaceTaskParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'operatorUserid' => 'operator_userid',
        'projectId' => 'project_id',
    ];
    public function validate() {
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
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
        return $res;
    }
    /**
     * @param array $map
     * @return DeletebyprojectOapiWorkspaceTaskParams
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
     * @description 任务所属项目(虚拟企业），基于项目空间的项目
     * @var string
     */
    public $projectId;

}
