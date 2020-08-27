<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyuseridOapiReportTemplateResponseBody\result;

use AlibabaCloud\Tea\Model;

class templateList extends Model {
    protected $_name = [
        'name' => 'name',
        'iconUrl' => 'icon_url',
        'reportCode' => 'report_code',
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
        if (null !== $this->reportCode) {
            $res['report_code'] = $this->reportCode;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return templateList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['icon_url'])){
            $model->iconUrl = $map['icon_url'];
        }
        if(isset($map['report_code'])){
            $model->reportCode = $map['report_code'];
        }
        if(isset($map['url'])){
            $model->url = $map['url'];
        }
        return $model;
    }
    /**
     * @description 日志模板名称
     * @var string
     */
    public $name;

    /**
     * @description 模板图标url
     * @var string
     */
    public $iconUrl;

    /**
     * @description 模板唯一标识
     * @var string
     */
    public $reportCode;

    /**
     * @description 模板的url
     * @var string
     */
    public $url;

}
