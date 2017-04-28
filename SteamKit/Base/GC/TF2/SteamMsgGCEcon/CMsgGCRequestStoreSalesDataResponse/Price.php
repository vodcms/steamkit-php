<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgGCRequestStoreSalesDataResponse.Price
 */
class Price extends \Protobuf\AbstractMessage
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
     * item_def optional uint32 = 1
     *
     * @var int
     */
    protected $item_def = null;

    /**
     * price optional uint32 = 2
     *
     * @var int
     */
    protected $price = null;

    /**
     * Check if 'item_def' has a value
     *
     * @return bool
     */
    public function hasItemDef()
    {
        return $this->item_def !== null;
    }

    /**
     * Get 'item_def' value
     *
     * @return int
     */
    public function getItemDef()
    {
        return $this->item_def;
    }

    /**
     * Set 'item_def' value
     *
     * @param int $value
     */
    public function setItemDef($value = null)
    {
        $this->item_def = $value;
    }

    /**
     * Check if 'price' has a value
     *
     * @return bool
     */
    public function hasPrice()
    {
        return $this->price !== null;
    }

    /**
     * Get 'price' value
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set 'price' value
     *
     * @param int $value
     */
    public function setPrice($value = null)
    {
        $this->price = $value;
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
            'item_def' => null,
            'price' => null
        ], $values);

        $message->setItemDef($values['item_def']);
        $message->setPrice($values['price']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Price',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'item_def',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'price',
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

        if ($this->item_def !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->item_def);
        }

        if ($this->price !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->price);
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

                $this->item_def = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->price = $reader->readVarint($stream);

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

        if ($this->item_def !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item_def);
        }

        if ($this->price !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->price);
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
        $this->item_def = null;
        $this->price = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item_def = ($message->item_def !== null) ? $message->item_def : $this->item_def;
        $this->price = ($message->price !== null) ? $message->price : $this->price;
    }


}

