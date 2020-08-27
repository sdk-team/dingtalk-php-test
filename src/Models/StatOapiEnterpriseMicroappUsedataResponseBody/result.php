<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\StatOapiEnterpriseMicroappUsedataResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'statDate' => 'stat_date',
        'corpId' => 'corp_id',
        'agentName' => 'agent_name',
        'openMicroUserCnt1d' => 'open_micro_user_cnt_1d',
        'openMicroUserCnt1w' => 'open_micro_user_cnt_1w',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->agentName) {
            $res['agent_name'] = $this->agentName;
        }
        if (null !== $this->openMicroUserCnt1d) {
            $res['open_micro_user_cnt_1d'] = $this->openMicroUserCnt1d;
        }
        if (null !== $this->openMicroUserCnt1w) {
            $res['open_micro_user_cnt_1w'] = $this->openMicroUserCnt1w;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['agent_name'])){
            $model->agentName = $map['agent_name'];
        }
        if(isset($map['open_micro_user_cnt_1d'])){
            $model->openMicroUserCnt1d = $map['open_micro_user_cnt_1d'];
        }
        if(isset($map['open_micro_user_cnt_1w'])){
            $model->openMicroUserCnt1w = $map['open_micro_user_cnt_1w'];
        }
        return $model;
    }
    /**
     * @description 查询时间
     * @var string
     */
    public $statDate;

    /**
     * @description 企业ID
     * @var string
     */
    public $corpId;

    /**
     * @description 组织微应用名称
     * @var string
     */
    public $agentName;

    /**
     * @description 最近1天打开微应用用户数
     * @var string
     */
    public $openMicroUserCnt1d;

    /**
     * @description 最近7天打开微应用用户数
     * @var string
     */
    public $openMicroUserCnt1w;

}
