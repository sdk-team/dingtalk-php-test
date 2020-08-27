<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Get_rule_listOapiMicroappRuleResponseBody extends Model {
    protected $_name = [
        'ruleIdList' => 'ruleIdList',
        'errmsg' => 'errmsg',
        'errcode' => 'errcode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->ruleIdList) {
            $res['ruleIdList'] = $this->ruleIdList;
        }
        if (null !== $this->errmsg) {
            $res['errmsg'] = $this->errmsg;
        }
        if (null !== $this->errcode) {
            $res['errcode'] = $this->errcode;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Get_rule_listOapiMicroappRuleResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ruleIdList'])){
            if(!empty($map['ruleIdList'])){
                $model->ruleIdList = $map['ruleIdList'];
            }
        }
        if(isset($map['errmsg'])){
            $model->errmsg = $map['errmsg'];
        }
        if(isset($map['errcode'])){
            $model->errcode = $map['errcode'];
        }
        return $model;
    }
    /**
     * @description 用户绑定的规则id列表
     * @var array
     */
    public $ruleIdList;

    /**
     * @description 对返回码的文本描述内容
     * @var string
     */
    public $errmsg;

    /**
     * @description 返回码
     * @var int
     */
    public $errcode;

}
