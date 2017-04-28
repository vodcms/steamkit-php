<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgBase.CGCMsgSystemStatsSchema
 */
class CGCMsgSystemStatsSchema extends \Protobuf\AbstractMessage
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
     * gc_app_id optional uint32 = 1
     *
     * @var int
     */
    protected $gc_app_id = null;

    /**
     * schema_kv optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $schema_kv = null;

    /**
     * Check if 'gc_app_id' has a value
     *
     * @return bool
     */
    public function hasGcAppId()
    {
        return $this->gc_app_id !== null;
    }

    /**
     * Get 'gc_app_id' value
     *
     * @return int
     */
    public function getGcAppId()
    {
        return $this->gc_app_id;
    }

    /**
     * Set 'gc_app_id' value
     *
     * @param int $value
     */
    public function setGcAppId($value = null)
    {
        $this->gc_app_id = $value;
    }

    /**
     * Check if 'schema_kv' has a value
     *
     * @return bool
     */
    public function hasSchemaKv()
    {
        return $this->schema_kv !== null;
    }

    /**
     * Get 'schema_kv' value
     *
     * @return \Protobuf\Stream
     */
    public function getSchemaKv()
    {
        return $this->schema_kv;
    }

    /**
     * Set 'schema_kv' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSchemaKv($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->schema_kv = $value;
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
            'gc_app_id' => null,
            'schema_kv' => null
        ], $values);

        $message->setGcAppId($values['gc_app_id']);
        $message->setSchemaKv($values['schema_kv']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CGCMsgSystemStatsSchema',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'gc_app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'schema_kv',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->gc_app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->gc_app_id);
        }

        if ($this->schema_kv !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->schema_kv);
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

                $this->gc_app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->schema_kv = $reader->readByteStream($stream);

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

        if ($this->gc_app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gc_app_id);
        }

        if ($this->schema_kv !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->schema_kv);
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
        $this->gc_app_id = null;
        $this->schema_kv = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CGCMsgSystemStatsSchema) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->gc_app_id = ($message->gc_app_id !== null) ? $message->gc_app_id : $this->gc_app_id;
        $this->schema_kv = ($message->schema_kv !== null) ? $message->schema_kv : $this->schema_kv;
    }


}

