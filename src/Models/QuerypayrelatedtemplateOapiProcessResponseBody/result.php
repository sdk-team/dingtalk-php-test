<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QuerypayrelatedtemplateOapiProcessResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'url' => 'url',
        'name' => 'name',
        'processCode' => 'process_code',
        'iconUrl' => 'icon_url',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->iconUrl) {
            $res['icon_url'] = $this->iconUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        return $model;
    }
    /**
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description processCode
     * @var string
     */
    public $processCode;

    /**
     * @description iconUrl
     * @var string
     */
    public $iconUrl;

}
