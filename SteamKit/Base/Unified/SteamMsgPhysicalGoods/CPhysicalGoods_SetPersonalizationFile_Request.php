<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_physicalgoods.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPhysicalGoods;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPhysicalGoods.CPhysicalGoods_SetPersonalizationFile_Request
 */
class CPhysicalGoods_SetPersonalizationFile_Request extends \Protobuf\AbstractMessage
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
     * serial_number optional string = 1
     *
     * @var string
     */
    protected $serial_number = null;

    /**
     * publishedfileid optional uint64 = 2
     *
     * @var int
     */
    protected $publishedfileid = null;

    /**
     * accountid optional uint32 = 3
     *
     * @var int
     */
    protected $accountid = null;

    /**
     * Check if 'serial_number' has a value
     *
     * @return bool
     */
    public function hasSerialNumber()
    {
        return $this->serial_number !== null;
    }

    /**
     * Get 'serial_number' value
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * Set 'serial_number' value
     *
     * @param string $value
     */
    public function setSerialNumber($value = null)
    {
        $this->serial_number = $value;
    }

    /**
     * Check if 'publishedfileid' has a value
     *
     * @return bool
     */
    public function hasPublishedfileid()
    {
        return $this->publishedfileid !== null;
    }

    /**
     * Get 'publishedfileid' value
     *
     * @return int
     */
    public function getPublishedfileid()
    {
        return $this->publishedfileid;
    }

    /**
     * Set 'publishedfileid' value
     *
     * @param int $value
     */
    public function setPublishedfileid($value = null)
    {
        $this->publishedfileid = $value;
    }

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
            'serial_number' => null,
            'publishedfileid' => null,
            'accountid' => null
        ], $values);

        $message->setSerialNumber($values['serial_number']);
        $message->setPublishedfileid($values['publishedfileid']);
        $message->setAccountid($values['accountid']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CPhysicalGoods_SetPersonalizationFile_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'serial_number',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'publishedfileid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'accountid',
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

        if ($this->serial_number !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->serial_number);
        }

        if ($this->publishedfileid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->publishedfileid);
        }

        if ($this->accountid !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->accountid);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->serial_number = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->publishedfileid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->accountid = $reader->readVarint($stream);

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

        if ($this->serial_number !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->serial_number);
        }

        if ($this->publishedfileid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->publishedfileid);
        }

        if ($this->accountid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->accountid);
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
        $this->serial_number = null;
        $this->publishedfileid = null;
        $this->accountid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPhysicalGoods\CPhysicalGoods_SetPersonalizationFile_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->serial_number = ($message->serial_number !== null) ? $message->serial_number : $this->serial_number;
        $this->publishedfileid = ($message->publishedfileid !== null) ? $message->publishedfileid : $this->publishedfileid;
        $this->accountid = ($message->accountid !== null) ? $message->accountid : $this->accountid;
    }


}

