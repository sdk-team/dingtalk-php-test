<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\Get_permanent_codeOapiServiceResponseBody;

use AlibabaCloud\Tea\Model;

class authCorpInfo extends Model {
    protected $_name = [
        'corpid' => 'corpid',
        'corpName' => 'corp_name',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return authCorpInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        return $model;
    }
    /**
     * @description 授权方企业id
     * @var string
     */
    public $corpid;

    /**
     * @description corp_name
     * @var string
     */
    public $corpName;

}
