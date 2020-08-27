<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAttendanceVacationQuotaResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\InitOapiAttendanceVacationQuotaResponseBody\result\quota;

class result extends Model {
    protected $_name = [
        'reason' => 'reason',
        'quota' => 'quota',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['reason'])){
            $model->reason = $map['reason'];
        }
        if(isset($map['quota'])){
            $model->quota = quota::fromMap($map['quota']);
        }
        return $model;
    }
    /**
     * @description 失败原因
     * @var string
     */
    public $reason;

    /**
     * @description 失败记录
     * @var quota
     */
    public $quota;

}
