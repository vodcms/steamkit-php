<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientRegisterAuthTicketWithCM
 */
class CMsgClientRegisterAuthTicketWithCM extends \Protobuf\AbstractMessage
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
     * protocol_version optional uint32 = 1
     *
     * @var int
     */
    protected $protocol_version = null;

    /**
     * ticket optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $ticket = null;

    /**
     * client_instance_id optional uint64 = 4
     *
     * @var int
     */
    protected $client_instance_id = null;

    /**
     * Check if 'protocol_version' has a value
     *
     * @return bool
     */
    public function hasProtocolVersion()
    {
        return $this->protocol_version !== null;
    }

    /**
     * Get 'protocol_version' value
     *
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    /**
     * Set 'protocol_version' value
     *
     * @param int $value
     */
    public function setProtocolVersion($value = null)
    {
        $this->protocol_version = $value;
    }

    /**
     * Check if 'ticket' has a value
     *
     * @return bool
     */
    public function hasTicket()
    {
        return $this->ticket !== null;
    }

    /**
     * Get 'ticket' value
     *
     * @return \Protobuf\Stream
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set 'ticket' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setTicket($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->ticket = $value;
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
            'protocol_version' => null,
            'ticket' => null,
            'client_instance_id' => null
        ], $values);

        $message->setProtocolVersion($values['protocol_version']);
        $message->setTicket($values['ticket']);
        $message->setClientInstanceId($values['client_instance_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientRegisterAuthTicketWithCM',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'protocol_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ticket',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'client_instance_id',
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

        if ($this->protocol_version !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->protocol_version);
        }

        if ($this->ticket !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->ticket);
        }

        if ($this->client_instance_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->client_instance_id);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->protocol_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->ticket = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->client_instance_id = $reader->readVarint($stream);

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

        if ($this->protocol_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protocol_version);
        }

        if ($this->ticket !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->ticket);
        }

        if ($this->client_instance_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_instance_id);
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
        $this->protocol_version = null;
        $this->ticket = null;
        $this->client_instance_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientRegisterAuthTicketWithCM) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->protocol_version = ($message->protocol_version !== null) ? $message->protocol_version : $this->protocol_version;
        $this->ticket = ($message->ticket !== null) ? $message->ticket : $this->ticket;
        $this->client_instance_id = ($message->client_instance_id !== null) ? $message->client_instance_id : $this->client_instance_id;
    }


}

