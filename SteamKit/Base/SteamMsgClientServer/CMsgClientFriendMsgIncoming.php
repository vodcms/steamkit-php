<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientFriendMsgIncoming
 */
class CMsgClientFriendMsgIncoming extends \Protobuf\AbstractMessage
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
     * steamid_from optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid_from = null;

    /**
     * chat_entry_type optional int32 = 2
     *
     * @var int
     */
    protected $chat_entry_type = null;

    /**
     * from_limited_account optional bool = 3
     *
     * @var bool
     */
    protected $from_limited_account = null;

    /**
     * message optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $message = null;

    /**
     * rtime32_server_timestamp optional fixed32 = 5
     *
     * @var int
     */
    protected $rtime32_server_timestamp = null;

    /**
     * Check if 'steamid_from' has a value
     *
     * @return bool
     */
    public function hasSteamidFrom()
    {
        return $this->steamid_from !== null;
    }

    /**
     * Get 'steamid_from' value
     *
     * @return int
     */
    public function getSteamidFrom()
    {
        return $this->steamid_from;
    }

    /**
     * Set 'steamid_from' value
     *
     * @param int $value
     */
    public function setSteamidFrom($value = null)
    {
        $this->steamid_from = $value;
    }

    /**
     * Check if 'chat_entry_type' has a value
     *
     * @return bool
     */
    public function hasChatEntryType()
    {
        return $this->chat_entry_type !== null;
    }

    /**
     * Get 'chat_entry_type' value
     *
     * @return int
     */
    public function getChatEntryType()
    {
        return $this->chat_entry_type;
    }

    /**
     * Set 'chat_entry_type' value
     *
     * @param int $value
     */
    public function setChatEntryType($value = null)
    {
        $this->chat_entry_type = $value;
    }

    /**
     * Check if 'from_limited_account' has a value
     *
     * @return bool
     */
    public function hasFromLimitedAccount()
    {
        return $this->from_limited_account !== null;
    }

    /**
     * Get 'from_limited_account' value
     *
     * @return bool
     */
    public function getFromLimitedAccount()
    {
        return $this->from_limited_account;
    }

    /**
     * Set 'from_limited_account' value
     *
     * @param bool $value
     */
    public function setFromLimitedAccount($value = null)
    {
        $this->from_limited_account = $value;
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
     * @return \Protobuf\Stream
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set 'message' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setMessage($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->message = $value;
    }

    /**
     * Check if 'rtime32_server_timestamp' has a value
     *
     * @return bool
     */
    public function hasRtime32ServerTimestamp()
    {
        return $this->rtime32_server_timestamp !== null;
    }

    /**
     * Get 'rtime32_server_timestamp' value
     *
     * @return int
     */
    public function getRtime32ServerTimestamp()
    {
        return $this->rtime32_server_timestamp;
    }

    /**
     * Set 'rtime32_server_timestamp' value
     *
     * @param int $value
     */
    public function setRtime32ServerTimestamp($value = null)
    {
        $this->rtime32_server_timestamp = $value;
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
            'steamid_from' => null,
            'chat_entry_type' => null,
            'from_limited_account' => null,
            'message' => null,
            'rtime32_server_timestamp' => null
        ], $values);

        $message->setSteamidFrom($values['steamid_from']);
        $message->setChatEntryType($values['chat_entry_type']);
        $message->setFromLimitedAccount($values['from_limited_account']);
        $message->setMessage($values['message']);
        $message->setRtime32ServerTimestamp($values['rtime32_server_timestamp']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientFriendMsgIncoming',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid_from',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'chat_entry_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'from_limited_account',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'rtime32_server_timestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
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

        if ($this->steamid_from !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid_from);
        }

        if ($this->chat_entry_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->chat_entry_type);
        }

        if ($this->from_limited_account !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->from_limited_account);
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->message);
        }

        if ($this->rtime32_server_timestamp !== null) {
            $writer->writeVarint($stream, 45);
            $writer->writeFixed32($stream, $this->rtime32_server_timestamp);
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

                $this->steamid_from = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->chat_entry_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->from_limited_account = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->message = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime32_server_timestamp = $reader->readFixed32($stream);

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

        if ($this->steamid_from !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->chat_entry_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->chat_entry_type);
        }

        if ($this->from_limited_account !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->message);
        }

        if ($this->rtime32_server_timestamp !== null) {
            $size += 1;
            $size += 4;
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
        $this->steamid_from = null;
        $this->chat_entry_type = null;
        $this->from_limited_account = null;
        $this->message = null;
        $this->rtime32_server_timestamp = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientFriendMsgIncoming) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid_from = ($message->steamid_from !== null) ? $message->steamid_from : $this->steamid_from;
        $this->chat_entry_type = ($message->chat_entry_type !== null) ? $message->chat_entry_type : $this->chat_entry_type;
        $this->from_limited_account = ($message->from_limited_account !== null) ? $message->from_limited_account : $this->from_limited_account;
        $this->message = ($message->message !== null) ? $message->message : $this->message;
        $this->rtime32_server_timestamp = ($message->rtime32_server_timestamp !== null) ? $message->rtime32_server_timestamp : $this->rtime32_server_timestamp;
    }


}

