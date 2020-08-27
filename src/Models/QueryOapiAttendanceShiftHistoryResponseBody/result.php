<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftHistoryResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftHistoryResponseBody\result\shiftSetting;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftHistoryResponseBody\result\sections;

class result extends Model {
    protected $_name = [
        'shiftGroupName' => 'shift_group_name',
        'corpId' => 'corp_id',
        'shiftSetting' => 'shift_setting',
        'name' => 'name',
        'id' => 'id',
        'sections' => 'sections',
        'shiftGroupId' => 'shift_group_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->shiftGroupName) {
            $res['shift_group_name'] = $this->shiftGroupName;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->shiftSetting) {
            $res['shift_setting'] = null !== $this->shiftSetting ? $this->shiftSetting->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (null !== $this->shiftGroupId) {
            $res['shift_group_id'] = $this->shiftGroupId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shift_group_name'])){
            $model->shiftGroupName = $map['shift_group_name'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['shift_setting'])){
            $model->shiftSetting = shiftSetting::fromMap($map['shift_setting']);
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
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
        if(isset($map['shift_group_id'])){
            $model->shiftGroupId = $map['shift_group_id'];
        }
        return $model;
    }
    /**
     * @description 班次组名称
     * @var string
     */
    public $shiftGroupName;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 班次设置
     * @var shiftSetting
     */
    public $shiftSetting;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description 卡段
     * @var array
     */
    public $sections;

    /**
     * @description 班组id
     * @var int
     */
    public $shiftGroupId;

}
