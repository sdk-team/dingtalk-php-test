<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class GetvisibleSmartworkBpmsProcessParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'processCodeList' => 'process_code_list',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('processCodeList', $this->processCodeList, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->processCodeList) {
            $res['process_code_list'] = $this->processCodeList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return GetvisibleSmartworkBpmsProcessParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['process_code_list'])){
            if(!empty($map['process_code_list'])){
                $model->processCodeList = $map['process_code_list'];
            }
        }
        return $model;
    }
    /**
     * @description 员工ID
     * @var string
     */
    public $userid;

    /**
     * @description 流程模板唯一标识，可在oa后台编辑审批表单部分查询
     * @var array
     */
    public $processCodeList;

}
