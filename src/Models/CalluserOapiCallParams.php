<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class CalluserOapiCallParams extends Model {
    protected $_name = [
        'staffId' => 'staff_id',
        'authedCorpId' => 'authed_corp_id',
        'authedStaffId' => 'authed_staff_id',
    ];
    public function validate() {
        Model::validateRequired('staffId', $this->staffId, true);
        Model::validateRequired('authedCorpId', $this->authedCorpId, true);
        Model::validateRequired('authedStaffId', $this->authedStaffId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->staffId) {
            $res['staff_id'] = $this->staffId;
        }
        if (null !== $this->authedCorpId) {
            $res['authed_corp_id'] = $this->authedCorpId;
        }
        if (null !== $this->authedStaffId) {
            $res['authed_staff_id'] = $this->authedStaffId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CalluserOapiCallParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['staff_id'])){
            $model->staffId = $map['staff_id'];
        }
        if(isset($map['authed_corp_id'])){
            $model->authedCorpId = $map['authed_corp_id'];
        }
        if(isset($map['authed_staff_id'])){
            $model->authedStaffId = $map['authed_staff_id'];
        }
        return $model;
    }
    /**
     * @description isv套件所属企业下的员工userid
     * @var string
     */
    public $staffId;

    /**
     * @description 授权isv套件企业的corpid
     * @var string
     */
    public $authedCorpId;

    /**
     * @description 授权isv套件企业的员工userid
     * @var string
     */
    public $authedStaffId;

}
