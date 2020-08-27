<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetguideuriOapiWorkbenchShortcutParams extends Model {
    protected $_name = [
        'appId' => 'app_id',
    ];
    public function validate() {
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetguideuriOapiWorkbenchShortcutParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        return $model;
    }
    /**
     * @description ISV微应用ID
     * @var string
     */
    public $appId;

}
