<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgLookupMultipleAccountNamesResponse;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgLookupMultipleAccountNamesResponse.Account
 */
class Account extends \Protobuf\AbstractMessage
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
     * accountid optional uint32 = 1
     *
     * @var int
     */
    protected $accountid = null;

    /**
     * persona optional string = 2
     *
     * @var string
     */
    protected $persona = null;

    /**
     * Check if 'accountid' has a value
     *
     * @return bool
     */
    public function hasAccountid()
    {
        return $this->accountid !== null;
    }

    /**
     * Get 'accountid' value
     *
     * @return int
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set 'accountid' value
     *
     * @param int $value
     */
    public function setAccountid($value = null)
    {
        $this->accountid = $value;
    }

    /**
     * Check if 'persona' has a value
     *
     * @return bool
     */
    public function hasPersona()
    {
        return $this->persona !== null;
    }

    /**
     * Get 'persona' value
     *
     * @return string
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set 'persona' value
     *
     * @param string $value
     */
    public function setPersona($value = null)
    {
        $this->persona = $value;
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
            'accountid' => null,
            'persona' => null
        ], $values);

        $message->setAccountid($values['accountid']);
        $message->setPersona($values['persona']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Account',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'accountid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'persona',
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

        if ($this->accountid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->accountid);
        }

        if ($this->persona !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->persona);
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

                $this->accountid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->persona = $reader->readString($stream);

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

        if ($this->accountid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->accountid);
        }

        if ($this->persona !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->persona);
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
        $this->accountid = null;
        $this->persona = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgLookupMultipleAccountNamesResponse\Account) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->accountid = ($message->accountid !== null) ? $message->accountid : $this->accountid;
        $this->persona = ($message->persona !== null) ? $message->persona : $this->persona;
    }


}
