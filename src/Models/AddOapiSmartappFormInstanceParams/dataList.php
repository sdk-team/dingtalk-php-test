<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiSmartappFormInstanceParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiSmartappFormInstanceParams\dataList\formComponentValues;

class dataList extends Model {
    protected $_name = [
        'participantUseridList' => 'participant_userid_list',
        'bizId' => 'biz_id',
        'formComponentValues' => 'form_component_values',
        'creatorUserid' => 'creator_userid',
        'chargerUseridList' => 'charger_userid_list',
    ];
    public function validate() {
        Model::validateRequired('bizId', $this->bizId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->participantUseridList) {
            $res['participant_userid_list'] = $this->participantUseridList;
        }
        if (null !== $this->bizId) {
            $res['biz_id'] = $this->bizId;
        }
        if (null !== $this->formComponentValues) {
            $res['form_component_values'] = [];
            if(null !== $this->formComponentValues && is_array($this->formComponentValues)){
                $n = 0;
                foreach($this->formComponentValues as $item){
                    $res['form_component_values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creatorUserid) {
            $res['creator_userid'] = $this->creatorUserid;
        }
        if (null !== $this->chargerUseridList) {
            $res['charger_userid_list'] = $this->chargerUseridList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dataList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['participant_userid_list'])){
            if(!empty($map['participant_userid_list'])){
                $model->participantUseridList = $map['participant_userid_list'];
            }
        }
        if(isset($map['biz_id'])){
            $model->bizId = $map['biz_id'];
        }
        if(isset($map['form_component_values'])){
            if(!empty($map['form_component_values'])){
                $model->formComponentValues = [];
                $n = 0;
                foreach($map['form_component_values'] as $item) {
                    $model->formComponentValues[$n++] = null !== $item ? formComponentValues::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['creator_userid'])){
            $model->creatorUserid = $map['creator_userid'];
        }
        if(isset($map['charger_userid_list'])){
            if(!empty($map['charger_userid_list'])){
                $model->chargerUseridList = $map['charger_userid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 协同人ID列表
     * @var array
     */
    public $participantUseridList;

    /**
     * @description 业务主键
     * @var string
     */
    public $bizId;

    /**
     * @description 组件值列表
     * @var array
     */
    public $formComponentValues;

    /**
     * @description 数据创建人ID
     * @var string
     */
    public $creatorUserid;

    /**
     * @description 数据负责人ID列表
     * @var array
     */
    public $chargerUseridList;

}
