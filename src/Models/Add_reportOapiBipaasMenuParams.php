<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class Add_reportOapiBipaasMenuParams extends Model {
    protected $_name = [
        'reportIds' => 'report_ids',
        'antcloudTenantId' => 'antcloud_tenant_id',
        'menuId' => 'menu_id',
    ];
    public function validate() {
        Model::validateRequired('reportIds', $this->reportIds, true);
        Model::validateRequired('antcloudTenantId', $this->antcloudTenantId, true);
        Model::validateRequired('menuId', $this->menuId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->reportIds) {
            $res['report_ids'] = $this->reportIds;
        }
        if (null !== $this->antcloudTenantId) {
            $res['antcloud_tenant_id'] = $this->antcloudTenantId;
        }
        if (null !== $this->menuId) {
            $res['menu_id'] = $this->menuId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return Add_reportOapiBipaasMenuParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['report_ids'])){
            if(!empty($map['report_ids'])){
                $model->reportIds = $map['report_ids'];
            }
        }
        if(isset($map['antcloud_tenant_id'])){
            $model->antcloudTenantId = $map['antcloud_tenant_id'];
        }
        if(isset($map['menu_id'])){
            $model->menuId = $map['menu_id'];
        }
        return $model;
    }
    /**
     * @description 报表ID列表
     * @var array
     */
    public $reportIds;

    /**
     * @description 金融云租户ID信息
     * @var string
     */
    public $antcloudTenantId;

    /**
     * @description 智能参谋菜单ID
     * @var int
     */
    public $menuId;

}
