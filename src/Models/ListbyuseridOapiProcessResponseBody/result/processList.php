<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyuseridOapiProcessResponseBody\result;

use AlibabaCloud\Tea\Model;

class processList extends Model {
    protected $_name = [
        'name' => 'name',
        'iconUrl' => 'icon_url',
        'processCode' => 'process_code',
        'url' => 'url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return processList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 模板名称
     * @var string
     */
    public $name;

    /**
     * @description 图标url
     * @var string
     */
    public $iconUrl;

    /**
     * @description 模板唯一标识
     * @var string
     */
    public $processCode;

    /**
     * @description 模板url
     * @var string
     */
    public $url;

}
