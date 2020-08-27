<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpgradeOapiProcessTemplateParams extends Model {
    protected $_name = [
        'processCode' => 'process_code',
        'formComponentId' => 'form_component_id',
        'detailComponentId' => 'detail_component_id',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validateRequired('processCode', $this->processCode, true);
        Model::validateRequired('formComponentId', $this->formComponentId, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->formComponentId) {
            $res['form_component_id'] = $this->formComponentId;
        }
        if (null !== $this->detailComponentId) {
            $res['detail_component_id'] = $this->detailComponentId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpgradeOapiProcessTemplateParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['form_component_id'])){
            $model->formComponentId = $map['form_component_id'];
        }
        if(isset($map['detail_component_id'])){
            $model->detailComponentId = $map['detail_component_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 流程code
     * @var string
     */
    public $processCode;

    /**
     * @description 数组或金额类组件id
     * @var string
     */
    public $formComponentId;

    /**
     * @description 明细组件id
     * @var string
     */
    public $detailComponentId;

    /**
     * @description 其实是staffId
     * @var string
     */
    public $userid;

}
