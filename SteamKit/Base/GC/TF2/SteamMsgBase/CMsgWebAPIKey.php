<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.TF2.SteamMsgBase.CMsgWebAPIKey
 */
class CMsgWebAPIKey extends \Protobuf\AbstractMessage
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
     * status optional uint32 = 1
     *
     * @var int
     */
    protected $status = null;

    /**
     * account_id optional uint32 = 2
     *
     * @var int
     */
    protected $account_id = null;

    /**
     * publisher_group_id optional uint32 = 3
     *
     * @var int
     */
    protected $publisher_group_id = null;

    /**
     * key_id optional uint32 = 4
     *
     * @var int
     */
    protected $key_id = null;

    /**
     * domain optional string = 5
     *
     * @var string
     */
    protected $domain = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->status = '255';
        $this->account_id = '0';
        $this->publisher_group_id = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param int $value
     */
    public function setStatus($value = null)
    {
        $this->status = $value;
    }

    /**
     * Check if 'account_id' has a value
     *
     * @return bool
     */
    public function hasAccountId()
    {
        return $this->account_id !== null;
    }

    /**
     * Get 'account_id' value
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set 'account_id' value
     *
     * @param int $value
     */
    public function setAccountId($value = null)
    {
        $this->account_id = $value;
    }

    /**
     * Check if 'publisher_group_id' has a value
     *
     * @return bool
     */
    public function hasPublisherGroupId()
    {
        return $this->publisher_group_id !== null;
    }

    /**
     * Get 'publisher_group_id' value
     *
     * @return int
     */
    public function getPublisherGroupId()
    {
        return $this->publisher_group_id;
    }

    /**
     * Set 'publisher_group_id' value
     *
     * @param int $value
     */
    public function setPublisherGroupId($value = null)
    {
        $this->publisher_group_id = $value;
    }

    /**
     * Check if 'key_id' has a value
     *
     * @return bool
     */
    public function hasKeyId()
    {
        return $this->key_id !== null;
    }

    /**
     * Get 'key_id' value
     *
     * @return int
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Set 'key_id' value
     *
     * @param int $value
     */
    public function setKeyId($value = null)
    {
        $this->key_id = $value;
    }

    /**
     * Check if 'domain' has a value
     *
     * @return bool
     */
    public function hasDomain()
    {
        return $this->domain !== null;
    }

    /**
     * Get 'domain' value
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set 'domain' value
     *
     * @param string $value
     */
    public function setDomain($value = null)
    {
        $this->domain = $value;
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
            'status' => '255',
            'account_id' => '0',
            'publisher_group_id' => '0',
            'key_id' => null,
            'domain' => null
        ], $values);

        $message->setStatus($values['status']);
        $message->setAccountId($values['account_id']);
        $message->setPublisherGroupId($values['publisher_group_id']);
        $message->setKeyId($values['key_id']);
        $message->setDomain($values['domain']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgWebAPIKey',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '255'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'publisher_group_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'key_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'domain',
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

        if ($this->status !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->status);
        }

        if ($this->account_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->account_id);
        }

        if ($this->publisher_group_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->publisher_group_id);
        }

        if ($this->key_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->key_id);
        }

        if ($this->domain !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->domain);
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

                $this->status = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->account_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->publisher_group_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->key_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->domain = $reader->readString($stream);

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

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status);
        }

        if ($this->account_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->account_id);
        }

        if ($this->publisher_group_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->publisher_group_id);
        }

        if ($this->key_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->key_id);
        }

        if ($this->domain !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain);
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
        $this->status = '255';
        $this->account_id = '0';
        $this->publisher_group_id = '0';
        $this->key_id = null;
        $this->domain = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgWebAPIKey) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->account_id = ($message->account_id !== null) ? $message->account_id : $this->account_id;
        $this->publisher_group_id = ($message->publisher_group_id !== null) ? $message->publisher_group_id : $this->publisher_group_id;
        $this->key_id = ($message->key_id !== null) ? $message->key_id : $this->key_id;
        $this->domain = ($message->domain !== null) ? $message->domain : $this->domain;
    }


}

