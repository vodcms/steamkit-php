<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : dod/htmlmessages.proto
 */


namespace SteamKit\Base\GC\DOD\HTMLMessages;

/**
 * Protobuf message : SteamKit.Base.GC.DOD.HTMLMessages.CMsgFileLoadDialog
 */
class CMsgFileLoadDialog extends \Protobuf\AbstractMessage
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
     * browser_handle optional uint32 = 1
     *
     * @var int
     */
    protected $browser_handle = null;

    /**
     * title optional string = 2
     *
     * @var string
     */
    protected $title = null;

    /**
     * initialFile optional string = 3
     *
     * @var string
     */
    protected $initialFile = null;

    /**
     * Check if 'browser_handle' has a value
     *
     * @return bool
     */
    public function hasBrowserHandle()
    {
        return $this->browser_handle !== null;
    }

    /**
     * Get 'browser_handle' value
     *
     * @return int
     */
    public function getBrowserHandle()
    {
        return $this->browser_handle;
    }

    /**
     * Set 'browser_handle' value
     *
     * @param int $value
     */
    public function setBrowserHandle($value = null)
    {
        $this->browser_handle = $value;
    }

    /**
     * Check if 'title' has a value
     *
     * @return bool
     */
    public function hasTitle()
    {
        return $this->title !== null;
    }

    /**
     * Get 'title' value
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set 'title' value
     *
     * @param string $value
     */
    public function setTitle($value = null)
    {
        $this->title = $value;
    }

    /**
     * Check if 'initialFile' has a value
     *
     * @return bool
     */
    public function hasInitialFile()
    {
        return $this->initialFile !== null;
    }

    /**
     * Get 'initialFile' value
     *
     * @return string
     */
    public function getInitialFile()
    {
        return $this->initialFile;
    }

    /**
     * Set 'initialFile' value
     *
     * @param string $value
     */
    public function setInitialFile($value = null)
    {
        $this->initialFile = $value;
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
            'browser_handle' => null,
            'title' => null,
            'initialFile' => null
        ], $values);

        $message->setBrowserHandle($values['browser_handle']);
        $message->setTitle($values['title']);
        $message->setInitialFile($values['initialFile']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgFileLoadDialog',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'browser_handle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'title',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'initialFile',
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

        if ($this->browser_handle !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->browser_handle);
        }

        if ($this->title !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->title);
        }

        if ($this->initialFile !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->initialFile);
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

                $this->browser_handle = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->title = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->initialFile = $reader->readString($stream);

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

        if ($this->browser_handle !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->browser_handle);
        }

        if ($this->title !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->title);
        }

        if ($this->initialFile !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->initialFile);
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
        $this->browser_handle = null;
        $this->title = null;
        $this->initialFile = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\DOD\HTMLMessages\CMsgFileLoadDialog) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->browser_handle = ($message->browser_handle !== null) ? $message->browser_handle : $this->browser_handle;
        $this->title = ($message->title !== null) ? $message->title : $this->title;
        $this->initialFile = ($message->initialFile !== null) ? $message->initialFile : $this->initialFile;
    }


}

