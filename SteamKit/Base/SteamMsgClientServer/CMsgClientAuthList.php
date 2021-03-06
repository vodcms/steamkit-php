<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientAuthList
 */
class CMsgClientAuthList extends \Protobuf\AbstractMessage
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
     * tokens_left optional uint32 = 1
     *
     * @var int
     */
    protected $tokens_left = null;

    /**
     * last_request_seq optional uint32 = 2
     *
     * @var int
     */
    protected $last_request_seq = null;

    /**
     * last_request_seq_from_server optional uint32 = 3
     *
     * @var int
     */
    protected $last_request_seq_from_server = null;

    /**
     * tickets repeated message = 4
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgBase\CMsgAuthTicket>
     */
    protected $tickets = null;

    /**
     * app_ids repeated uint32 = 5
     *
     * @var \Protobuf\Collection
     */
    protected $app_ids = null;

    /**
     * message_sequence optional uint32 = 6
     *
     * @var int
     */
    protected $message_sequence = null;

    /**
     * Check if 'tokens_left' has a value
     *
     * @return bool
     */
    public function hasTokensLeft()
    {
        return $this->tokens_left !== null;
    }

    /**
     * Get 'tokens_left' value
     *
     * @return int
     */
    public function getTokensLeft()
    {
        return $this->tokens_left;
    }

    /**
     * Set 'tokens_left' value
     *
     * @param int $value
     */
    public function setTokensLeft($value = null)
    {
        $this->tokens_left = $value;
    }

    /**
     * Check if 'last_request_seq' has a value
     *
     * @return bool
     */
    public function hasLastRequestSeq()
    {
        return $this->last_request_seq !== null;
    }

    /**
     * Get 'last_request_seq' value
     *
     * @return int
     */
    public function getLastRequestSeq()
    {
        return $this->last_request_seq;
    }

    /**
     * Set 'last_request_seq' value
     *
     * @param int $value
     */
    public function setLastRequestSeq($value = null)
    {
        $this->last_request_seq = $value;
    }

    /**
     * Check if 'last_request_seq_from_server' has a value
     *
     * @return bool
     */
    public function hasLastRequestSeqFromServer()
    {
        return $this->last_request_seq_from_server !== null;
    }

    /**
     * Get 'last_request_seq_from_server' value
     *
     * @return int
     */
    public function getLastRequestSeqFromServer()
    {
        return $this->last_request_seq_from_server;
    }

    /**
     * Set 'last_request_seq_from_server' value
     *
     * @param int $value
     */
    public function setLastRequestSeqFromServer($value = null)
    {
        $this->last_request_seq_from_server = $value;
    }

    /**
     * Check if 'tickets' has a value
     *
     * @return bool
     */
    public function hasTicketsList()
    {
        return $this->tickets !== null;
    }

    /**
     * Get 'tickets' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgBase\CMsgAuthTicket>
     */
    public function getTicketsList()
    {
        return $this->tickets;
    }

    /**
     * Set 'tickets' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgBase\CMsgAuthTicket> $value
     */
    public function setTicketsList(\Protobuf\Collection $value = null)
    {
        $this->tickets = $value;
    }

    /**
     * Add a new element to 'tickets'
     *
     * @param \SteamKit\Base\SteamMsgBase\CMsgAuthTicket $value
     */
    public function addTickets(\SteamKit\Base\SteamMsgBase\CMsgAuthTicket $value)
    {
        if ($this->tickets === null) {
            $this->tickets = new \Protobuf\MessageCollection();
        }

        $this->tickets->add($value);
    }

    /**
     * Check if 'app_ids' has a value
     *
     * @return bool
     */
    public function hasAppIdsList()
    {
        return $this->app_ids !== null;
    }

    /**
     * Get 'app_ids' value
     *
     * @return \Protobuf\Collection
     */
    public function getAppIdsList()
    {
        return $this->app_ids;
    }

    /**
     * Set 'app_ids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAppIdsList(\Protobuf\Collection $value = null)
    {
        $this->app_ids = $value;
    }

    /**
     * Add a new element to 'app_ids'
     *
     * @param int $value
     */
    public function addAppIds($value)
    {
        if ($this->app_ids === null) {
            $this->app_ids = new \Protobuf\ScalarCollection();
        }

        $this->app_ids->add($value);
    }

    /**
     * Check if 'message_sequence' has a value
     *
     * @return bool
     */
    public function hasMessageSequence()
    {
        return $this->message_sequence !== null;
    }

    /**
     * Get 'message_sequence' value
     *
     * @return int
     */
    public function getMessageSequence()
    {
        return $this->message_sequence;
    }

    /**
     * Set 'message_sequence' value
     *
     * @param int $value
     */
    public function setMessageSequence($value = null)
    {
        $this->message_sequence = $value;
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
            'tokens_left' => null,
            'last_request_seq' => null,
            'last_request_seq_from_server' => null,
            'tickets' => [],
            'app_ids' => [],
            'message_sequence' => null
        ], $values);

        $message->setTokensLeft($values['tokens_left']);
        $message->setLastRequestSeq($values['last_request_seq']);
        $message->setLastRequestSeqFromServer($values['last_request_seq_from_server']);
        $message->setMessageSequence($values['message_sequence']);

        foreach ($values['tickets'] as $item) {
            $message->addTickets($item);
        }

        foreach ($values['app_ids'] as $item) {
            $message->addAppIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientAuthList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'tokens_left',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'last_request_seq',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'last_request_seq_from_server',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'tickets',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgBase.CMsgAuthTicket'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'app_ids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'message_sequence',
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

        if ($this->tokens_left !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->tokens_left);
        }

        if ($this->last_request_seq !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->last_request_seq);
        }

        if ($this->last_request_seq_from_server !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->last_request_seq_from_server);
        }

        if ($this->tickets !== null) {
            foreach ($this->tickets as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->app_ids !== null) {
            foreach ($this->app_ids as $val) {
                $writer->writeVarint($stream, 40);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->message_sequence !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->message_sequence);
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

                $this->tokens_left = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->last_request_seq = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->last_request_seq_from_server = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgBase\CMsgAuthTicket();

                if ($this->tickets === null) {
                    $this->tickets = new \Protobuf\MessageCollection();
                }

                $this->tickets->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->app_ids === null) {
                    $this->app_ids = new \Protobuf\ScalarCollection();
                }

                $this->app_ids->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->message_sequence = $reader->readVarint($stream);

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

        if ($this->tokens_left !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->tokens_left);
        }

        if ($this->last_request_seq !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_request_seq);
        }

        if ($this->last_request_seq_from_server !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_request_seq_from_server);
        }

        if ($this->tickets !== null) {
            foreach ($this->tickets as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->app_ids !== null) {
            foreach ($this->app_ids as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->message_sequence !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->message_sequence);
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
        $this->tokens_left = null;
        $this->last_request_seq = null;
        $this->last_request_seq_from_server = null;
        $this->tickets = null;
        $this->app_ids = null;
        $this->message_sequence = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientAuthList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->tokens_left = ($message->tokens_left !== null) ? $message->tokens_left : $this->tokens_left;
        $this->last_request_seq = ($message->last_request_seq !== null) ? $message->last_request_seq : $this->last_request_seq;
        $this->last_request_seq_from_server = ($message->last_request_seq_from_server !== null) ? $message->last_request_seq_from_server : $this->last_request_seq_from_server;
        $this->tickets = ($message->tickets !== null) ? $message->tickets : $this->tickets;
        $this->app_ids = ($message->app_ids !== null) ? $message->app_ids : $this->app_ids;
        $this->message_sequence = ($message->message_sequence !== null) ? $message->message_sequence : $this->message_sequence;
    }


}

