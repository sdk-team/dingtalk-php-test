<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class List_treeOapiBipaasMenuParams extends Model {
    protected $_name = [
        'antcloudTenantId' => 'antcloud_tenant_id',
        'published' => 'published',
    ];
    public function validate() {
        Model::validateRequired('antcloudTenantId', $this->antcloudTenantId, true);
        Model::validateRequired('published', $this->published, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->antcloudTenantId) {
            $res['antcloud_tenant_id'] = $this->antcloudTenantId;
        }
        if (null !== $this->published) {
            $res['published'] = $this->published;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return List_treeOapiBipaasMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['antcloud_tenant_id'])){
            $model->antcloudTenantId = $map['antcloud_tenant_id'];
        }
        if(isset($map['published'])){
            $model->published = $map['published'];
        }
        return $model;
    }
    /**
     * @description 金融云租户 ID
     * @var string
     */
    public $antcloudTenantId;

    /**
     * @description 是否已发布菜单
     * @var bool
     */
    public $published;

}
