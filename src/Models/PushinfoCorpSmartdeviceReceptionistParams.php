<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class PushinfoCorpSmartdeviceReceptionistParams extends Model {
    protected $_name = [
        'microappAgentId' => 'microapp_agent_id',
        'descTemplate' => 'desc_template',
        'descContent' => 'desc_content',
    ];
    public function validate() {
        Model::validateRequired('microappAgentId', $this->microappAgentId, true);
        Model::validateRequired('descTemplate', $this->descTemplate, true);
        Model::validateRequired('descContent', $this->descContent, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->microappAgentId) {
            $res['microapp_agent_id'] = $this->microappAgentId;
        }
        if (null !== $this->descTemplate) {
            $res['desc_template'] = $this->descTemplate;
        }
        if (null !== $this->descContent) {
            $res['desc_content'] = $this->descContent;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PushinfoCorpSmartdeviceReceptionistParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['microapp_agent_id'])){
            $model->microappAgentId = $map['microapp_agent_id'];
        }
        if(isset($map['desc_template'])){
            $model->descTemplate = $map['desc_template'];
        }
        if(isset($map['desc_content'])){
            $model->descContent = $map['desc_content'];
        }
        return $model;
    }
    /**
     * @description 微应用agentID
     * @var int
     */
    public $microappAgentId;

    /**
     * @description 智能前台信息展示模板ID，需要向智能硬件团队申请
     * @var string
     */
    public $descTemplate;

    /**
     * @description 展示模板需要的变量数据
     * @var string
     */
    public $descContent;

}
