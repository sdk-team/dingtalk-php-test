<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiUserCorpinfoResponseBody;

use AlibabaCloud\Tea\Model;

class corpList extends Model {
    protected $_name = [
        'corpName' => 'corp_name',
        'corpid' => 'corpid',
        'authStatus' => 'auth_status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->authStatus) {
            $res['auth_status'] = $this->authStatus;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return corpList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['auth_status'])){
            $model->authStatus = $map['auth_status'];
        }
        return $model;
    }
    /**
     * @description 企业名称
     * @var string
     */
    public $corpName;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

    /**
     * @description 是否认证，0表示未认证，1表示认证
     * @var int
     */
    public $authStatus;

}
