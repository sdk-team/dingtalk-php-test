<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRhinoHumanresProcessStructuralClusterParams extends Model {
    protected $_name = [
        'bizIdProcessList' => 'biz_id_process_list',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizIdProcessList) {
            $res['biz_id_process_list'] = $this->bizIdProcessList;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoHumanresProcessStructuralClusterParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['biz_id_process_list'])){
            if(!empty($map['biz_id_process_list'])){
                $model->bizIdProcessList = $map['biz_id_process_list'];
            }
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 1
     * @var array
     */
    public $bizIdProcessList;

    /**
     * @description 系统自动生成
     * @var string
     */
    public $userid;

}
