<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\PreviewOapiProcessinstanceCspaceParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'agentid' => 'agentid',
        'processInstanceId' => 'process_instance_id',
        'fileId' => 'file_id',
        'userid' => 'userid',
        'fileidList' => 'fileid_list',
    ];
    public function validate() {
        Model::validateRequired('processInstanceId', $this->processInstanceId, true);
        Model::validateRequired('userid', $this->userid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->agentid) {
            $res['agentid'] = $this->agentid;
        }
        if (null !== $this->processInstanceId) {
            $res['process_instance_id'] = $this->processInstanceId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->fileidList) {
            $res['fileid_list'] = $this->fileidList;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['agentid'])){
            $model->agentid = $map['agentid'];
        }
        if(isset($map['process_instance_id'])){
            $model->processInstanceId = $map['process_instance_id'];
        }
        if(isset($map['file_id'])){
            $model->fileId = $map['file_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['fileid_list'])){
            if(!empty($map['fileid_list'])){
                $model->fileidList = $map['fileid_list'];
            }
        }
        return $model;
    }
    /**
     * @description 应用id
     * @var int
     */
    public $agentid;

    /**
     * @description 实例id
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 附件id
     * @var string
     */
    public $fileId;

    /**
     * @description 授权用户id
     * @var string
     */
    public $userid;

    /**
     * @description 附件id列表，支持批量授权
     * @var array
     */
    public $fileidList;

}
