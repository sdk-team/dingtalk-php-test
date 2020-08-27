<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result\classSetting;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result\sections;

class result extends Model {
    protected $_name = [
        'id' => 'id',
        'corpId' => 'corp_id',
        'name' => 'name',
        'workDays' => 'work_days',
        'classSetting' => 'class_setting',
        'sections' => 'sections',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->workDays) {
            $res['work_days'] = $this->workDays;
        }
        if (null !== $this->classSetting) {
            $res['class_setting'] = null !== $this->classSetting ? $this->classSetting->toMap() : null;
        }
        if (null !== $this->sections) {
            $res['sections'] = [];
            if(null !== $this->sections && is_array($this->sections)){
                $n = 0;
                foreach($this->sections as $item){
                    $res['sections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['work_days'])){
            if(!empty($map['work_days'])){
                $model->workDays = $map['work_days'];
            }
        }
        if(isset($map['class_setting'])){
            $model->classSetting = classSetting::fromMap($map['class_setting']);
        }
        if(isset($map['sections'])){
            if(!empty($map['sections'])){
                $model->sections = [];
                $n = 0;
                foreach($map['sections'] as $item) {
                    $model->sections[$n++] = null !== $item ? sections::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description classid
     * @var int
     */
    public $id;

    /**
     * @description 组织id
     * @var string
     */
    public $corpId;

    /**
     * @description 组织名称
     * @var string
     */
    public $name;

    /**
     * @description 固定班次的工作日班次
     * @var array
     */
    public $workDays;

    /**
     * @description 考勤组班次配置
     * @var classSetting
     */
    public $classSetting;

    /**
     * @description 班次打卡时间段,最多
     * @var array
     */
    public $sections;

}
