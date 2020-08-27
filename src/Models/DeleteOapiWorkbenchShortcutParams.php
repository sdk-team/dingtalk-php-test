<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class DeleteOapiWorkbenchShortcutParams extends Model {
    protected $_name = [
        'appId' => 'app_id',
        'bizNo' => 'biz_no',
    ];
    public function validate() {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('bizNo', $this->bizNo, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->appId) {
            $res['app_id'] = $this->appId;
        }
        if (null !== $this->bizNo) {
            $res['biz_no'] = $this->bizNo;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteOapiWorkbenchShortcutParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app_id'])){
            $model->appId = $map['app_id'];
        }
        if(isset($map['biz_no'])){
            $model->bizNo = $map['biz_no'];
        }
        return $model;
    }
    /**
     * @description 应用ID
     * @var string
     */
    public $appId;

    /**
     * @description 系统交互唯一流水号(ISV维度下不可重复)
     * @var string
     */
    public $bizNo;

}
