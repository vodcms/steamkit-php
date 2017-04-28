<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer2.CMsgGameServerRemove
 */
class CMsgGameServerRemove extends \Protobuf\AbstractMessage
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
     * steam_id optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id = null;

    /**
     * ip optional uint32 = 2
     *
     * @var int
     */
    protected $ip = null;

    /**
     * query_port optional uint32 = 3
     *
     * @var int
     */
    protected $query_port = null;

    /**
     * Check if 'steam_id' has a value
     *
     * @return bool
     */
    public function hasSteamId()
    {
        return $this->steam_id !== null;
    }

    /**
     * Get 'steam_id' value
     *
     * @return int
     */
    public function getSteamId()
    {
        return $this->steam_id;
    }

    /**
     * Set 'steam_id' value
     *
     * @param int $value
     */
    public function setSteamId($value = null)
    {
        $this->steam_id = $value;
    }

    /**
     * Check if 'ip' has a value
     *
     * @return bool
     */
    public function hasIp()
    {
        return $this->ip !== null;
    }

    /**
     * Get 'ip' value
     *
     * @return int
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set 'ip' value
     *
     * @param int $value
     */
    public function setIp($value = null)
    {
        $this->ip = $value;
    }

    /**
     * Check if 'query_port' has a value
     *
     * @return bool
     */
    public function hasQueryPort()
    {
        return $this->query_port !== null;
    }

    /**
     * Get 'query_port' value
     *
     * @return int
     */
    public function getQueryPort()
    {
        return $this->query_port;
    }

    /**
     * Set 'query_port' value
     *
     * @param int $value
     */
    public function setQueryPort($value = null)
    {
        $this->query_port = $value;
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
            'steam_id' => null,
            'ip' => null,
            'query_port' => null
        ], $values);

        $message->setSteamId($values['steam_id']);
        $message->setIp($values['ip']);
        $message->setQueryPort($values['query_port']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGameServerRemove',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ip',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'query_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->steam_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id);
        }

        if ($this->ip !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->ip);
        }

        if ($this->query_port !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->query_port);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->ip = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->query_port = $reader->readVarint($stream);

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

        if ($this->steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->ip !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ip);
        }

        if ($this->query_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->query_port);
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
        $this->steam_id = null;
        $this->ip = null;
        $this->query_port = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgGameServerRemove) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id = ($message->steam_id !== null) ? $message->steam_id : $this->steam_id;
        $this->ip = ($message->ip !== null) ? $message->ip : $this->ip;
        $this->query_port = ($message->query_port !== null) ? $message->query_port : $this->query_port;
    }


}
