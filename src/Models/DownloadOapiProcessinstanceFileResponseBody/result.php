<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DownloadOapiProcessinstanceFileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'authCode' => 'auth_code',
        'spaceId' => 'space_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authCode) {
            $res['auth_code'] = $this->authCode;
        }
        if (null !== $this->spaceId) {
            $res['space_id'] = $this->spaceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_code'])){
            $model->authCode = $map['auth_code'];
        }
        if(isset($map['space_id'])){
            $model->spaceId = $map['space_id'];
        }
        return $model;
    }
    /**
     * @description 临时授权码
     * @var string
     */
    public $authCode;

    /**
     * @description 钉盘空间id
     * @var int
     */
    public $spaceId;

}
