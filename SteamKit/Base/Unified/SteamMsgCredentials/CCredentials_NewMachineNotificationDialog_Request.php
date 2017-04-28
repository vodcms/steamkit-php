<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_credentials.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCredentials;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCredentials.CCredentials_NewMachineNotificationDialog_Request
 */
class CCredentials_NewMachineNotificationDialog_Request extends \Protobuf\AbstractMessage
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
     * is_approved optional bool = 1
     *
     * @var bool
     */
    protected $is_approved = null;

    /**
     * is_wizard_complete optional bool = 2
     *
     * @var bool
     */
    protected $is_wizard_complete = null;

    /**
     * Check if 'is_approved' has a value
     *
     * @return bool
     */
    public function hasIsApproved()
    {
        return $this->is_approved !== null;
    }

    /**
     * Get 'is_approved' value
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->is_approved;
    }

    /**
     * Set 'is_approved' value
     *
     * @param bool $value
     */
    public function setIsApproved($value = null)
    {
        $this->is_approved = $value;
    }

    /**
     * Check if 'is_wizard_complete' has a value
     *
     * @return bool
     */
    public function hasIsWizardComplete()
    {
        return $this->is_wizard_complete !== null;
    }

    /**
     * Get 'is_wizard_complete' value
     *
     * @return bool
     */
    public function getIsWizardComplete()
    {
        return $this->is_wizard_complete;
    }

    /**
     * Set 'is_wizard_complete' value
     *
     * @param bool $value
     */
    public function setIsWizardComplete($value = null)
    {
        $this->is_wizard_complete = $value;
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
            'is_approved' => null,
            'is_wizard_complete' => null
        ], $values);

        $message->setIsApproved($values['is_approved']);
        $message->setIsWizardComplete($values['is_wizard_complete']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCredentials_NewMachineNotificationDialog_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'is_approved',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'is_wizard_complete',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->is_approved !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->is_approved);
        }

        if ($this->is_wizard_complete !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->is_wizard_complete);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_approved = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_wizard_complete = $reader->readBool($stream);

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

        if ($this->is_approved !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_wizard_complete !== null) {
            $size += 1;
            $size += 1;
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
        $this->is_approved = null;
        $this->is_wizard_complete = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCredentials\CCredentials_NewMachineNotificationDialog_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->is_approved = ($message->is_approved !== null) ? $message->is_approved : $this->is_approved;
        $this->is_wizard_complete = ($message->is_wizard_complete !== null) ? $message->is_wizard_complete : $this->is_wizard_complete;
    }


}

