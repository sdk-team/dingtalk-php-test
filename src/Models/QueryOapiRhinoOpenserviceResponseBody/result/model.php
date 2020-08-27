<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiRhinoOpenserviceResponseBody\result;

use AlibabaCloud\Tea\Model;

class model extends Model {
    protected $_name = [
        'app' => 'app',
        'creator' => 'creator',
        'gmtModified' => 'gmt_modified',
        'code' => 'code',
        'modifier' => 'modifier',
        'name' => 'name',
        'description' => 'description',
        'id' => 'id',
        'type' => 'type',
        'gmtCreate' => 'gmt_create',
        'status' => 'status',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->app) {
            $res['app'] = $this->app;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return model
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['app'])){
            $model->app = $map['app'];
        }
        if(isset($map['creator'])){
            $model->creator = $map['creator'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['modifier'])){
            $model->modifier = $map['modifier'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        return $model;
    }
    /**
     * @description 应用
     * @var string
     */
    public $app;

    /**
     * @description 创建人
     * @var string
     */
    public $creator;

    /**
     * @description 修改时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 编码
     * @var string
     */
    public $code;

    /**
     * @description 修改人
     * @var string
     */
    public $modifier;

    /**
     * @description 名称
     * @var string
     */
    public $name;

    /**
     * @description 描述
     * @var string
     */
    public $description;

    /**
     * @description ID
     * @var int
     */
    public $id;

    /**
     * @description 类型
     * @var string
     */
    public $type;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 状态
     * @var string
     */
    public $status;

}
