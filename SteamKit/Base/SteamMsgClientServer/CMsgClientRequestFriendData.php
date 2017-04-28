<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientRequestFriendData
 */
class CMsgClientRequestFriendData extends \Protobuf\AbstractMessage
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
     * persona_state_requested optional uint32 = 1
     *
     * @var int
     */
    protected $persona_state_requested = null;

    /**
     * friends repeated fixed64 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $friends = null;

    /**
     * Check if 'persona_state_requested' has a value
     *
     * @return bool
     */
    public function hasPersonaStateRequested()
    {
        return $this->persona_state_requested !== null;
    }

    /**
     * Get 'persona_state_requested' value
     *
     * @return int
     */
    public function getPersonaStateRequested()
    {
        return $this->persona_state_requested;
    }

    /**
     * Set 'persona_state_requested' value
     *
     * @param int $value
     */
    public function setPersonaStateRequested($value = null)
    {
        $this->persona_state_requested = $value;
    }

    /**
     * Check if 'friends' has a value
     *
     * @return bool
     */
    public function hasFriendsList()
    {
        return $this->friends !== null;
    }

    /**
     * Get 'friends' value
     *
     * @return \Protobuf\Collection
     */
    public function getFriendsList()
    {
        return $this->friends;
    }

    /**
     * Set 'friends' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setFriendsList(\Protobuf\Collection $value = null)
    {
        $this->friends = $value;
    }

    /**
     * Add a new element to 'friends'
     *
     * @param int $value
     */
    public function addFriends($value)
    {
        if ($this->friends === null) {
            $this->friends = new \Protobuf\ScalarCollection();
        }

        $this->friends->add($value);
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
            'persona_state_requested' => null,
            'friends' => []
        ], $values);

        $message->setPersonaStateRequested($values['persona_state_requested']);

        foreach ($values['friends'] as $item) {
            $message->addFriends($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientRequestFriendData',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'persona_state_requested',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'friends',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->persona_state_requested !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->persona_state_requested);
        }

        if ($this->friends !== null) {
            foreach ($this->friends as $val) {
                $writer->writeVarint($stream, 17);
                $writer->writeFixed64($stream, $val);
            }
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

                $this->persona_state_requested = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                if ($this->friends === null) {
                    $this->friends = new \Protobuf\ScalarCollection();
                }

                $this->friends->add($reader->readFixed64($stream));

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

        if ($this->persona_state_requested !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->persona_state_requested);
        }

        if ($this->friends !== null) {
            foreach ($this->friends as $val) {
                $size += 1;
                $size += 8;
            }
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
        $this->persona_state_requested = null;
        $this->friends = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientRequestFriendData) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->persona_state_requested = ($message->persona_state_requested !== null) ? $message->persona_state_requested : $this->persona_state_requested;
        $this->friends = ($message->friends !== null) ? $message->friends : $this->friends;
    }


}

