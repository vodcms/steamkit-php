<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCGetEmailTemplateResponse
 */
class CMsgGCGetEmailTemplateResponse extends \Protobuf\AbstractMessage
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
     * eresult optional uint32 = 1
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * template_exists optional bool = 2
     *
     * @var bool
     */
    protected $template_exists = null;

    /**
     * template optional string = 3
     *
     * @var string
     */
    protected $template = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->eresult = '2';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
    }

    /**
     * Check if 'template_exists' has a value
     *
     * @return bool
     */
    public function hasTemplateExists()
    {
        return $this->template_exists !== null;
    }

    /**
     * Get 'template_exists' value
     *
     * @return bool
     */
    public function getTemplateExists()
    {
        return $this->template_exists;
    }

    /**
     * Set 'template_exists' value
     *
     * @param bool $value
     */
    public function setTemplateExists($value = null)
    {
        $this->template_exists = $value;
    }

    /**
     * Check if 'template' has a value
     *
     * @return bool
     */
    public function hasTemplate()
    {
        return $this->template !== null;
    }

    /**
     * Get 'template' value
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set 'template' value
     *
     * @param string $value
     */
    public function setTemplate($value = null)
    {
        $this->template = $value;
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
            'eresult' => '2',
            'template_exists' => null,
            'template' => null
        ], $values);

        $message->setEresult($values['eresult']);
        $message->setTemplateExists($values['template_exists']);
        $message->setTemplate($values['template']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCGetEmailTemplateResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '2'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'template_exists',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'template',
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

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->template_exists !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->template_exists);
        }

        if ($this->template !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->template);
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

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->template_exists = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->template = $reader->readString($stream);

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

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->template_exists !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->template !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->template);
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
        $this->eresult = '2';
        $this->template_exists = null;
        $this->template = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCGetEmailTemplateResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->template_exists = ($message->template_exists !== null) ? $message->template_exists : $this->template_exists;
        $this->template = ($message->template !== null) ? $message->template : $this->template;
    }


}

