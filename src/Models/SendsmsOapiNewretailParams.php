<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SendsmsOapiNewretailParams\smsmodule;

class SendsmsOapiNewretailParams extends Model {
    protected $_name = [
        'smsmodule' => 'smsmodule',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->smsmodule) {
            $res['smsmodule'] = [];
            if(null !== $this->smsmodule && is_array($this->smsmodule)){
                $n = 0;
                foreach($this->smsmodule as $item){
                    $res['smsmodule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SendsmsOapiNewretailParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['smsmodule'])){
            if(!empty($map['smsmodule'])){
                $model->smsmodule = [];
                $n = 0;
                foreach($map['smsmodule'] as $item) {
                    $model->smsmodule[$n++] = null !== $item ? smsmodule::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 短信接受者信息
     * @var array
     */
    public $smsmodule;

}
