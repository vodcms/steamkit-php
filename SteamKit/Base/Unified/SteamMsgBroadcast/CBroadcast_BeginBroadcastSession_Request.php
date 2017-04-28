<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_broadcast.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgBroadcast;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgBroadcast.CBroadcast_BeginBroadcastSession_Request
 */
class CBroadcast_BeginBroadcastSession_Request extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * permission optional int32 = 1
     *
     * @var int
     */
    protected $permission = null;

    /**
     * gameid optional uint64 = 2
     *
     * @var int
     */
    protected $gameid = null;

    /**
     * client_instance_id optional uint64 = 3
     *
     * @var int
     */
    protected $client_instance_id = null;

    /**
     * title optional string = 4
     *
     * @var string
     */
    protected $title = null;

    /**
     * cellid optional uint32 = 5
     *
     * @var int
     */
    protected $cellid = null;

    /**
     * rtmp_token optional uint64 = 6
     *
     * @var int
     */
    protected $rtmp_token = null;

    /**
     * Check if 'permission' has a value
     *
     * @return bool
     */
    public function hasPermission()
    {
        return $this->permission !== null;
    }

    /**
     * Get 'permission' value
     *
     * @return int
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set 'permission' value
     *
     * @param int $value
     */
    public function setPermission($value = null)
    {
        $this->permission = $value;
    }

    /**
     * Check if 'gameid' has a value
     *
     * @return bool
     */
    public function hasGameid()
    {
        return $this->gameid !== null;
    }

    /**
     * Get 'gameid' value
     *
     * @return int
     */
    public function getGameid()
    {
        return $this->gameid;
    }

    /**
     * Set 'gameid' value
     *
     * @param int $value
     */
    public function setGameid($value = null)
    {
        $this->gameid = $value;
    }

    /**
     * Check if 'client_instance_id' has a value
     *
     * @return bool
     */
    public function hasClientInstanceId()
    {
        return $this->client_instance_id !== null;
    }

    /**
     * Get 'client_instance_id' value
     *
     * @return int
     */
    public function getClientInstanceId()
    {
        return $this->client_instance_id;
    }

    /**
     * Set 'client_instance_id' value
     *
     * @param int $value
     */
    public function setClientInstanceId($value = null)
    {
        $this->client_instance_id = $value;
    }

    /**
     * Check if 'title' has a value
     *
     * @return bool
     */
    public function hasTitle()
    {
        return $this->title !== null;
    }

    /**
     * Get 'title' value
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set 'title' value
     *
     * @param string $value
     */
    public function setTitle($value = null)
    {
        $this->title = $value;
    }

    /**
     * Check if 'cellid' has a value
     *
     * @return bool
     */
    public function hasCellid()
    {
        return $this->cellid !== null;
    }

    /**
     * Get 'cellid' value
     *
     * @return int
     */
    public function getCellid()
    {
        return $this->cellid;
    }

    /**
     * Set 'cellid' value
     *
     * @param int $value
     */
    public function setCellid($value = null)
    {
        $this->cellid = $value;
    }

    /**
     * Check if 'rtmp_token' has a value
     *
     * @return bool
     */
    public function hasRtmpToken()
    {
        return $this->rtmp_token !== null;
    }

    /**
     * Get 'rtmp_token' value
     *
     * @return int
     */
    public function getRtmpToken()
    {
        return $this->rtmp_token;
    }

    /**
     * Set 'rtmp_token' value
     *
     * @param int $value
     */
    public function setRtmpToken($value = null)
    {
        $this->rtmp_token = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'permission' => null,
            'gameid' => null,
            'client_instance_id' => null,
            'title' => null,
            'cellid' => null,
            'rtmp_token' => null
        ], $values);

        $message->setPermission($values['permission']);
        $message->setGameid($values['gameid']);
        $message->setClientInstanceId($values['client_instance_id']);
        $message->setTitle($values['title']);
        $message->setCellid($values['cellid']);
        $message->setRtmpToken($values['rtmp_token']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CBroadcast_BeginBroadcastSession_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'permission',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gameid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'client_instance_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'title',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'cellid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'rtmp_token',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->permission !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->permission);
        }

        if ($this->gameid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->gameid);
        }

        if ($this->client_instance_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->client_instance_id);
        }

        if ($this->title !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->title);
        }

        if ($this->cellid !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->cellid);
        }

        if ($this->rtmp_token !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->rtmp_token);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->permission = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->gameid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->client_instance_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->title = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->cellid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->rtmp_token = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->permission !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->permission);
        }

        if ($this->gameid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gameid);
        }

        if ($this->client_instance_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_instance_id);
        }

        if ($this->title !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->title);
        }

        if ($this->cellid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cellid);
        }

        if ($this->rtmp_token !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->rtmp_token);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->permission = null;
        $this->gameid = null;
        $this->client_instance_id = null;
        $this->title = null;
        $this->cellid = null;
        $this->rtmp_token = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_BeginBroadcastSession_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->permission = ($message->permission !== null) ? $message->permission : $this->permission;
        $this->gameid = ($message->gameid !== null) ? $message->gameid : $this->gameid;
        $this->client_instance_id = ($message->client_instance_id !== null) ? $message->client_instance_id : $this->client_instance_id;
        $this->title = ($message->title !== null) ? $message->title : $this->title;
        $this->cellid = ($message->cellid !== null) ? $message->cellid : $this->cellid;
        $this->rtmp_token = ($message->rtmp_token !== null) ? $message->rtmp_token : $this->rtmp_token;
    }


}

