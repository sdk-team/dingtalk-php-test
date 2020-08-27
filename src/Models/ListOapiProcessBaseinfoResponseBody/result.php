<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiProcessBaseinfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'managerUserIds' => 'manager_user_ids',
        'description' => 'description',
        'name' => 'name',
        'processCode' => 'process_code',
        'openCustomPrint' => 'open_custom_print',
        'bizCategoryId' => 'biz_category_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->managerUserIds) {
            $res['manager_user_ids'] = $this->managerUserIds;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processCode) {
            $res['process_code'] = $this->processCode;
        }
        if (null !== $this->openCustomPrint) {
            $res['open_custom_print'] = $this->openCustomPrint;
        }
        if (null !== $this->bizCategoryId) {
            $res['biz_category_id'] = $this->bizCategoryId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['manager_user_ids'])){
            if(!empty($map['manager_user_ids'])){
                $model->managerUserIds = $map['manager_user_ids'];
            }
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['process_code'])){
            $model->processCode = $map['process_code'];
        }
        if(isset($map['open_custom_print'])){
            $model->openCustomPrint = $map['open_custom_print'];
        }
        if(isset($map['biz_category_id'])){
            $model->bizCategoryId = $map['biz_category_id'];
        }
        return $model;
    }
    /**
     * @description 管理员userId列表
     * @var array
     */
    public $managerUserIds;

    /**
     * @description 描述
     * @var string
     */
    public $description;

    /**
     * @description 模板名称
     * @var string
     */
    public $name;

    /**
     * @description 模板code
     * @var string
     */
    public $processCode;

    /**
     * @description 是否开启自定义打印
     * @var bool
     */
    public $openCustomPrint;

    /**
     * @description 业务套件bizType
     * @var string
     */
    public $bizCategoryId;

}
