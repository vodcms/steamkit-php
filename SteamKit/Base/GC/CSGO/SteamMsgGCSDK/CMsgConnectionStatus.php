<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/gcsdk_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGCSDK;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGCSDK.CMsgConnectionStatus
 */
class CMsgConnectionStatus extends \Protobuf\AbstractMessage
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
     * status optional enum = 1
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus
     */
    protected $status = null;

    /**
     * client_session_need optional uint32 = 2
     *
     * @var int
     */
    protected $client_session_need = null;

    /**
     * queue_position optional int32 = 3
     *
     * @var int
     */
    protected $queue_position = null;

    /**
     * queue_size optional int32 = 4
     *
     * @var int
     */
    protected $queue_size = null;

    /**
     * wait_seconds optional int32 = 5
     *
     * @var int
     */
    protected $wait_seconds = null;

    /**
     * estimated_wait_seconds_remaining optional int32 = 6
     *
     * @var int
     */
    protected $estimated_wait_seconds_remaining = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->status = \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus::GCConnectionStatus_HAVE_SESSION();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus $value
     */
    public function setStatus(\SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus $value = null)
    {
        $this->status = $value;
    }

    /**
     * Check if 'client_session_need' has a value
     *
     * @return bool
     */
    public function hasClientSessionNeed()
    {
        return $this->client_session_need !== null;
    }

    /**
     * Get 'client_session_need' value
     *
     * @return int
     */
    public function getClientSessionNeed()
    {
        return $this->client_session_need;
    }

    /**
     * Set 'client_session_need' value
     *
     * @param int $value
     */
    public function setClientSessionNeed($value = null)
    {
        $this->client_session_need = $value;
    }

    /**
     * Check if 'queue_position' has a value
     *
     * @return bool
     */
    public function hasQueuePosition()
    {
        return $this->queue_position !== null;
    }

    /**
     * Get 'queue_position' value
     *
     * @return int
     */
    public function getQueuePosition()
    {
        return $this->queue_position;
    }

    /**
     * Set 'queue_position' value
     *
     * @param int $value
     */
    public function setQueuePosition($value = null)
    {
        $this->queue_position = $value;
    }

    /**
     * Check if 'queue_size' has a value
     *
     * @return bool
     */
    public function hasQueueSize()
    {
        return $this->queue_size !== null;
    }

    /**
     * Get 'queue_size' value
     *
     * @return int
     */
    public function getQueueSize()
    {
        return $this->queue_size;
    }

    /**
     * Set 'queue_size' value
     *
     * @param int $value
     */
    public function setQueueSize($value = null)
    {
        $this->queue_size = $value;
    }

    /**
     * Check if 'wait_seconds' has a value
     *
     * @return bool
     */
    public function hasWaitSeconds()
    {
        return $this->wait_seconds !== null;
    }

    /**
     * Get 'wait_seconds' value
     *
     * @return int
     */
    public function getWaitSeconds()
    {
        return $this->wait_seconds;
    }

    /**
     * Set 'wait_seconds' value
     *
     * @param int $value
     */
    public function setWaitSeconds($value = null)
    {
        $this->wait_seconds = $value;
    }

    /**
     * Check if 'estimated_wait_seconds_remaining' has a value
     *
     * @return bool
     */
    public function hasEstimatedWaitSecondsRemaining()
    {
        return $this->estimated_wait_seconds_remaining !== null;
    }

    /**
     * Get 'estimated_wait_seconds_remaining' value
     *
     * @return int
     */
    public function getEstimatedWaitSecondsRemaining()
    {
        return $this->estimated_wait_seconds_remaining;
    }

    /**
     * Set 'estimated_wait_seconds_remaining' value
     *
     * @param int $value
     */
    public function setEstimatedWaitSecondsRemaining($value = null)
    {
        $this->estimated_wait_seconds_remaining = $value;
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
            'status' => \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus::GCConnectionStatus_HAVE_SESSION(),
            'client_session_need' => null,
            'queue_position' => null,
            'queue_size' => null,
            'wait_seconds' => null,
            'estimated_wait_seconds_remaining' => null
        ], $values);

        $message->setStatus($values['status']);
        $message->setClientSessionNeed($values['client_session_need']);
        $message->setQueuePosition($values['queue_position']);
        $message->setQueueSize($values['queue_size']);
        $message->setWaitSeconds($values['wait_seconds']);
        $message->setEstimatedWaitSecondsRemaining($values['estimated_wait_seconds_remaining']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgConnectionStatus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGCSDK.GCConnectionStatus',
                    'default_value' => \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus::GCConnectionStatus_HAVE_SESSION()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'client_session_need',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'queue_position',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'queue_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'wait_seconds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'estimated_wait_seconds_remaining',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->status !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->status->value());
        }

        if ($this->client_session_need !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->client_session_need);
        }

        if ($this->queue_position !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->queue_position);
        }

        if ($this->queue_size !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->queue_size);
        }

        if ($this->wait_seconds !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->wait_seconds);
        }

        if ($this->estimated_wait_seconds_remaining !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->estimated_wait_seconds_remaining);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->status = \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->client_session_need = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->queue_position = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->queue_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->wait_seconds = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->estimated_wait_seconds_remaining = $reader->readVarint($stream);

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

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status->value());
        }

        if ($this->client_session_need !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_session_need);
        }

        if ($this->queue_position !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->queue_position);
        }

        if ($this->queue_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->queue_size);
        }

        if ($this->wait_seconds !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->wait_seconds);
        }

        if ($this->estimated_wait_seconds_remaining !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->estimated_wait_seconds_remaining);
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
        $this->status = \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\GCConnectionStatus::GCConnectionStatus_HAVE_SESSION();
        $this->client_session_need = null;
        $this->queue_position = null;
        $this->queue_size = null;
        $this->wait_seconds = null;
        $this->estimated_wait_seconds_remaining = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgConnectionStatus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->client_session_need = ($message->client_session_need !== null) ? $message->client_session_need : $this->client_session_need;
        $this->queue_position = ($message->queue_position !== null) ? $message->queue_position : $this->queue_position;
        $this->queue_size = ($message->queue_size !== null) ? $message->queue_size : $this->queue_size;
        $this->wait_seconds = ($message->wait_seconds !== null) ? $message->wait_seconds : $this->wait_seconds;
        $this->estimated_wait_seconds_remaining = ($message->estimated_wait_seconds_remaining !== null) ? $message->estimated_wait_seconds_remaining : $this->estimated_wait_seconds_remaining;
    }


}

