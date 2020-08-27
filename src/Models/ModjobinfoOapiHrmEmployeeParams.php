<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ModjobinfoOapiHrmEmployeeParams\hrmApiJobModel;

class ModjobinfoOapiHrmEmployeeParams extends Model {
    protected $_name = [
        'opUserid' => 'op_userid',
        'hrmApiJobModel' => 'hrm_api_job_model',
    ];
    public function validate() {
        Model::validateRequired('opUserid', $this->opUserid, true);
        Model::validateRequired('hrmApiJobModel', $this->hrmApiJobModel, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->opUserid) {
            $res['op_userid'] = $this->opUserid;
        }
        if (null !== $this->hrmApiJobModel) {
            $res['hrm_api_job_model'] = null !== $this->hrmApiJobModel ? $this->hrmApiJobModel->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ModjobinfoOapiHrmEmployeeParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['op_userid'])){
            $model->opUserid = $map['op_userid'];
        }
        if(isset($map['hrm_api_job_model'])){
            $model->hrmApiJobModel = hrmApiJobModel::fromMap($map['hrm_api_job_model']);
        }
        return $model;
    }
    /**
     * @description 操作人userid，必须是拥有被操作人操作权限的管理员userid
     * @var string
     */
    public $opUserid;

    /**
     * @description 员工信息对象，被操作人userid是必填，其他信息选填，填写则更新
     * @var hrmApiJobModel
     */
    public $hrmApiJobModel;

}
