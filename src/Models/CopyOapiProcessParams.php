<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CopyOapiProcessParams extends Model {
    protected $_name = [
        'agentId' => 'agent_id',
        'processCode' => 'process_code',
        'bizCategoryId' => 'biz_category_id',
        'processName' => 'process_name',
        'description' => 'description',
        'copyType' => 'copy_type',
    ];
    public function validate() {
        Model::validateRequired('agentId', $this->agentId, true);
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateMaxLength('bizCategoryId', $this->bizCategoryId, 64);
        Model::validateMaxLength('processName', $this->processName, 64);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->bizCategoryId) {
            $res['biz_category_id'] = $this->bizCategoryId;
        }
        if (null !== $this->processName) {
            $res['process_name'] = $this->processName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->copyType) {
            $res['copy_type'] = $this->copyType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CopyOapiProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['biz_category_id'])){
            $model->bizCategoryId = $map['biz_category_id'];
        }
        if(isset($map['process_name'])){
            $model->processName = $map['process_name'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['copy_type'])){
            $model->copyType = $map['copy_type'];
        }
        return $model;
    }
    /**
     * @description 企业微应用标识
     * @var int
     */
    public $agentId;

    /**
     * @description 审批流的唯一码
     * @var string
     */
    public $processCode;

    /**
     * @description 业务分类标识（建议采用JAVA包名的命名方式，）
     * @var string
     */
    public $bizCategoryId;

    /**
     * @description 审批流名称
     * @var string
     */
    public $processName;

    /**
     * @description 审批流描述
     * @var string
     */
    public $description;

    /**
     * @description 复制类型，1 不包含流程信息，2 包含流程信息且审批中员工可见。默认为1
     * @var int
     */
    public $copyType;

}
