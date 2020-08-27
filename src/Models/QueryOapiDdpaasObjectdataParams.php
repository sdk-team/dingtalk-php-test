<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiDdpaasObjectdataParams extends Model {
    protected $_name = [
        'currentOperatorUserid' => 'current_operator_userid',
        'cursor' => 'cursor',
        'size' => 'size',
        'queryDsl' => 'query_dsl',
        'appUuid' => 'app_uuid',
        'formCode' => 'form_code',
    ];
    public function validate() {
        Model::validateRequired('appUuid', $this->appUuid, true);
        Model::validateRequired('formCode', $this->formCode, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->currentOperatorUserid) {
            $res['current_operator_userid'] = $this->currentOperatorUserid;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->queryDsl) {
            $res['query_dsl'] = $this->queryDsl;
        }
        if (null !== $this->appUuid) {
            $res['app_uuid'] = $this->appUuid;
        }
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiDdpaasObjectdataParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_operator_userid'])){
            $model->currentOperatorUserid = $map['current_operator_userid'];
        }
        if(isset($map['cursor'])){
            $model->cursor = $map['cursor'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['query_dsl'])){
            $model->queryDsl = $map['query_dsl'];
        }
        if(isset($map['app_uuid'])){
            $model->appUuid = $map['app_uuid'];
        }
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        return $model;
    }
    /**
     * @description 用户ID
     * @var string
     */
    public $currentOperatorUserid;

    /**
     * @description 查询游标
     * @var string
     */
    public $cursor;

    /**
     * @description 分页限制
     * @var int
     */
    public $size;

    /**
     * @description 查询条件DSL
     * @var string
     */
    public $queryDsl;

    /**
     * @description 钉钉PaaS 应用 ID
     * @var string
     */
    public $appUuid;

    /**
     * @description 钉钉 PaaS 表单编号
     * @var string
     */
    public $formCode;

}
