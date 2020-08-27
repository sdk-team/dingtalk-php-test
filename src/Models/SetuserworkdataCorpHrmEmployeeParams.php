<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SetuserworkdataCorpHrmEmployeeParams\hrmApiUserDataModel;

class SetuserworkdataCorpHrmEmployeeParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'hrmApiUserDataModel' => 'hrm_api_user_data_model',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('hrmApiUserDataModel', $this->hrmApiUserDataModel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->hrmApiUserDataModel) {
            $res['hrm_api_user_data_model'] = null !== $this->hrmApiUserDataModel ? $this->hrmApiUserDataModel->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SetuserworkdataCorpHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['hrm_api_user_data_model'])){
            $model->hrmApiUserDataModel = hrmApiUserDataModel::fromMap($map['hrm_api_user_data_model']);
        }
        return $model;
    }
    /**
     * @description 操作人userid，必须是拥有被操作人操作权限的管理员userid
     * @var string
     */
    public $opUserid;

    /**
     * @description 员工信息对象，被操作人userid是必填
     * @var hrmApiUserDataModel
     */
    public $hrmApiUserDataModel;

}
