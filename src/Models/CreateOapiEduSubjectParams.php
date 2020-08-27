<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CreateOapiEduSubjectParams extends Model {
    protected $_name = [
        'code' => 'code',
        'name' => 'name',
        'operatorUserid' => 'operator_userid',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('operatorUserid', $this->operatorUserid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->operatorUserid) {
            $res['operator_userid'] = $this->operatorUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateOapiEduSubjectParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['operator_userid'])){
            $model->operatorUserid = $map['operator_userid'];
        }
        return $model;
    }
    /**
     * @description 学科编码（依赖元数据创建时传入元数据编码，自定义时为空）
     * @var string
     */
    public $code;

    /**
     * @description 学科名称
     * @var string
     */
    public $name;

    /**
     * @description 操作人userId
     * @var string
     */
    public $operatorUserid;

}
