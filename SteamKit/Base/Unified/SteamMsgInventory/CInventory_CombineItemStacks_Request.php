<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_inventory.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgInventory;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgInventory.CInventory_CombineItemStacks_Request
 */
class CInventory_CombineItemStacks_Request extends \Protobuf\AbstractMessage
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
     * fromitemid optional uint64 = 2
     *
     * @var int
     */
    protected $fromitemid = null;

    /**
     * destitemid optional uint64 = 3
     *
     * @var int
     */
    protected $destitemid = null;

    /**
     * quantity optional uint32 = 4
     *
     * @var int
     */
    protected $quantity = null;

    /**
     * fromtimestamp optional string = 5
     *
     * @var string
     */
    protected $fromtimestamp = null;

    /**
     * desttimestamp optional string = 6
     *
     * @var string
     */
    protected $desttimestamp = null;

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
     * Check if 'fromitemid' has a value
     *
     * @return bool
     */
    public function hasFromitemid()
    {
        return $this->fromitemid !== null;
    }

    /**
     * Get 'fromitemid' value
     *
     * @return int
     */
    public function getFromitemid()
    {
        return $this->fromitemid;
    }

    /**
     * Set 'fromitemid' value
     *
     * @param int $value
     */
    public function setFromitemid($value = null)
    {
        $this->fromitemid = $value;
    }

    /**
     * Check if 'destitemid' has a value
     *
     * @return bool
     */
    public function hasDestitemid()
    {
        return $this->destitemid !== null;
    }

    /**
     * Get 'destitemid' value
     *
     * @return int
     */
    public function getDestitemid()
    {
        return $this->destitemid;
    }

    /**
     * Set 'destitemid' value
     *
     * @param int $value
     */
    public function setDestitemid($value = null)
    {
        $this->destitemid = $value;
    }

    /**
     * Check if 'quantity' has a value
     *
     * @return bool
     */
    public function hasQuantity()
    {
        return $this->quantity !== null;
    }

    /**
     * Get 'quantity' value
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set 'quantity' value
     *
     * @param int $value
     */
    public function setQuantity($value = null)
    {
        $this->quantity = $value;
    }

    /**
     * Check if 'fromtimestamp' has a value
     *
     * @return bool
     */
    public function hasFromtimestamp()
    {
        return $this->fromtimestamp !== null;
    }

    /**
     * Get 'fromtimestamp' value
     *
     * @return string
     */
    public function getFromtimestamp()
    {
        return $this->fromtimestamp;
    }

    /**
     * Set 'fromtimestamp' value
     *
     * @param string $value
     */
    public function setFromtimestamp($value = null)
    {
        $this->fromtimestamp = $value;
    }

    /**
     * Check if 'desttimestamp' has a value
     *
     * @return bool
     */
    public function hasDesttimestamp()
    {
        return $this->desttimestamp !== null;
    }

    /**
     * Get 'desttimestamp' value
     *
     * @return string
     */
    public function getDesttimestamp()
    {
        return $this->desttimestamp;
    }

    /**
     * Set 'desttimestamp' value
     *
     * @param string $value
     */
    public function setDesttimestamp($value = null)
    {
        $this->desttimestamp = $value;
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
            'fromitemid' => null,
            'destitemid' => null,
            'quantity' => null,
            'fromtimestamp' => null,
            'desttimestamp' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setFromitemid($values['fromitemid']);
        $message->setDestitemid($values['destitemid']);
        $message->setQuantity($values['quantity']);
        $message->setFromtimestamp($values['fromtimestamp']);
        $message->setDesttimestamp($values['desttimestamp']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CInventory_CombineItemStacks_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'fromitemid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'destitemid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'quantity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'fromtimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'desttimestamp',
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->fromitemid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->fromitemid);
        }

        if ($this->destitemid !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->destitemid);
        }

        if ($this->quantity !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->quantity);
        }

        if ($this->fromtimestamp !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->fromtimestamp);
        }

        if ($this->desttimestamp !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->desttimestamp);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->fromitemid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->destitemid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->quantity = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->fromtimestamp = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->desttimestamp = $reader->readString($stream);

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

        if ($this->fromitemid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->fromitemid);
        }

        if ($this->destitemid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->destitemid);
        }

        if ($this->quantity !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quantity);
        }

        if ($this->fromtimestamp !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->fromtimestamp);
        }

        if ($this->desttimestamp !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->desttimestamp);
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
        $this->fromitemid = null;
        $this->destitemid = null;
        $this->quantity = null;
        $this->fromtimestamp = null;
        $this->desttimestamp = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgInventory\CInventory_CombineItemStacks_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->fromitemid = ($message->fromitemid !== null) ? $message->fromitemid : $this->fromitemid;
        $this->destitemid = ($message->destitemid !== null) ? $message->destitemid : $this->destitemid;
        $this->quantity = ($message->quantity !== null) ? $message->quantity : $this->quantity;
        $this->fromtimestamp = ($message->fromtimestamp !== null) ? $message->fromtimestamp : $this->fromtimestamp;
        $this->desttimestamp = ($message->desttimestamp !== null) ? $message->desttimestamp : $this->desttimestamp;
    }


}

