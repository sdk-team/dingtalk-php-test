<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Visible_scopesOapiMicroappParams extends Model {
    protected $_name = [
        'agentId' => 'agentId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Visible_scopesOapiMicroappParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentId'])){
            $model->agentId = $map['agentId'];
        }
        return $model;
    }
    /**
     * @description 微应用实例化id
     * @var int
     */
    public $agentId;

}
