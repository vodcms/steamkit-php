<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.TF2.SteamMsgBase.CMsgAMFindAccounts
 */
class CMsgAMFindAccounts extends \Protobuf\AbstractMessage
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
     * search_type optional uint32 = 1
     *
     * @var int
     */
    protected $search_type = null;

    /**
     * search_string optional string = 2
     *
     * @var string
     */
    protected $search_string = null;

    /**
     * Check if 'search_type' has a value
     *
     * @return bool
     */
    public function hasSearchType()
    {
        return $this->search_type !== null;
    }

    /**
     * Get 'search_type' value
     *
     * @return int
     */
    public function getSearchType()
    {
        return $this->search_type;
    }

    /**
     * Set 'search_type' value
     *
     * @param int $value
     */
    public function setSearchType($value = null)
    {
        $this->search_type = $value;
    }

    /**
     * Check if 'search_string' has a value
     *
     * @return bool
     */
    public function hasSearchString()
    {
        return $this->search_string !== null;
    }

    /**
     * Get 'search_string' value
     *
     * @return string
     */
    public function getSearchString()
    {
        return $this->search_string;
    }

    /**
     * Set 'search_string' value
     *
     * @param string $value
     */
    public function setSearchString($value = null)
    {
        $this->search_string = $value;
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
            'search_type' => null,
            'search_string' => null
        ], $values);

        $message->setSearchType($values['search_type']);
        $message->setSearchString($values['search_string']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgAMFindAccounts',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'search_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'search_string',
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

        if ($this->search_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->search_type);
        }

        if ($this->search_string !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->search_string);
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

                $this->search_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->search_string = $reader->readString($stream);

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

        if ($this->search_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->search_type);
        }

        if ($this->search_string !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->search_string);
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
        $this->search_type = null;
        $this->search_string = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgAMFindAccounts) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->search_type = ($message->search_type !== null) ? $message->search_type : $this->search_type;
        $this->search_string = ($message->search_string !== null) ? $message->search_string : $this->search_string;
    }


}

