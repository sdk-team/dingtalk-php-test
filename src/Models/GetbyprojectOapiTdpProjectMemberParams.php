<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetbyprojectOapiTdpProjectMemberParams\pageRequest;

class GetbyprojectOapiTdpProjectMemberParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'projectId' => 'project_id',
        'pageRequest' => 'page_request',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->pageRequest) {
            $res['page_request'] = null !== $this->pageRequest ? $this->pageRequest->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetbyprojectOapiTdpProjectMemberParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['project_id'])){
            $model->projectId = $map['project_id'];
        }
        if(isset($map['page_request'])){
            $model->pageRequest = pageRequest::fromMap($map['page_request']);
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

    /**
     * @description 系统自动生成
     * @var pageRequest
     */
    public $pageRequest;

}
