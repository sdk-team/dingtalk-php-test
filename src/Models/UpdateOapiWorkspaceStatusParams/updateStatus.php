<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiWorkspaceStatusParams;

use AlibabaCloud\Tea\Model;

class updateStatus extends Model {
    protected $_name = [
        'status' => 'status',
    ];
    public function validate() {
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return updateStatus
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 对于项目有如下状态： WORKING进行中 DISBANDED解散 CLOSE归档 RECYCLE回收站状态 新建项目后状态是WORKING，WORKING/CLOSE/RECYCLE回收站状态可以切换，但是一旦成为DISBANDED则说明项目已销毁无法变更状态
     * @var string
     */
    public $status;

}
