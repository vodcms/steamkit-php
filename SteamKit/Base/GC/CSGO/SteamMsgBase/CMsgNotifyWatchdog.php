<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgNotifyWatchdog
 */
class CMsgNotifyWatchdog extends \Protobuf\AbstractMessage
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
     * source optional uint32 = 1
     *
     * @var int
     */
    protected $source = null;

    /**
     * alert_type optional uint32 = 2
     *
     * @var int
     */
    protected $alert_type = null;

    /**
     * alert_destination optional uint32 = 3
     *
     * @var int
     */
    protected $alert_destination = null;

    /**
     * critical optional bool = 4
     *
     * @var bool
     */
    protected $critical = null;

    /**
     * time optional uint32 = 5
     *
     * @var int
     */
    protected $time = null;

    /**
     * appid optional uint32 = 6
     *
     * @var int
     */
    protected $appid = null;

    /**
     * text optional string = 7
     *
     * @var string
     */
    protected $text = null;

    /**
     * Check if 'source' has a value
     *
     * @return bool
     */
    public function hasSource()
    {
        return $this->source !== null;
    }

    /**
     * Get 'source' value
     *
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set 'source' value
     *
     * @param int $value
     */
    public function setSource($value = null)
    {
        $this->source = $value;
    }

    /**
     * Check if 'alert_type' has a value
     *
     * @return bool
     */
    public function hasAlertType()
    {
        return $this->alert_type !== null;
    }

    /**
     * Get 'alert_type' value
     *
     * @return int
     */
    public function getAlertType()
    {
        return $this->alert_type;
    }

    /**
     * Set 'alert_type' value
     *
     * @param int $value
     */
    public function setAlertType($value = null)
    {
        $this->alert_type = $value;
    }

    /**
     * Check if 'alert_destination' has a value
     *
     * @return bool
     */
    public function hasAlertDestination()
    {
        return $this->alert_destination !== null;
    }

    /**
     * Get 'alert_destination' value
     *
     * @return int
     */
    public function getAlertDestination()
    {
        return $this->alert_destination;
    }

    /**
     * Set 'alert_destination' value
     *
     * @param int $value
     */
    public function setAlertDestination($value = null)
    {
        $this->alert_destination = $value;
    }

    /**
     * Check if 'critical' has a value
     *
     * @return bool
     */
    public function hasCritical()
    {
        return $this->critical !== null;
    }

    /**
     * Get 'critical' value
     *
     * @return bool
     */
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Set 'critical' value
     *
     * @param bool $value
     */
    public function setCritical($value = null)
    {
        $this->critical = $value;
    }

    /**
     * Check if 'time' has a value
     *
     * @return bool
     */
    public function hasTime()
    {
        return $this->time !== null;
    }

    /**
     * Get 'time' value
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set 'time' value
     *
     * @param int $value
     */
    public function setTime($value = null)
    {
        $this->time = $value;
    }

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'text' has a value
     *
     * @return bool
     */
    public function hasText()
    {
        return $this->text !== null;
    }

    /**
     * Get 'text' value
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set 'text' value
     *
     * @param string $value
     */
    public function setText($value = null)
    {
        $this->text = $value;
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
            'source' => null,
            'alert_type' => null,
            'alert_destination' => null,
            'critical' => null,
            'time' => null,
            'appid' => null,
            'text' => null
        ], $values);

        $message->setSource($values['source']);
        $message->setAlertType($values['alert_type']);
        $message->setAlertDestination($values['alert_destination']);
        $message->setCritical($values['critical']);
        $message->setTime($values['time']);
        $message->setAppid($values['appid']);
        $message->setText($values['text']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgNotifyWatchdog',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'source',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'alert_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'alert_destination',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'critical',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'text',
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

        if ($this->source !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->source);
        }

        if ($this->alert_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->alert_type);
        }

        if ($this->alert_destination !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->alert_destination);
        }

        if ($this->critical !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->critical);
        }

        if ($this->time !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->time);
        }

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->text !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->text);
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

                $this->source = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->alert_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->alert_destination = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->critical = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->time = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->text = $reader->readString($stream);

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

        if ($this->source !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->source);
        }

        if ($this->alert_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->alert_type);
        }

        if ($this->alert_destination !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->alert_destination);
        }

        if ($this->critical !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->time !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time);
        }

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->text !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->text);
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
        $this->source = null;
        $this->alert_type = null;
        $this->alert_destination = null;
        $this->critical = null;
        $this->time = null;
        $this->appid = null;
        $this->text = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgNotifyWatchdog) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->source = ($message->source !== null) ? $message->source : $this->source;
        $this->alert_type = ($message->alert_type !== null) ? $message->alert_type : $this->alert_type;
        $this->alert_destination = ($message->alert_destination !== null) ? $message->alert_destination : $this->alert_destination;
        $this->critical = ($message->critical !== null) ? $message->critical : $this->critical;
        $this->time = ($message->time !== null) ? $message->time : $this->time;
        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->text = ($message->text !== null) ? $message->text : $this->text;
    }


}

