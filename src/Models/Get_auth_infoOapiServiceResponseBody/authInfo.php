<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\authInfo\agent;

class authInfo extends Model {
    protected $_name = [
        'agent' => 'agent',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->agent) {
            $res['agent'] = [];
            if(null !== $this->agent && is_array($this->agent)){
                $n = 0;
                foreach($this->agent as $item){
                    $res['agent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agent'])){
            if(!empty($map['agent'])){
                $model->agent = [];
                $n = 0;
                foreach($map['agent'] as $item) {
                    $model->agent[$n++] = null !== $item ? agent::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description agent
     * @var array
     */
    public $agent;

}
