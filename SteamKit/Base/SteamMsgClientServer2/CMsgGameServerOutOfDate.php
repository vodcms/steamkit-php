<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer2.CMsgGameServerOutOfDate
 */
class CMsgGameServerOutOfDate extends \Protobuf\AbstractMessage
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
     * steam_id_gs optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id_gs = null;

    /**
     * reject optional bool = 2
     *
     * @var bool
     */
    protected $reject = null;

    /**
     * message optional string = 3
     *
     * @var string
     */
    protected $message = null;

    /**
     * Check if 'steam_id_gs' has a value
     *
     * @return bool
     */
    public function hasSteamIdGs()
    {
        return $this->steam_id_gs !== null;
    }

    /**
     * Get 'steam_id_gs' value
     *
     * @return int
     */
    public function getSteamIdGs()
    {
        return $this->steam_id_gs;
    }

    /**
     * Set 'steam_id_gs' value
     *
     * @param int $value
     */
    public function setSteamIdGs($value = null)
    {
        $this->steam_id_gs = $value;
    }

    /**
     * Check if 'reject' has a value
     *
     * @return bool
     */
    public function hasReject()
    {
        return $this->reject !== null;
    }

    /**
     * Get 'reject' value
     *
     * @return bool
     */
    public function getReject()
    {
        return $this->reject;
    }

    /**
     * Set 'reject' value
     *
     * @param bool $value
     */
    public function setReject($value = null)
    {
        $this->reject = $value;
    }

    /**
     * Check if 'message' has a value
     *
     * @return bool
     */
    public function hasMessage()
    {
        return $this->message !== null;
    }

    /**
     * Get 'message' value
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set 'message' value
     *
     * @param string $value
     */
    public function setMessage($value = null)
    {
        $this->message = $value;
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
            'steam_id_gs' => null,
            'reject' => null,
            'message' => null
        ], $values);

        $message->setSteamIdGs($values['steam_id_gs']);
        $message->setReject($values['reject']);
        $message->setMessage($values['message']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGameServerOutOfDate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id_gs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'reject',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->steam_id_gs !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id_gs);
        }

        if ($this->reject !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->reject);
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->message);
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

                $this->steam_id_gs = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->reject = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->message = $reader->readString($stream);

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

        if ($this->steam_id_gs !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->reject !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->message);
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
        $this->steam_id_gs = null;
        $this->reject = null;
        $this->message = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgGameServerOutOfDate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id_gs = ($message->steam_id_gs !== null) ? $message->steam_id_gs : $this->steam_id_gs;
        $this->reject = ($message->reject !== null) ? $message->reject : $this->reject;
        $this->message = ($message->message !== null) ? $message->message : $this->message;
    }


}

