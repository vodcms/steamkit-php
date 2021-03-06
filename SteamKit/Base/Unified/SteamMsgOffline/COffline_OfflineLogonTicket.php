<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_offline.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgOffline;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgOffline.COffline_OfflineLogonTicket
 */
class COffline_OfflineLogonTicket extends \Protobuf\AbstractMessage
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
     * rtime32_creation_time optional fixed32 = 2
     *
     * @var int
     */
    protected $rtime32_creation_time = null;

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
     * Check if 'rtime32_creation_time' has a value
     *
     * @return bool
     */
    public function hasRtime32CreationTime()
    {
        return $this->rtime32_creation_time !== null;
    }

    /**
     * Get 'rtime32_creation_time' value
     *
     * @return int
     */
    public function getRtime32CreationTime()
    {
        return $this->rtime32_creation_time;
    }

    /**
     * Set 'rtime32_creation_time' value
     *
     * @param int $value
     */
    public function setRtime32CreationTime($value = null)
    {
        $this->rtime32_creation_time = $value;
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
            'rtime32_creation_time' => null
        ], $values);

        $message->setAccountid($values['accountid']);
        $message->setRtime32CreationTime($values['rtime32_creation_time']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'COffline_OfflineLogonTicket',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'accountid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'rtime32_creation_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
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

        if ($this->rtime32_creation_time !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFixed32($stream, $this->rtime32_creation_time);
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
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime32_creation_time = $reader->readFixed32($stream);

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

        if ($this->rtime32_creation_time !== null) {
            $size += 1;
            $size += 4;
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
        $this->rtime32_creation_time = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgOffline\COffline_OfflineLogonTicket) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->accountid = ($message->accountid !== null) ? $message->accountid : $this->accountid;
        $this->rtime32_creation_time = ($message->rtime32_creation_time !== null) ? $message->rtime32_creation_time : $this->rtime32_creation_time;
    }


}

