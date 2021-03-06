<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CSOItemCriteriaCondition
 */
class CSOItemCriteriaCondition extends \Protobuf\AbstractMessage
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
     * op optional int32 = 1
     *
     * @var int
     */
    protected $op = null;

    /**
     * field optional string = 2
     *
     * @var string
     */
    protected $field = null;

    /**
     * required optional bool = 3
     *
     * @var bool
     */
    protected $required = null;

    /**
     * float_value optional float = 4
     *
     * @var float
     */
    protected $float_value = null;

    /**
     * string_value optional string = 5
     *
     * @var string
     */
    protected $string_value = null;

    /**
     * Check if 'op' has a value
     *
     * @return bool
     */
    public function hasOp()
    {
        return $this->op !== null;
    }

    /**
     * Get 'op' value
     *
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Set 'op' value
     *
     * @param int $value
     */
    public function setOp($value = null)
    {
        $this->op = $value;
    }

    /**
     * Check if 'field' has a value
     *
     * @return bool
     */
    public function hasField()
    {
        return $this->field !== null;
    }

    /**
     * Get 'field' value
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set 'field' value
     *
     * @param string $value
     */
    public function setField($value = null)
    {
        $this->field = $value;
    }

    /**
     * Check if 'required' has a value
     *
     * @return bool
     */
    public function hasRequired()
    {
        return $this->required !== null;
    }

    /**
     * Get 'required' value
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set 'required' value
     *
     * @param bool $value
     */
    public function setRequired($value = null)
    {
        $this->required = $value;
    }

    /**
     * Check if 'float_value' has a value
     *
     * @return bool
     */
    public function hasFloatValue()
    {
        return $this->float_value !== null;
    }

    /**
     * Get 'float_value' value
     *
     * @return float
     */
    public function getFloatValue()
    {
        return $this->float_value;
    }

    /**
     * Set 'float_value' value
     *
     * @param float $value
     */
    public function setFloatValue($value = null)
    {
        $this->float_value = $value;
    }

    /**
     * Check if 'string_value' has a value
     *
     * @return bool
     */
    public function hasStringValue()
    {
        return $this->string_value !== null;
    }

    /**
     * Get 'string_value' value
     *
     * @return string
     */
    public function getStringValue()
    {
        return $this->string_value;
    }

    /**
     * Set 'string_value' value
     *
     * @param string $value
     */
    public function setStringValue($value = null)
    {
        $this->string_value = $value;
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
            'op' => null,
            'field' => null,
            'required' => null,
            'float_value' => null,
            'string_value' => null
        ], $values);

        $message->setOp($values['op']);
        $message->setField($values['field']);
        $message->setRequired($values['required']);
        $message->setFloatValue($values['float_value']);
        $message->setStringValue($values['string_value']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CSOItemCriteriaCondition',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'op',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'required',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'float_value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'string_value',
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

        if ($this->op !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->op);
        }

        if ($this->field !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->field);
        }

        if ($this->required !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->required);
        }

        if ($this->float_value !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->float_value);
        }

        if ($this->string_value !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->string_value);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->op = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->field = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->required = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->float_value = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->string_value = $reader->readString($stream);

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

        if ($this->op !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->op);
        }

        if ($this->field !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->field);
        }

        if ($this->required !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->float_value !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->string_value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->string_value);
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
        $this->op = null;
        $this->field = null;
        $this->required = null;
        $this->float_value = null;
        $this->string_value = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOItemCriteriaCondition) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->op = ($message->op !== null) ? $message->op : $this->op;
        $this->field = ($message->field !== null) ? $message->field : $this->field;
        $this->required = ($message->required !== null) ? $message->required : $this->required;
        $this->float_value = ($message->float_value !== null) ? $message->float_value : $this->float_value;
        $this->string_value = ($message->string_value !== null) ? $message->string_value : $this->string_value;
    }


}

