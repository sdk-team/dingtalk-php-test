<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiFugongHealth_dataResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiFugongHealth_dataResponseBody\result\list_\forms;

class list_ extends Model {
    protected $_name = [
        'submitterUserid' => 'submitter_userid',
        'createTime' => 'create_time',
        'submitterUserName' => 'submitter_user_name',
        'forms' => 'forms',
        'modifyTime' => 'modify_time',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('modifyTime', $this->modifyTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->submitterUserid) {
            $res['submitter_userid'] = $this->submitterUserid;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->submitterUserName) {
            $res['submitter_user_name'] = $this->submitterUserName;
        }
        if (null !== $this->forms) {
            $res['forms'] = [];
            if(null !== $this->forms && is_array($this->forms)){
                $n = 0;
                foreach($this->forms as $item){
                    $res['forms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyTime) {
            $res['modify_time'] = $this->modifyTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return list
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['submitter_userid'])){
            $model->submitterUserid = $map['submitter_userid'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['submitter_user_name'])){
            $model->submitterUserName = $map['submitter_user_name'];
        }
        if(isset($map['forms'])){
            if(!empty($map['forms'])){
                $model->forms = [];
                $n = 0;
                foreach($map['forms'] as $item) {
                    $model->forms[$n++] = null !== $item ? forms::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['modify_time'])){
            $model->modifyTime = $map['modify_time'];
        }
        return $model;
    }
    /**
     * @description 提交人userid
     * @var string
     */
    public $submitterUserid;

    /**
     * @description 毫秒级时间戳，填表提交时间
     * @var string
     */
    public $createTime;

    /**
     * @description 提交人姓名
     * @var string
     */
    public $submitterUserName;

    /**
     * @description 表单内容列表
     * @var array
     */
    public $forms;

    /**
     * @description 毫秒级时间戳，填表更新时间
     * @var string
     */
    public $modifyTime;

}
