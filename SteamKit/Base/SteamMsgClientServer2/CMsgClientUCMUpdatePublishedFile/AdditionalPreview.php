<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMUpdatePublishedFile;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMUpdatePublishedFile.AdditionalPreview
 */
class AdditionalPreview extends \Protobuf\AbstractMessage
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
     * original_file_name optional string = 1
     *
     * @var string
     */
    protected $original_file_name = null;

    /**
     * internal_file_name optional string = 2
     *
     * @var string
     */
    protected $internal_file_name = null;

    /**
     * videoid optional string = 3
     *
     * @var string
     */
    protected $videoid = null;

    /**
     * preview_type optional uint32 = 4
     *
     * @var int
     */
    protected $preview_type = null;

    /**
     * update_index optional int32 = 5
     *
     * @var int
     */
    protected $update_index = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->update_index = '-1';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'original_file_name' has a value
     *
     * @return bool
     */
    public function hasOriginalFileName()
    {
        return $this->original_file_name !== null;
    }

    /**
     * Get 'original_file_name' value
     *
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->original_file_name;
    }

    /**
     * Set 'original_file_name' value
     *
     * @param string $value
     */
    public function setOriginalFileName($value = null)
    {
        $this->original_file_name = $value;
    }

    /**
     * Check if 'internal_file_name' has a value
     *
     * @return bool
     */
    public function hasInternalFileName()
    {
        return $this->internal_file_name !== null;
    }

    /**
     * Get 'internal_file_name' value
     *
     * @return string
     */
    public function getInternalFileName()
    {
        return $this->internal_file_name;
    }

    /**
     * Set 'internal_file_name' value
     *
     * @param string $value
     */
    public function setInternalFileName($value = null)
    {
        $this->internal_file_name = $value;
    }

    /**
     * Check if 'videoid' has a value
     *
     * @return bool
     */
    public function hasVideoid()
    {
        return $this->videoid !== null;
    }

    /**
     * Get 'videoid' value
     *
     * @return string
     */
    public function getVideoid()
    {
        return $this->videoid;
    }

    /**
     * Set 'videoid' value
     *
     * @param string $value
     */
    public function setVideoid($value = null)
    {
        $this->videoid = $value;
    }

    /**
     * Check if 'preview_type' has a value
     *
     * @return bool
     */
    public function hasPreviewType()
    {
        return $this->preview_type !== null;
    }

    /**
     * Get 'preview_type' value
     *
     * @return int
     */
    public function getPreviewType()
    {
        return $this->preview_type;
    }

    /**
     * Set 'preview_type' value
     *
     * @param int $value
     */
    public function setPreviewType($value = null)
    {
        $this->preview_type = $value;
    }

    /**
     * Check if 'update_index' has a value
     *
     * @return bool
     */
    public function hasUpdateIndex()
    {
        return $this->update_index !== null;
    }

    /**
     * Get 'update_index' value
     *
     * @return int
     */
    public function getUpdateIndex()
    {
        return $this->update_index;
    }

    /**
     * Set 'update_index' value
     *
     * @param int $value
     */
    public function setUpdateIndex($value = null)
    {
        $this->update_index = $value;
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
            'original_file_name' => null,
            'internal_file_name' => null,
            'videoid' => null,
            'preview_type' => null,
            'update_index' => '-1'
        ], $values);

        $message->setOriginalFileName($values['original_file_name']);
        $message->setInternalFileName($values['internal_file_name']);
        $message->setVideoid($values['videoid']);
        $message->setPreviewType($values['preview_type']);
        $message->setUpdateIndex($values['update_index']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AdditionalPreview',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'original_file_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'internal_file_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'videoid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'preview_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'update_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '-1'
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

        if ($this->original_file_name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->original_file_name);
        }

        if ($this->internal_file_name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->internal_file_name);
        }

        if ($this->videoid !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->videoid);
        }

        if ($this->preview_type !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->preview_type);
        }

        if ($this->update_index !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->update_index);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->original_file_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->internal_file_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->videoid = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->preview_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->update_index = $reader->readVarint($stream);

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

        if ($this->original_file_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->original_file_name);
        }

        if ($this->internal_file_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->internal_file_name);
        }

        if ($this->videoid !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->videoid);
        }

        if ($this->preview_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->preview_type);
        }

        if ($this->update_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->update_index);
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
        $this->original_file_name = null;
        $this->internal_file_name = null;
        $this->videoid = null;
        $this->preview_type = null;
        $this->update_index = '-1';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMUpdatePublishedFile\AdditionalPreview) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->original_file_name = ($message->original_file_name !== null) ? $message->original_file_name : $this->original_file_name;
        $this->internal_file_name = ($message->internal_file_name !== null) ? $message->internal_file_name : $this->internal_file_name;
        $this->videoid = ($message->videoid !== null) ? $message->videoid : $this->videoid;
        $this->preview_type = ($message->preview_type !== null) ? $message->preview_type : $this->preview_type;
        $this->update_index = ($message->update_index !== null) ? $message->update_index : $this->update_index;
    }


}

