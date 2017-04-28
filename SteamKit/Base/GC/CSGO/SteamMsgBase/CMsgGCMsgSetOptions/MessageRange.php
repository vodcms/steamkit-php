<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCMsgSetOptions;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCMsgSetOptions.MessageRange
 */
class MessageRange extends \Protobuf\AbstractMessage
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
     * low required uint32 = 1
     *
     * @var int
     */
    protected $low = null;

    /**
     * high required uint32 = 2
     *
     * @var int
     */
    protected $high = null;

    /**
     * Check if 'low' has a value
     *
     * @return bool
     */
    public function hasLow()
    {
        return $this->low !== null;
    }

    /**
     * Get 'low' value
     *
     * @return int
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Set 'low' value
     *
     * @param int $value
     */
    public function setLow($value)
    {
        $this->low = $value;
    }

    /**
     * Check if 'high' has a value
     *
     * @return bool
     */
    public function hasHigh()
    {
        return $this->high !== null;
    }

    /**
     * Get 'high' value
     *
     * @return int
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Set 'high' value
     *
     * @param int $value
     */
    public function setHigh($value)
    {
        $this->high = $value;
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
        if ( ! isset($values['low'])) {
            throw new \InvalidArgumentException('Field "low" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['high'])) {
            throw new \InvalidArgumentException('Field "high" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setLow($values['low']);
        $message->setHigh($values['high']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'MessageRange',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'low',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'high',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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

        if ($this->low === null) {
            throw new \UnexpectedValueException('Field "\\SteamKit\\Base\\GC\\CSGO\\SteamMsgBase\\CMsgGCMsgSetOptions\\MessageRange#low" (tag 1) is required but has no value.');
        }

        if ($this->high === null) {
            throw new \UnexpectedValueException('Field "\\SteamKit\\Base\\GC\\CSGO\\SteamMsgBase\\CMsgGCMsgSetOptions\\MessageRange#high" (tag 2) is required but has no value.');
        }

        if ($this->low !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->low);
        }

        if ($this->high !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->high);
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

                $this->low = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->high = $reader->readVarint($stream);

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

        if ($this->low !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->low);
        }

        if ($this->high !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->high);
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
        $this->low = null;
        $this->high = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCMsgSetOptions\MessageRange) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->low = ($message->low !== null) ? $message->low : $this->low;
        $this->high = ($message->high !== null) ? $message->high : $this->high;
    }


}

