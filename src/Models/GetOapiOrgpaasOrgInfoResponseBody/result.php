<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiOrgpaasOrgInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'orgName' => 'org_name',
        'extension' => 'extension',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->orgName) {
            $res['org_name'] = $this->orgName;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
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
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        return $model;
    }
    /**
     * @description 组织名
     * @var string
     */
    public $orgName;

    /**
     * @description 组织附件信息
     * @var string
     */
    public $extension;

}
