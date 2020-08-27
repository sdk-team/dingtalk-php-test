<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class ListbyuseridCorpHealthStepinfoParams extends Model {
    protected $_name = [
        'userids' => 'userids',
        'statDate' => 'stat_date',
    ];
    public function validate() {
        Model::validateRequired('userids', $this->userids, true);
        Model::validateRequired('statDate', $this->statDate, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userids) {
            $res['userids'] = $this->userids;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListbyuseridCorpHealthStepinfoParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userids'])){
            if(!empty($map['userids'])){
                $model->userids = $map['userids'];
            }
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        return $model;
    }
    /**
     * @description 员工userid列表，最多传50个
     * @var array
     */
    public $userids;

    /**
     * @description 时间，注意时间格式是YYMMDD
     * @var string
     */
    public $statDate;

}
