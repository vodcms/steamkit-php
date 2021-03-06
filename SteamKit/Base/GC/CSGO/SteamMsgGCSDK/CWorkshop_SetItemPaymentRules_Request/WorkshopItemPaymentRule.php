<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/gcsdk_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CWorkshop_SetItemPaymentRules_Request;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgGCSDK.CWorkshop_SetItemPaymentRules_Request.WorkshopItemPaymentRule
 */
class WorkshopItemPaymentRule extends \Protobuf\AbstractMessage
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
     * workshop_file_id optional uint64 = 1
     *
     * @var int
     */
    protected $workshop_file_id = null;

    /**
     * revenue_percentage optional float = 2
     *
     * @var float
     */
    protected $revenue_percentage = null;

    /**
     * rule_description optional string = 3
     *
     * @var string
     */
    protected $rule_description = null;

    /**
     * Check if 'workshop_file_id' has a value
     *
     * @return bool
     */
    public function hasWorkshopFileId()
    {
        return $this->workshop_file_id !== null;
    }

    /**
     * Get 'workshop_file_id' value
     *
     * @return int
     */
    public function getWorkshopFileId()
    {
        return $this->workshop_file_id;
    }

    /**
     * Set 'workshop_file_id' value
     *
     * @param int $value
     */
    public function setWorkshopFileId($value = null)
    {
        $this->workshop_file_id = $value;
    }

    /**
     * Check if 'revenue_percentage' has a value
     *
     * @return bool
     */
    public function hasRevenuePercentage()
    {
        return $this->revenue_percentage !== null;
    }

    /**
     * Get 'revenue_percentage' value
     *
     * @return float
     */
    public function getRevenuePercentage()
    {
        return $this->revenue_percentage;
    }

    /**
     * Set 'revenue_percentage' value
     *
     * @param float $value
     */
    public function setRevenuePercentage($value = null)
    {
        $this->revenue_percentage = $value;
    }

    /**
     * Check if 'rule_description' has a value
     *
     * @return bool
     */
    public function hasRuleDescription()
    {
        return $this->rule_description !== null;
    }

    /**
     * Get 'rule_description' value
     *
     * @return string
     */
    public function getRuleDescription()
    {
        return $this->rule_description;
    }

    /**
     * Set 'rule_description' value
     *
     * @param string $value
     */
    public function setRuleDescription($value = null)
    {
        $this->rule_description = $value;
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
            'workshop_file_id' => null,
            'revenue_percentage' => null,
            'rule_description' => null
        ], $values);

        $message->setWorkshopFileId($values['workshop_file_id']);
        $message->setRevenuePercentage($values['revenue_percentage']);
        $message->setRuleDescription($values['rule_description']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'WorkshopItemPaymentRule',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'workshop_file_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'revenue_percentage',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'rule_description',
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

        if ($this->workshop_file_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->workshop_file_id);
        }

        if ($this->revenue_percentage !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFloat($stream, $this->revenue_percentage);
        }

        if ($this->rule_description !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->rule_description);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->workshop_file_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->revenue_percentage = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->rule_description = $reader->readString($stream);

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

        if ($this->workshop_file_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->workshop_file_id);
        }

        if ($this->revenue_percentage !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->rule_description !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->rule_description);
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
        $this->workshop_file_id = null;
        $this->revenue_percentage = null;
        $this->rule_description = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CWorkshop_SetItemPaymentRules_Request\WorkshopItemPaymentRule) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->workshop_file_id = ($message->workshop_file_id !== null) ? $message->workshop_file_id : $this->workshop_file_id;
        $this->revenue_percentage = ($message->revenue_percentage !== null) ? $message->revenue_percentage : $this->revenue_percentage;
        $this->rule_description = ($message->rule_description !== null) ? $message->rule_description : $this->rule_description;
    }


}

