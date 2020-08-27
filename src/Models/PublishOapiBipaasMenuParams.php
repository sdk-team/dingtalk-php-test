<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class PublishOapiBipaasMenuParams extends Model {
    protected $_name = [
        'antcloudTenantId' => 'antcloud_tenant_id',
    ];
    public function validate() {
        Model::validateRequired('antcloudTenantId', $this->antcloudTenantId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->antcloudTenantId) {
            $res['antcloud_tenant_id'] = $this->antcloudTenantId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PublishOapiBipaasMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['antcloud_tenant_id'])){
            $model->antcloudTenantId = $map['antcloud_tenant_id'];
        }
        return $model;
    }
    /**
     * @description 金融云租户ID
     * @var string
     */
    public $antcloudTenantId;

}
