<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetOapiFaceauthParams extends Model {
    protected $_name = [
        'tmpAuthCode' => 'tmp_auth_code',
        'appBizId' => 'app_biz_id',
    ];
    public function validate() {
        Model::validateRequired('tmpAuthCode', $this->tmpAuthCode, true);
        Model::validateRequired('appBizId', $this->appBizId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->tmpAuthCode) {
            $res['tmp_auth_code'] = $this->tmpAuthCode;
        }
        if (null !== $this->appBizId) {
            $res['app_biz_id'] = $this->appBizId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetOapiFaceauthParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['tmp_auth_code'])){
            $model->tmpAuthCode = $map['tmp_auth_code'];
        }
        if(isset($map['app_biz_id'])){
            $model->appBizId = $map['app_biz_id'];
        }
        return $model;
    }
    /**
     * @description 人脸扫描的授权码
     * @var string
     */
    public $tmpAuthCode;

    /**
     * @description 业务方定义的id
     * @var string
     */
    public $appBizId;

}
