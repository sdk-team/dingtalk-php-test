<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class SetoaurlOapiOrgParams extends Model {
    protected $_name = [
        'oaUrl' => 'oa_url',
        'oaTitle' => 'oa_title',
    ];
    public function validate() {
        Model::validateRequired('oaUrl', $this->oaUrl, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->oaUrl) {
            $res['oa_url'] = $this->oaUrl;
        }
        if (null !== $this->oaTitle) {
            $res['oa_title'] = $this->oaTitle;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetoaurlOapiOrgParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['oa_url'])){
            $model->oaUrl = $map['oa_url'];
        }
        if(isset($map['oa_title'])){
            $model->oaTitle = $map['oa_title'];
        }
        return $model;
    }
    /**
     * @description 工作台首页地址，必须是https开头
     * @var string
     */
    public $oaUrl;

    /**
     * @description 工作台名称，认证企业才能设置
     * @var string
     */
    public $oaTitle;

}
