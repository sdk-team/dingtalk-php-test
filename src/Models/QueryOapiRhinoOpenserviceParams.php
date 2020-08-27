<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models;

use AlibabaCloud\Tea\Model;

class QueryOapiRhinoOpenserviceParams extends Model {
    protected $_name = [
        'userid' => 'userid',
        'code' => 'code',
        'id' => 'id',
        'tenentId' => 'tenent_id',
        'gmtCreate' => 'gmt_create',
    ];
    public function validate() {
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->tenentId) {
            $res['tenent_id'] = $this->tenentId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryOapiRhinoOpenserviceParams
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['tenent_id'])){
            $model->tenentId = $map['tenent_id'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        return $model;
    }
    /**
     * @description 用户ID
     * @var string
     */
    public $userid;

    /**
     * @description 编码
     * @var string
     */
    public $code;

    /**
     * @description ID
     * @var int
     */
    public $id;

    /**
     * @description 租户ID
     * @var string
     */
    public $tenentId;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

}
