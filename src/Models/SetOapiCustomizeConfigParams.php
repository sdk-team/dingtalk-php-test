<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetOapiCustomizeConfigParams extends Model {
    protected $_name = [
        'biz' => 'biz',
        'type' => 'type',
        'ruleName' => 'rule_name',
        'activeType' => 'active_type',
        'activeId' => 'active_id',
    ];
    public function validate() {
        Model::validateRequired('biz', $this->biz, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('activeType', $this->activeType, true);
        Model::validateRequired('activeId', $this->activeId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->biz) {
            $res['biz'] = $this->biz;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->ruleName) {
            $res['rule_name'] = $this->ruleName;
        }
        if (null !== $this->activeType) {
            $res['active_type'] = $this->activeType;
        }
        if (null !== $this->activeId) {
            $res['active_id'] = $this->activeId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetOapiCustomizeConfigParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz'])){
            $model->biz = $map['biz'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['rule_name'])){
            $model->ruleName = $map['rule_name'];
        }
        if(isset($map['active_type'])){
            $model->activeType = $map['active_type'];
        }
        if(isset($map['active_id'])){
            $model->activeId = $map['active_id'];
        }
        return $model;
    }
    /**
     * @description 入口会话id，自定义的业务
     * @var string
     */
    public $biz;

    /**
     * @description 会话类型
     * @var string
     */
    public $type;

    /**
     * @description 二级会话
     * @var string
     */
    public $ruleName;

    /**
     * @description e应用
     * @var string
     */
    public $activeType;

    /**
     * @description e应用id
     * @var string
     */
    public $activeId;

}
