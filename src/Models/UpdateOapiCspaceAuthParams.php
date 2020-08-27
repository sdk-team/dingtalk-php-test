<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class UpdateOapiCspaceAuthParams extends Model {
    protected $_name = [
        'duration' => 'duration',
        'isvCode' => 'isv_code',
        'agentId' => 'agent_id',
    ];
    public function validate() {
        Model::validateRequired('isvCode', $this->isvCode, true);
        Model::validateRequired('agentId', $this->agentId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->isvCode) {
            $res['isv_code'] = $this->isvCode;
        }
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiCspaceAuthParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        if(isset($map['isv_code'])){
            $model->isvCode = $map['isv_code'];
        }
        if(isset($map['agent_id'])){
            $model->agentId = $map['agent_id'];
        }
        return $model;
    }
    /**
     * @description 授权码有效期，单位为日，为空则表示永久授权
     * @var int
     */
    public $duration;

    /**
     * @description isv授权码
     * @var string
     */
    public $isvCode;

    /**
     * @description 微应用的agentId
     * @var int
     */
    public $agentId;

}
