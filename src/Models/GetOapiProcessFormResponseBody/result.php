<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiProcessFormResponseBody\result\formComponentVos;

class result extends Model {
    protected $_name = [
        'formComponentVos' => 'form_component_vos',
        'iconUrl' => 'icon_url',
        'name' => 'name',
        'handSignEnable' => 'hand_sign_enable',
        'processConfig' => 'processConfig',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->formComponentVos) {
            $res['form_component_vos'] = [];
            if(null !== $this->formComponentVos && is_array($this->formComponentVos)){
                $n = 0;
                foreach($this->formComponentVos as $item){
                    $res['form_component_vos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->handSignEnable) {
            $res['hand_sign_enable'] = $this->handSignEnable;
        }
        if (null !== $this->processConfig) {
            $res['processConfig'] = $this->processConfig;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_component_vos'])){
            if(!empty($map['form_component_vos'])){
                $model->formComponentVos = [];
                $n = 0;
                foreach($map['form_component_vos'] as $item) {
                    $model->formComponentVos[$n++] = null !== $item ? formComponentVos::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['hand_sign_enable'])){
            $model->handSignEnable = $map['hand_sign_enable'];
        }
        if(isset($map['processConfig'])){
            $model->processConfig = $map['processConfig'];
        }
        return $model;
    }
    /**
     * @description 表单列表
     * @var array
     */
    public $formComponentVos;

    /**
     * @description 图片地址
     * @var string
     */
    public $iconUrl;

    /**
     * @description 模板名称
     * @var string
     */
    public $name;

    /**
     * @description 是否开启手写签名
     * @var bool
     */
    public $handSignEnable;

    /**
     * @description 流程相关信息
     * @var string
     */
    public $processConfig;

}
