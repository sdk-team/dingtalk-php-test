<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiEduCertResponseBody\result;

use AlibabaCloud\Tea\Model;

class certDatas extends Model {
    protected $_name = [
        'certStatus' => 'cert_status',
        'canCert' => 'can_cert',
        'certLevel' => 'cert_level',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->certStatus) {
            $res['cert_status'] = $this->certStatus;
        }
        if (null !== $this->canCert) {
            $res['can_cert'] = $this->canCert;
        }
        if (null !== $this->certLevel) {
            $res['cert_level'] = $this->certLevel;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return certDatas
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cert_status'])){
            $model->certStatus = $map['cert_status'];
        }
        if(isset($map['can_cert'])){
            $model->canCert = $map['can_cert'];
        }
        if(isset($map['cert_level'])){
            $model->certLevel = $map['cert_level'];
        }
        return $model;
    }
    /**
     * @description 当前等级认证状态。0:未获取；1:认证中；2:证书制作中；3:已获取
     * @var int
     */
    public $certStatus;

    /**
     * @description 当前认证考试是否可以参加。true：可以；false：敬请期待；
     * @var bool
     */
    public $canCert;

    /**
     * @description 认证等级。0:没有认证；1:初级；2:中级；3:高级；
     * @var int
     */
    public $certLevel;

}
