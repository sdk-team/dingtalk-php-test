<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceStatusParams\updateStatus;

class UpdateOapiWorkspaceStatusParams extends Model {
    protected $_name = [
        'updateStatus' => 'update_status',
    ];
    public function validate() {
        Model::validateRequired('updateStatus', $this->updateStatus, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->updateStatus) {
            $res['update_status'] = null !== $this->updateStatus ? $this->updateStatus->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateOapiWorkspaceStatusParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['update_status'])){
            $model->updateStatus = updateStatus::fromMap($map['update_status']);
        }
        return $model;
    }
    /**
     * @description 更新状态
     * @var updateStatus
     */
    public $updateStatus;

}
