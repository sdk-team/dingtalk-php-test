<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceParams\updateInfo;

class UpdateOapiWorkspaceParams extends Model {
    protected $_name = [
        'updateInfo' => 'update_info',
    ];
    public function validate() {
        Model::validateRequired('updateInfo', $this->updateInfo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->updateInfo) {
            $res['update_info'] = null !== $this->updateInfo ? $this->updateInfo->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiWorkspaceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['update_info'])){
            $model->updateInfo = updateInfo::fromMap($map['update_info']);
        }
        return $model;
    }
    /**
     * @description 修改项目/圈子信息
     * @var updateInfo
     */
    public $updateInfo;

}
