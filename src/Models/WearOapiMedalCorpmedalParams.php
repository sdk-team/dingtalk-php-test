<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class WearOapiMedalCorpmedalParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'templateId' => 'template_id',
        'operation' => 'operation',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('operation', $this->operation, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return WearOapiMedalCorpmedalParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['template_id'])){
            $model->templateId = $map['template_id'];
        }
        if(isset($map['operation'])){
            $model->operation = $map['operation'];
        }
        return $model;
    }
    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 勋章模板ID
     * @var int
     */
    public $templateId;

    /**
     * @description 1 佩戴，2 摘除
     * @var int
     */
    public $operation;

}
