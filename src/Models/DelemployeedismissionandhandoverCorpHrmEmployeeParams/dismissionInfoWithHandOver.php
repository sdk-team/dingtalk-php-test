<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\DelemployeedismissionandhandoverCorpHrmEmployeeParams;

use AlibabaCloud\Tea\Model;

class dismissionInfoWithHandOver extends Model {
    protected $_name = [
        'handOverUserid' => 'hand_over_userid',
        'dismissionMemo' => 'dismission_memo',
        'dismissionReason' => 'dismission_reason',
        'lastWorkDate' => 'last_work_date',
        'dismissionUserid' => 'dismission_userid',
    ];
    public function validate() {
        Model::validateRequired('dismissionReason', $this->dismissionReason, true);
        Model::validateRequired('lastWorkDate', $this->lastWorkDate, true);
        Model::validateRequired('dismissionUserid', $this->dismissionUserid, true);
        Model::validatePattern('lastWorkDate', $this->lastWorkDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->handOverUserid) {
            $res['hand_over_userid'] = $this->handOverUserid;
        }
        if (null !== $this->dismissionMemo) {
            $res['dismission_memo'] = $this->dismissionMemo;
        }
        if (null !== $this->dismissionReason) {
            $res['dismission_reason'] = $this->dismissionReason;
        }
        if (null !== $this->lastWorkDate) {
            $res['last_work_date'] = $this->lastWorkDate;
        }
        if (null !== $this->dismissionUserid) {
            $res['dismission_userid'] = $this->dismissionUserid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dismissionInfoWithHandOver
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['hand_over_userid'])){
            $model->handOverUserid = $map['hand_over_userid'];
        }
        if(isset($map['dismission_memo'])){
            $model->dismissionMemo = $map['dismission_memo'];
        }
        if(isset($map['dismission_reason'])){
            $model->dismissionReason = $map['dismission_reason'];
        }
        if(isset($map['last_work_date'])){
            $model->lastWorkDate = $map['last_work_date'];
        }
        if(isset($map['dismission_userid'])){
            $model->dismissionUserid = $map['dismission_userid'];
        }
        return $model;
    }
    /**
     * @description 交接人userid
     * @var string
     */
    public $handOverUserid;

    /**
     * @description 离职描述
     * @var string
     */
    public $dismissionMemo;

    /**
     * @description 离职原因（1：家庭原因，2:个人原因，3：发展原因，4：合同到期不续签，5：协议解除，6：无法胜任工作，7：经济性裁员，8：严重违法违纪，9：其他）
     * @var string
     */
    public $dismissionReason;

    /**
     * @description 最后工作日
     * @var string
     */
    public $lastWorkDate;

    /**
     * @description 离职人userid
     * @var string
     */
    public $dismissionUserid;

}
