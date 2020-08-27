<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_auth_infoOapiServiceResponseBody\channelAuthInfo\channelAgent;

class channelAuthInfo extends Model {
    protected $_name = [
        'channelAgent' => 'channelAgent',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->channelAgent) {
            $res['channelAgent'] = [];
            if(null !== $this->channelAgent && is_array($this->channelAgent)){
                $n = 0;
                foreach($this->channelAgent as $item){
                    $res['channelAgent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return channelAuthInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channelAgent'])){
            if(!empty($map['channelAgent'])){
                $model->channelAgent = [];
                $n = 0;
                foreach($map['channelAgent'] as $item) {
                    $model->channelAgent[$n++] = null !== $item ? channelAgent::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description channelAgent
     * @var array
     */
    public $channelAgent;

}
