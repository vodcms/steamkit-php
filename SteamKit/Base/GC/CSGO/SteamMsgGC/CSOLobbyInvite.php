<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CSOLobbyInvite
 */
class CSOLobbyInvite extends \Protobuf\AbstractMessage
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
     * group_id optional uint64 = 1
     *
     * @var int
     */
    protected $group_id = null;

    /**
     * sender_id optional fixed64 = 2
     *
     * @var int
     */
    protected $sender_id = null;

    /**
     * sender_name optional string = 3
     *
     * @var string
     */
    protected $sender_name = null;

    /**
     * Check if 'group_id' has a value
     *
     * @return bool
     */
    public function hasGroupId()
    {
        return $this->group_id !== null;
    }

    /**
     * Get 'group_id' value
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set 'group_id' value
     *
     * @param int $value
     */
    public function setGroupId($value = null)
    {
        $this->group_id = $value;
    }

    /**
     * Check if 'sender_id' has a value
     *
     * @return bool
     */
    public function hasSenderId()
    {
        return $this->sender_id !== null;
    }

    /**
     * Get 'sender_id' value
     *
     * @return int
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Set 'sender_id' value
     *
     * @param int $value
     */
    public function setSenderId($value = null)
    {
        $this->sender_id = $value;
    }

    /**
     * Check if 'sender_name' has a value
     *
     * @return bool
     */
    public function hasSenderName()
    {
        return $this->sender_name !== null;
    }

    /**
     * Get 'sender_name' value
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->sender_name;
    }

    /**
     * Set 'sender_name' value
     *
     * @param string $value
     */
    public function setSenderName($value = null)
    {
        $this->sender_name = $value;
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
            'group_id' => null,
            'sender_id' => null,
            'sender_name' => null
        ], $values);

        $message->setGroupId($values['group_id']);
        $message->setSenderId($values['sender_id']);
        $message->setSenderName($values['sender_name']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CSOLobbyInvite',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'group_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'sender_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'sender_name',
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

        if ($this->group_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->group_id);
        }

        if ($this->sender_id !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->sender_id);
        }

        if ($this->sender_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->sender_name);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->group_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->sender_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->sender_name = $reader->readString($stream);

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

        if ($this->group_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->group_id);
        }

        if ($this->sender_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->sender_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->sender_name);
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
        $this->group_id = null;
        $this->sender_id = null;
        $this->sender_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOLobbyInvite) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->group_id = ($message->group_id !== null) ? $message->group_id : $this->group_id;
        $this->sender_id = ($message->sender_id !== null) ? $message->sender_id : $this->sender_id;
        $this->sender_name = ($message->sender_name !== null) ? $message->sender_name : $this->sender_name;
    }


}

