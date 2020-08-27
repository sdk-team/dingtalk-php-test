<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiOrgUnionBranchResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'unionOrgName' => 'union_org_name',
        'unionCorpid' => 'union_corpid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->unionOrgName) {
            $res['union_org_name'] = $this->unionOrgName;
        }
        if (null !== $this->unionCorpid) {
            $res['union_corpid'] = $this->unionCorpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['union_org_name'])){
            $model->unionOrgName = $map['union_org_name'];
        }
        if(isset($map['union_corpid'])){
            $model->unionCorpid = $map['union_corpid'];
        }
        return $model;
    }
    /**
     * @description 分支组织名称
     * @var string
     */
    public $unionOrgName;

    /**
     * @description 分支组织corpid
     * @var string
     */
    public $unionCorpid;

}
