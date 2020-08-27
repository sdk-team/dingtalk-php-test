<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetuserinfoOapiSsoResponseBody;

use AlibabaCloud\Tea\Model;

class corpInfo extends Model {
    protected $_name = [
        'corpName' => 'corp_name',
        'corpid' => 'corpid',
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
        return $res;
    }
    /**
     * @param array $map
     * @return corpInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_name'])){
            $model->corpName = $map['corp_name'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 公司名字
     * @var string
     */
    public $corpName;

    /**
     * @description 公司corpid
     * @var string
     */
    public $corpid;

}
