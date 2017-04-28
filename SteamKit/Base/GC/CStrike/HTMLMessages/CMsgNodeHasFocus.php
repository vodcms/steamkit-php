<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : cstrike/htmlmessages.proto
 */


namespace SteamKit\Base\GC\CStrike\HTMLMessages;

/**
 * Protobuf message : SteamKit.Base.GC.CStrike.HTMLMessages.CMsgNodeHasFocus
 */
class CMsgNodeHasFocus extends \Protobuf\AbstractMessage
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
     * bInput optional bool = 2
     *
     * @var bool
     */
    protected $bInput = null;

    /**
     * name optional string = 3
     *
     * @var string
     */
    protected $name = null;

    /**
     * elementtagname optional string = 4
     *
     * @var string
     */
    protected $elementtagname = null;

    /**
     * searchbuttontext optional string = 5
     *
     * @var string
     */
    protected $searchbuttontext = null;

    /**
     * bHasMultipleInputs optional bool = 6
     *
     * @var bool
     */
    protected $bHasMultipleInputs = null;

    /**
     * input_type optional string = 7
     *
     * @var string
     */
    protected $input_type = null;

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
     * Check if 'bInput' has a value
     *
     * @return bool
     */
    public function hasBInput()
    {
        return $this->bInput !== null;
    }

    /**
     * Get 'bInput' value
     *
     * @return bool
     */
    public function getBInput()
    {
        return $this->bInput;
    }

    /**
     * Set 'bInput' value
     *
     * @param bool $value
     */
    public function setBInput($value = null)
    {
        $this->bInput = $value;
    }

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'elementtagname' has a value
     *
     * @return bool
     */
    public function hasElementtagname()
    {
        return $this->elementtagname !== null;
    }

    /**
     * Get 'elementtagname' value
     *
     * @return string
     */
    public function getElementtagname()
    {
        return $this->elementtagname;
    }

    /**
     * Set 'elementtagname' value
     *
     * @param string $value
     */
    public function setElementtagname($value = null)
    {
        $this->elementtagname = $value;
    }

    /**
     * Check if 'searchbuttontext' has a value
     *
     * @return bool
     */
    public function hasSearchbuttontext()
    {
        return $this->searchbuttontext !== null;
    }

    /**
     * Get 'searchbuttontext' value
     *
     * @return string
     */
    public function getSearchbuttontext()
    {
        return $this->searchbuttontext;
    }

    /**
     * Set 'searchbuttontext' value
     *
     * @param string $value
     */
    public function setSearchbuttontext($value = null)
    {
        $this->searchbuttontext = $value;
    }

    /**
     * Check if 'bHasMultipleInputs' has a value
     *
     * @return bool
     */
    public function hasBHasMultipleInputs()
    {
        return $this->bHasMultipleInputs !== null;
    }

    /**
     * Get 'bHasMultipleInputs' value
     *
     * @return bool
     */
    public function getBHasMultipleInputs()
    {
        return $this->bHasMultipleInputs;
    }

    /**
     * Set 'bHasMultipleInputs' value
     *
     * @param bool $value
     */
    public function setBHasMultipleInputs($value = null)
    {
        $this->bHasMultipleInputs = $value;
    }

    /**
     * Check if 'input_type' has a value
     *
     * @return bool
     */
    public function hasInputType()
    {
        return $this->input_type !== null;
    }

    /**
     * Get 'input_type' value
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->input_type;
    }

    /**
     * Set 'input_type' value
     *
     * @param string $value
     */
    public function setInputType($value = null)
    {
        $this->input_type = $value;
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
            'bInput' => null,
            'name' => null,
            'elementtagname' => null,
            'searchbuttontext' => null,
            'bHasMultipleInputs' => null,
            'input_type' => null
        ], $values);

        $message->setBrowserHandle($values['browser_handle']);
        $message->setBInput($values['bInput']);
        $message->setName($values['name']);
        $message->setElementtagname($values['elementtagname']);
        $message->setSearchbuttontext($values['searchbuttontext']);
        $message->setBHasMultipleInputs($values['bHasMultipleInputs']);
        $message->setInputType($values['input_type']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgNodeHasFocus',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'browser_handle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'bInput',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'elementtagname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'searchbuttontext',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'bHasMultipleInputs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'input_type',
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

        if ($this->bInput !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->bInput);
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->name);
        }

        if ($this->elementtagname !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->elementtagname);
        }

        if ($this->searchbuttontext !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->searchbuttontext);
        }

        if ($this->bHasMultipleInputs !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->bHasMultipleInputs);
        }

        if ($this->input_type !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->input_type);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bInput = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->elementtagname = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->searchbuttontext = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bHasMultipleInputs = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->input_type = $reader->readString($stream);

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

        if ($this->bInput !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->elementtagname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->elementtagname);
        }

        if ($this->searchbuttontext !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->searchbuttontext);
        }

        if ($this->bHasMultipleInputs !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->input_type !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->input_type);
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
        $this->bInput = null;
        $this->name = null;
        $this->elementtagname = null;
        $this->searchbuttontext = null;
        $this->bHasMultipleInputs = null;
        $this->input_type = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CStrike\HTMLMessages\CMsgNodeHasFocus) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->browser_handle = ($message->browser_handle !== null) ? $message->browser_handle : $this->browser_handle;
        $this->bInput = ($message->bInput !== null) ? $message->bInput : $this->bInput;
        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->elementtagname = ($message->elementtagname !== null) ? $message->elementtagname : $this->elementtagname;
        $this->searchbuttontext = ($message->searchbuttontext !== null) ? $message->searchbuttontext : $this->searchbuttontext;
        $this->bHasMultipleInputs = ($message->bHasMultipleInputs !== null) ? $message->bHasMultipleInputs : $this->bHasMultipleInputs;
        $this->input_type = ($message->input_type !== null) ? $message->input_type : $this->input_type;
    }


}

