<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steamdatagram_messages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamDatagramMsg;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramClientSwitchedPrimary
 */
class CMsgSteamDatagramClientSwitchedPrimary extends \Protobuf\AbstractMessage
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
     * client_cookie optional fixed32 = 1
     *
     * @var int
     */
    protected $client_cookie = null;

    /**
     * from_ip optional fixed32 = 2
     *
     * @var int
     */
    protected $from_ip = null;

    /**
     * from_port optional uint32 = 3
     *
     * @var int
     */
    protected $from_port = null;

    /**
     * from_router_cluster optional fixed32 = 4
     *
     * @var int
     */
    protected $from_router_cluster = null;

    /**
     * from_active_time optional uint32 = 5
     *
     * @var int
     */
    protected $from_active_time = null;

    /**
     * from_active_packets_recv optional uint32 = 6
     *
     * @var int
     */
    protected $from_active_packets_recv = null;

    /**
     * from_dropped_reason optional string = 7
     *
     * @var string
     */
    protected $from_dropped_reason = null;

    /**
     * gap_ms optional uint32 = 8
     *
     * @var int
     */
    protected $gap_ms = null;

    /**
     * from_quality_now optional message = 9
     *
     * @var \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    protected $from_quality_now = null;

    /**
     * to_quality_now optional message = 10
     *
     * @var \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    protected $to_quality_now = null;

    /**
     * from_quality_then optional message = 11
     *
     * @var \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    protected $from_quality_then = null;

    /**
     * to_quality_then optional message = 12
     *
     * @var \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    protected $to_quality_then = null;

    /**
     * Check if 'client_cookie' has a value
     *
     * @return bool
     */
    public function hasClientCookie()
    {
        return $this->client_cookie !== null;
    }

    /**
     * Get 'client_cookie' value
     *
     * @return int
     */
    public function getClientCookie()
    {
        return $this->client_cookie;
    }

    /**
     * Set 'client_cookie' value
     *
     * @param int $value
     */
    public function setClientCookie($value = null)
    {
        $this->client_cookie = $value;
    }

    /**
     * Check if 'from_ip' has a value
     *
     * @return bool
     */
    public function hasFromIp()
    {
        return $this->from_ip !== null;
    }

    /**
     * Get 'from_ip' value
     *
     * @return int
     */
    public function getFromIp()
    {
        return $this->from_ip;
    }

    /**
     * Set 'from_ip' value
     *
     * @param int $value
     */
    public function setFromIp($value = null)
    {
        $this->from_ip = $value;
    }

    /**
     * Check if 'from_port' has a value
     *
     * @return bool
     */
    public function hasFromPort()
    {
        return $this->from_port !== null;
    }

    /**
     * Get 'from_port' value
     *
     * @return int
     */
    public function getFromPort()
    {
        return $this->from_port;
    }

    /**
     * Set 'from_port' value
     *
     * @param int $value
     */
    public function setFromPort($value = null)
    {
        $this->from_port = $value;
    }

    /**
     * Check if 'from_router_cluster' has a value
     *
     * @return bool
     */
    public function hasFromRouterCluster()
    {
        return $this->from_router_cluster !== null;
    }

    /**
     * Get 'from_router_cluster' value
     *
     * @return int
     */
    public function getFromRouterCluster()
    {
        return $this->from_router_cluster;
    }

    /**
     * Set 'from_router_cluster' value
     *
     * @param int $value
     */
    public function setFromRouterCluster($value = null)
    {
        $this->from_router_cluster = $value;
    }

    /**
     * Check if 'from_active_time' has a value
     *
     * @return bool
     */
    public function hasFromActiveTime()
    {
        return $this->from_active_time !== null;
    }

    /**
     * Get 'from_active_time' value
     *
     * @return int
     */
    public function getFromActiveTime()
    {
        return $this->from_active_time;
    }

    /**
     * Set 'from_active_time' value
     *
     * @param int $value
     */
    public function setFromActiveTime($value = null)
    {
        $this->from_active_time = $value;
    }

    /**
     * Check if 'from_active_packets_recv' has a value
     *
     * @return bool
     */
    public function hasFromActivePacketsRecv()
    {
        return $this->from_active_packets_recv !== null;
    }

    /**
     * Get 'from_active_packets_recv' value
     *
     * @return int
     */
    public function getFromActivePacketsRecv()
    {
        return $this->from_active_packets_recv;
    }

    /**
     * Set 'from_active_packets_recv' value
     *
     * @param int $value
     */
    public function setFromActivePacketsRecv($value = null)
    {
        $this->from_active_packets_recv = $value;
    }

    /**
     * Check if 'from_dropped_reason' has a value
     *
     * @return bool
     */
    public function hasFromDroppedReason()
    {
        return $this->from_dropped_reason !== null;
    }

    /**
     * Get 'from_dropped_reason' value
     *
     * @return string
     */
    public function getFromDroppedReason()
    {
        return $this->from_dropped_reason;
    }

    /**
     * Set 'from_dropped_reason' value
     *
     * @param string $value
     */
    public function setFromDroppedReason($value = null)
    {
        $this->from_dropped_reason = $value;
    }

    /**
     * Check if 'gap_ms' has a value
     *
     * @return bool
     */
    public function hasGapMs()
    {
        return $this->gap_ms !== null;
    }

    /**
     * Get 'gap_ms' value
     *
     * @return int
     */
    public function getGapMs()
    {
        return $this->gap_ms;
    }

    /**
     * Set 'gap_ms' value
     *
     * @param int $value
     */
    public function setGapMs($value = null)
    {
        $this->gap_ms = $value;
    }

    /**
     * Check if 'from_quality_now' has a value
     *
     * @return bool
     */
    public function hasFromQualityNow()
    {
        return $this->from_quality_now !== null;
    }

    /**
     * Get 'from_quality_now' value
     *
     * @return \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    public function getFromQualityNow()
    {
        return $this->from_quality_now;
    }

    /**
     * Set 'from_quality_now' value
     *
     * @param \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value
     */
    public function setFromQualityNow(\SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value = null)
    {
        $this->from_quality_now = $value;
    }

    /**
     * Check if 'to_quality_now' has a value
     *
     * @return bool
     */
    public function hasToQualityNow()
    {
        return $this->to_quality_now !== null;
    }

    /**
     * Get 'to_quality_now' value
     *
     * @return \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    public function getToQualityNow()
    {
        return $this->to_quality_now;
    }

    /**
     * Set 'to_quality_now' value
     *
     * @param \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value
     */
    public function setToQualityNow(\SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value = null)
    {
        $this->to_quality_now = $value;
    }

    /**
     * Check if 'from_quality_then' has a value
     *
     * @return bool
     */
    public function hasFromQualityThen()
    {
        return $this->from_quality_then !== null;
    }

    /**
     * Get 'from_quality_then' value
     *
     * @return \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    public function getFromQualityThen()
    {
        return $this->from_quality_then;
    }

    /**
     * Set 'from_quality_then' value
     *
     * @param \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value
     */
    public function setFromQualityThen(\SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value = null)
    {
        $this->from_quality_then = $value;
    }

    /**
     * Check if 'to_quality_then' has a value
     *
     * @return bool
     */
    public function hasToQualityThen()
    {
        return $this->to_quality_then !== null;
    }

    /**
     * Get 'to_quality_then' value
     *
     * @return \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality
     */
    public function getToQualityThen()
    {
        return $this->to_quality_then;
    }

    /**
     * Set 'to_quality_then' value
     *
     * @param \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value
     */
    public function setToQualityThen(\SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality $value = null)
    {
        $this->to_quality_then = $value;
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
            'client_cookie' => null,
            'from_ip' => null,
            'from_port' => null,
            'from_router_cluster' => null,
            'from_active_time' => null,
            'from_active_packets_recv' => null,
            'from_dropped_reason' => null,
            'gap_ms' => null,
            'from_quality_now' => null,
            'to_quality_now' => null,
            'from_quality_then' => null,
            'to_quality_then' => null
        ], $values);

        $message->setClientCookie($values['client_cookie']);
        $message->setFromIp($values['from_ip']);
        $message->setFromPort($values['from_port']);
        $message->setFromRouterCluster($values['from_router_cluster']);
        $message->setFromActiveTime($values['from_active_time']);
        $message->setFromActivePacketsRecv($values['from_active_packets_recv']);
        $message->setFromDroppedReason($values['from_dropped_reason']);
        $message->setGapMs($values['gap_ms']);
        $message->setFromQualityNow($values['from_quality_now']);
        $message->setToQualityNow($values['to_quality_now']);
        $message->setFromQualityThen($values['from_quality_then']);
        $message->setToQualityThen($values['to_quality_then']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgSteamDatagramClientSwitchedPrimary',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'client_cookie',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'from_ip',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'from_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'from_router_cluster',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'from_active_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'from_active_packets_recv',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'from_dropped_reason',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'gap_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'from_quality_now',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramClientSwitchedPrimary.RouterQuality'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'to_quality_now',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramClientSwitchedPrimary.RouterQuality'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'from_quality_then',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramClientSwitchedPrimary.RouterQuality'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'to_quality_then',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramClientSwitchedPrimary.RouterQuality'
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

        if ($this->client_cookie !== null) {
            $writer->writeVarint($stream, 13);
            $writer->writeFixed32($stream, $this->client_cookie);
        }

        if ($this->from_ip !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFixed32($stream, $this->from_ip);
        }

        if ($this->from_port !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->from_port);
        }

        if ($this->from_router_cluster !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFixed32($stream, $this->from_router_cluster);
        }

        if ($this->from_active_time !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->from_active_time);
        }

        if ($this->from_active_packets_recv !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->from_active_packets_recv);
        }

        if ($this->from_dropped_reason !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->from_dropped_reason);
        }

        if ($this->gap_ms !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->gap_ms);
        }

        if ($this->from_quality_now !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->from_quality_now->serializedSize($sizeContext));
            $this->from_quality_now->writeTo($context);
        }

        if ($this->to_quality_now !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->to_quality_now->serializedSize($sizeContext));
            $this->to_quality_now->writeTo($context);
        }

        if ($this->from_quality_then !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $this->from_quality_then->serializedSize($sizeContext));
            $this->from_quality_then->writeTo($context);
        }

        if ($this->to_quality_then !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeVarint($stream, $this->to_quality_then->serializedSize($sizeContext));
            $this->to_quality_then->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->client_cookie = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->from_ip = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->from_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->from_router_cluster = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->from_active_time = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->from_active_packets_recv = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->from_dropped_reason = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->gap_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality();

                $this->from_quality_now = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality();

                $this->to_quality_now = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality();

                $this->from_quality_then = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary\RouterQuality();

                $this->to_quality_then = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->client_cookie !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->from_ip !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->from_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->from_port);
        }

        if ($this->from_router_cluster !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->from_active_time !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->from_active_time);
        }

        if ($this->from_active_packets_recv !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->from_active_packets_recv);
        }

        if ($this->from_dropped_reason !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->from_dropped_reason);
        }

        if ($this->gap_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gap_ms);
        }

        if ($this->from_quality_now !== null) {
            $innerSize = $this->from_quality_now->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->to_quality_now !== null) {
            $innerSize = $this->to_quality_now->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->from_quality_then !== null) {
            $innerSize = $this->from_quality_then->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->to_quality_then !== null) {
            $innerSize = $this->to_quality_then->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->client_cookie = null;
        $this->from_ip = null;
        $this->from_port = null;
        $this->from_router_cluster = null;
        $this->from_active_time = null;
        $this->from_active_packets_recv = null;
        $this->from_dropped_reason = null;
        $this->gap_ms = null;
        $this->from_quality_now = null;
        $this->to_quality_now = null;
        $this->from_quality_then = null;
        $this->to_quality_then = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramClientSwitchedPrimary) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->client_cookie = ($message->client_cookie !== null) ? $message->client_cookie : $this->client_cookie;
        $this->from_ip = ($message->from_ip !== null) ? $message->from_ip : $this->from_ip;
        $this->from_port = ($message->from_port !== null) ? $message->from_port : $this->from_port;
        $this->from_router_cluster = ($message->from_router_cluster !== null) ? $message->from_router_cluster : $this->from_router_cluster;
        $this->from_active_time = ($message->from_active_time !== null) ? $message->from_active_time : $this->from_active_time;
        $this->from_active_packets_recv = ($message->from_active_packets_recv !== null) ? $message->from_active_packets_recv : $this->from_active_packets_recv;
        $this->from_dropped_reason = ($message->from_dropped_reason !== null) ? $message->from_dropped_reason : $this->from_dropped_reason;
        $this->gap_ms = ($message->gap_ms !== null) ? $message->gap_ms : $this->gap_ms;
        $this->from_quality_now = ($message->from_quality_now !== null) ? $message->from_quality_now : $this->from_quality_now;
        $this->to_quality_now = ($message->to_quality_now !== null) ? $message->to_quality_now : $this->to_quality_now;
        $this->from_quality_then = ($message->from_quality_then !== null) ? $message->from_quality_then : $this->from_quality_then;
        $this->to_quality_then = ($message->to_quality_then !== null) ? $message->to_quality_then : $this->to_quality_then;
    }


}
