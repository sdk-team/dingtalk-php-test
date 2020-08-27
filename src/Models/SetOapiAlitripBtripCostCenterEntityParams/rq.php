<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SetOapiAlitripBtripCostCenterEntityParams;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SetOapiAlitripBtripCostCenterEntityParams\rq\entityList;

class rq extends Model {
    protected $_name = [
        'thirdpartId' => 'thirdpart_id',
        'entityList' => 'entity_list',
        'corpid' => 'corpid',
    ];
    public function validate() {
        Model::validateRequired('thirdpartId', $this->thirdpartId, true);
        Model::validateRequired('entityList', $this->entityList, true);
        Model::validateRequired('corpid', $this->corpid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->entityList) {
            $res['entity_list'] = [];
            if(null !== $this->entityList && is_array($this->entityList)){
                $n = 0;
                foreach($this->entityList as $item){
                    $res['entity_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpid) {
            $res['corpid'] = $this->corpid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rq
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['thirdpart_id'])){
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if(isset($map['entity_list'])){
            if(!empty($map['entity_list'])){
                $model->entityList = [];
                $n = 0;
                foreach($map['entity_list'] as $item) {
                    $model->entityList[$n++] = null !== $item ? entityList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['corpid'])){
            $model->corpid = $map['corpid'];
        }
        return $model;
    }
    /**
     * @description 第三方成本中心id
     * @var string
     */
    public $thirdpartId;

    /**
     * @description 人员信息列表
     * @var array
     */
    public $entityList;

    /**
     * @description 企业id
     * @var string
     */
    public $corpid;

}
