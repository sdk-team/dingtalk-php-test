<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SyncOapiProcessParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'srcProcessCode' => 'src_process_code',
        'targetProcessCode' => 'target_process_code',
        'bizCategoryId' => 'biz_category_id',
        'processName' => 'process_name',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('srcProcessCode', $this->srcProcessCode, true);
        Model::validateRequired('targetProcessCode', $this->targetProcessCode, true);
        Model::validateMaxLength('bizCategoryId', $this->bizCategoryId, 64);
        Model::validateMaxLength('processName', $this->processName, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->srcProcessCode) {
            $res['src_process_code'] = $this->srcProcessCode;
        }
        if (null !== $this->targetProcessCode) {
            $res['target_process_code'] = $this->targetProcessCode;
        }
        if (null !== $this->bizCategoryId) {
            $res['biz_category_id'] = $this->bizCategoryId;
        }
        if (null !== $this->processName) {
            $res['process_name'] = $this->processName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SyncOapiProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['src_process_code'])){
            $model->srcProcessCode = $map['src_process_code'];
        }
        if(isset($map['target_process_code'])){
            $model->targetProcessCode = $map['target_process_code'];
        }
        if(isset($map['biz_category_id'])){
            $model->bizCategoryId = $map['biz_category_id'];
        }
        if(isset($map['process_name'])){
            $model->processName = $map['process_name'];
        }
        return $model;
    }
    /**
     * @description 企业微应用标识
     * @var int
     */
    public $agentId;

    /**
     * @description 源审批流的唯一码
     * @var string
     */
    public $srcProcessCode;

    /**
     * @description 目标审批流的唯一码
     * @var string
     */
    public $targetProcessCode;

    /**
     * @description 业务分类标识（建议采用JAVA包名的命名方式,如:com.alibaba）
     * @var string
     */
    public $bizCategoryId;

    /**
     * @description 审批流名称
     * @var string
     */
    public $processName;

}
