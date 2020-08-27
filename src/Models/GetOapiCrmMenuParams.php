<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiCrmMenuParams extends Model {
    protected $_name = [
        'clientType' => 'client_type',
    ];
    public function validate() {
        Model::validateRequired('clientType', $this->clientType, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->clientType) {
            $res['client_type'] = $this->clientType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiCrmMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['client_type'])){
            $model->clientType = $map['client_type'];
        }
        return $model;
    }
    /**
     * @description 0:PC端导航 1：手机端导航
     * @var string
     */
    public $clientType;

}
