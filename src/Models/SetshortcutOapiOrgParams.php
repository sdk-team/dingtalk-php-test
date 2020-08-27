<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetshortcutOapiOrgParams extends Model {
    protected $_name = [
        'agentIds' => 'agentIds',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentIds) {
            $res['agentIds'] = $this->agentIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetshortcutOapiOrgParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentIds'])){
            if(!empty($map['agentIds'])){
                $model->agentIds = $map['agentIds'];
            }
        }
        return $model;
    }
    /**
     * @description 微应用实例id列表
     * @var array
     */
    public $agentIds;

}
