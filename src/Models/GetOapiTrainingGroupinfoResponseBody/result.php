<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiTrainingGroupinfoResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiTrainingGroupinfoResponseBody\result\groupInfoList;

class result extends Model {
    protected $_name = [
        'corpId' => 'corp_id',
        'orgName' => 'org_name',
        'groupInfoList' => 'group_info_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->orgName) {
            $res['org_name'] = $this->orgName;
        }
        if (null !== $this->groupInfoList) {
            $res['group_info_list'] = [];
            if(null !== $this->groupInfoList && is_array($this->groupInfoList)){
                $n = 0;
                foreach($this->groupInfoList as $item){
                    $res['group_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['org_name'])){
            $model->orgName = $map['org_name'];
        }
        if(isset($map['group_info_list'])){
            if(!empty($map['group_info_list'])){
                $model->groupInfoList = [];
                $n = 0;
                foreach($map['group_info_list'] as $item) {
                    $model->groupInfoList[$n++] = null !== $item ? groupInfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 组织corpid
     * @var string
     */
    public $corpId;

    /**
     * @description 组织名称
     * @var string
     */
    public $orgName;

    /**
     * @description 群信息列表
     * @var array
     */
    public $groupInfoList;

}
