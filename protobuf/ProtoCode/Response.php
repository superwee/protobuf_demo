<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: response.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     */
    private $code = 0;
    /**
     * Generated from protobuf field <code>string data = 2;</code>
     */
    private $data = '';
    /**
     * Generated from protobuf field <code>string extra = 3;</code>
     */
    private $extra = '';

    public function __construct() {
        \GPBMetadata\Response::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string extra = 3;</code>
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Generated from protobuf field <code>string extra = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExtra($var)
    {
        GPBUtil::checkString($var, True);
        $this->extra = $var;

        return $this;
    }

}

