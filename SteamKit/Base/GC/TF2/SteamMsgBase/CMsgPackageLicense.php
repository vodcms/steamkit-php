<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.TF2.SteamMsgBase.CMsgPackageLicense
 */
class CMsgPackageLicense extends \Protobuf\AbstractMessage
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
     * package_id optional uint32 = 1
     *
     * @var int
     */
    protected $package_id = null;

    /**
     * time_created optional uint32 = 2
     *
     * @var int
     */
    protected $time_created = null;

    /**
     * owner_id optional uint32 = 3
     *
     * @var int
     */
    protected $owner_id = null;

    /**
     * Check if 'package_id' has a value
     *
     * @return bool
     */
    public function hasPackageId()
    {
        return $this->package_id !== null;
    }

    /**
     * Get 'package_id' value
     *
     * @return int
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * Set 'package_id' value
     *
     * @param int $value
     */
    public function setPackageId($value = null)
    {
        $this->package_id = $value;
    }

    /**
     * Check if 'time_created' has a value
     *
     * @return bool
     */
    public function hasTimeCreated()
    {
        return $this->time_created !== null;
    }

    /**
     * Get 'time_created' value
     *
     * @return int
     */
    public function getTimeCreated()
    {
        return $this->time_created;
    }

    /**
     * Set 'time_created' value
     *
     * @param int $value
     */
    public function setTimeCreated($value = null)
    {
        $this->time_created = $value;
    }

    /**
     * Check if 'owner_id' has a value
     *
     * @return bool
     */
    public function hasOwnerId()
    {
        return $this->owner_id !== null;
    }

    /**
     * Get 'owner_id' value
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Set 'owner_id' value
     *
     * @param int $value
     */
    public function setOwnerId($value = null)
    {
        $this->owner_id = $value;
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
            'package_id' => null,
            'time_created' => null,
            'owner_id' => null
        ], $values);

        $message->setPackageId($values['package_id']);
        $message->setTimeCreated($values['time_created']);
        $message->setOwnerId($values['owner_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgPackageLicense',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'package_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'time_created',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'owner_id',
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

        if ($this->package_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->package_id);
        }

        if ($this->time_created !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->time_created);
        }

        if ($this->owner_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->owner_id);
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

                $this->package_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->time_created = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->owner_id = $reader->readVarint($stream);

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

        if ($this->package_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->package_id);
        }

        if ($this->time_created !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_created);
        }

        if ($this->owner_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->owner_id);
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
        $this->package_id = null;
        $this->time_created = null;
        $this->owner_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgPackageLicense) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->package_id = ($message->package_id !== null) ? $message->package_id : $this->package_id;
        $this->time_created = ($message->time_created !== null) ? $message->time_created : $this->time_created;
        $this->owner_id = ($message->owner_id !== null) ? $message->owner_id : $this->owner_id;
    }


}

