<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : cstrike_beta/steammessages.proto
 */


namespace SteamKit\Base\GC\CStrikeBeta\SteamMsgBase\CMsgAMGetUserGameStatsResponse;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CStrikeBeta.SteamMsgBase.CMsgAMGetUserGameStatsResponse.Stats
 */
class Stats extends \Protobuf\AbstractMessage
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
     * stat_id optional uint32 = 1
     *
     * @var int
     */
    protected $stat_id = null;

    /**
     * stat_value optional uint32 = 2
     *
     * @var int
     */
    protected $stat_value = null;

    /**
     * Check if 'stat_id' has a value
     *
     * @return bool
     */
    public function hasStatId()
    {
        return $this->stat_id !== null;
    }

    /**
     * Get 'stat_id' value
     *
     * @return int
     */
    public function getStatId()
    {
        return $this->stat_id;
    }

    /**
     * Set 'stat_id' value
     *
     * @param int $value
     */
    public function setStatId($value = null)
    {
        $this->stat_id = $value;
    }

    /**
     * Check if 'stat_value' has a value
     *
     * @return bool
     */
    public function hasStatValue()
    {
        return $this->stat_value !== null;
    }

    /**
     * Get 'stat_value' value
     *
     * @return int
     */
    public function getStatValue()
    {
        return $this->stat_value;
    }

    /**
     * Set 'stat_value' value
     *
     * @param int $value
     */
    public function setStatValue($value = null)
    {
        $this->stat_value = $value;
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
            'stat_id' => null,
            'stat_value' => null
        ], $values);

        $message->setStatId($values['stat_id']);
        $message->setStatValue($values['stat_value']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Stats',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'stat_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'stat_value',
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

        if ($this->stat_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->stat_id);
        }

        if ($this->stat_value !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->stat_value);
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

                $this->stat_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->stat_value = $reader->readVarint($stream);

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

        if ($this->stat_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->stat_id);
        }

        if ($this->stat_value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->stat_value);
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
        $this->stat_id = null;
        $this->stat_value = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CStrikeBeta\SteamMsgBase\CMsgAMGetUserGameStatsResponse\Stats) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->stat_id = ($message->stat_id !== null) ? $message->stat_id : $this->stat_id;
        $this->stat_value = ($message->stat_value !== null) ? $message->stat_value : $this->stat_value;
    }


}

