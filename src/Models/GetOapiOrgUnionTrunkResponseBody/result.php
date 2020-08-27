<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiOrgUnionTrunkResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'orgName' => 'org_name',
        'corpid' => 'corpid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orgName) {
            $res['org_name'] = $this->orgName;
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['org_name'])){
            $model->orgName = $map['org_name'];
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 主干组织的名称
     * @var string
     */
    public $orgName;

    /**
     * @description 主干组织的corpid
     * @var string
     */
    public $corpid;

}
