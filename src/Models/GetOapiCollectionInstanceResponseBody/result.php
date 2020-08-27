<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionInstanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiCollectionInstanceResponseBody\result\formList;

class result extends Model {
    protected $_name = [
        'formCode' => 'form_code',
        'title' => 'title',
        'creator' => 'creator',
        'createTime' => 'create_time',
        'modifyTime' => 'modify_time',
        'formList' => 'form_list',
    ];
    public function validate() {
        Model::validatePattern('createTime', $this->createTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('modifyTime', $this->modifyTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->formCode) {
            $res['form_code'] = $this->formCode;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->createTime) {
            $res['create_time'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['modify_time'] = $this->modifyTime;
        }
        if (null !== $this->formList) {
            $res['form_list'] = [];
            if(null !== $this->formList && is_array($this->formList)){
                $n = 0;
                foreach($this->formList as $item){
                    $res['form_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['form_code'])){
            $model->formCode = $map['form_code'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['creator'])){
            $model->creator = $map['creator'];
        }
        if(isset($map['create_time'])){
            $model->createTime = $map['create_time'];
        }
        if(isset($map['modify_time'])){
            $model->modifyTime = $map['modify_time'];
        }
        if(isset($map['form_list'])){
            if(!empty($map['form_list'])){
                $model->formList = [];
                $n = 0;
                foreach($map['form_list'] as $item) {
                    $model->formList[$n++] = null !== $item ? formList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 表单code
     * @var string
     */
    public $formCode;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 创建者userid
     * @var string
     */
    public $creator;

    /**
     * @description 创建时间
     * @var string
     */
    public $createTime;

    /**
     * @description 修改时间
     * @var string
     */
    public $modifyTime;

    /**
     * @description 表单具体数据
     * @var array
     */
    public $formList;

}
