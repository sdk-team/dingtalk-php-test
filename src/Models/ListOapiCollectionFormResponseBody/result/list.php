<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCollectionFormResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCollectionFormResponseBody\result\list_\setting;

class list_ extends Model {
    protected $_name = [
        'formCode' => 'form_code',
        'name' => 'name',
        'memo' => 'memo',
        'setting' => 'setting',
        'creator' => 'creator',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->setting) {
            $res['setting'] = null !== $this->setting ? $this->setting->toMap() : null;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['memo'])){
            $model->memo = $map['memo'];
        }
        if(isset($map['setting'])){
            $model->setting = setting::fromMap($map['setting']);
        }
        if(isset($map['creator'])){
            $model->creator = $map['creator'];
        }
        return $model;
    }
    /**
     * @description 表单code
     * @var string
     */
    public $formCode;

    /**
     * @description 填表名称
     * @var string
     */
    public $name;

    /**
     * @description 填表提示
     * @var string
     */
    public $memo;

    /**
     * @description 设置
     * @var setting
     */
    public $setting;

    /**
     * @description 创建人
     * @var string
     */
    public $creator;

}
