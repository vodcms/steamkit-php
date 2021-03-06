<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_cloud.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCloud;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCloud.CCloud_EnumerateUserFiles_Request
 */
class CCloud_EnumerateUserFiles_Request extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * extended_details optional bool = 2
     *
     * @var bool
     */
    protected $extended_details = null;

    /**
     * count optional uint32 = 3
     *
     * @var int
     */
    protected $count = null;

    /**
     * start_index optional uint32 = 4
     *
     * @var int
     */
    protected $start_index = null;

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'extended_details' has a value
     *
     * @return bool
     */
    public function hasExtendedDetails()
    {
        return $this->extended_details !== null;
    }

    /**
     * Get 'extended_details' value
     *
     * @return bool
     */
    public function getExtendedDetails()
    {
        return $this->extended_details;
    }

    /**
     * Set 'extended_details' value
     *
     * @param bool $value
     */
    public function setExtendedDetails($value = null)
    {
        $this->extended_details = $value;
    }

    /**
     * Check if 'count' has a value
     *
     * @return bool
     */
    public function hasCount()
    {
        return $this->count !== null;
    }

    /**
     * Get 'count' value
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set 'count' value
     *
     * @param int $value
     */
    public function setCount($value = null)
    {
        $this->count = $value;
    }

    /**
     * Check if 'start_index' has a value
     *
     * @return bool
     */
    public function hasStartIndex()
    {
        return $this->start_index !== null;
    }

    /**
     * Get 'start_index' value
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->start_index;
    }

    /**
     * Set 'start_index' value
     *
     * @param int $value
     */
    public function setStartIndex($value = null)
    {
        $this->start_index = $value;
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
            'appid' => null,
            'extended_details' => null,
            'count' => null,
            'start_index' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setExtendedDetails($values['extended_details']);
        $message->setCount($values['count']);
        $message->setStartIndex($values['start_index']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCloud_EnumerateUserFiles_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'extended_details',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'start_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->extended_details !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->extended_details);
        }

        if ($this->count !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->count);
        }

        if ($this->start_index !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->start_index);
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

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->extended_details = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->start_index = $reader->readVarint($stream);

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->extended_details !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->count);
        }

        if ($this->start_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_index);
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
        $this->appid = null;
        $this->extended_details = null;
        $this->count = null;
        $this->start_index = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCloud\CCloud_EnumerateUserFiles_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->extended_details = ($message->extended_details !== null) ? $message->extended_details : $this->extended_details;
        $this->count = ($message->count !== null) ? $message->count : $this->count;
        $this->start_index = ($message->start_index !== null) ? $message->start_index : $this->start_index;
    }


}

