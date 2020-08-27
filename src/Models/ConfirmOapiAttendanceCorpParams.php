<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ConfirmOapiAttendanceCorpParams\corpList;

class ConfirmOapiAttendanceCorpParams extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'corpList' => 'corp_list',
    ];
    public function validate() {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('corpList', $this->corpList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpList) {
            $res['corp_list'] = [];
            if(null !== $this->corpList && is_array($this->corpList)){
                $n = 0;
                foreach($this->corpList as $item){
                    $res['corp_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ConfirmOapiAttendanceCorpParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['corp_list'])){
            if(!empty($map['corp_list'])){
                $model->corpList = [];
                $n = 0;
                foreach($map['corp_list'] as $item) {
                    $model->corpList[$n++] = null !== $item ? corpList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 企业明细
     * @var array
     */
    public $corpList;

}
