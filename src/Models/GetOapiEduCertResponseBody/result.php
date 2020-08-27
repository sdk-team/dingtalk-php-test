<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduCertResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduCertResponseBody\result\certDatas;

class result extends Model {
    protected $_name = [
        'currentCertLevel' => 'current_cert_level',
        'certDatas' => 'cert_datas',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->currentCertLevel) {
            $res['current_cert_level'] = $this->currentCertLevel;
        }
        if (null !== $this->certDatas) {
            $res['cert_datas'] = [];
            if(null !== $this->certDatas && is_array($this->certDatas)){
                $n = 0;
                foreach($this->certDatas as $item){
                    $res['cert_datas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['current_cert_level'])){
            $model->currentCertLevel = $map['current_cert_level'];
        }
        if(isset($map['cert_datas'])){
            if(!empty($map['cert_datas'])){
                $model->certDatas = [];
                $n = 0;
                foreach($map['cert_datas'] as $item) {
                    $model->certDatas[$n++] = null !== $item ? certDatas::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 当前用户最高认证等级。0:没有认证；1:初级；2:中级；3:高级；
     * @var int
     */
    public $currentCertLevel;

    /**
     * @description 认证明细
     * @var array
     */
    public $certDatas;

}
