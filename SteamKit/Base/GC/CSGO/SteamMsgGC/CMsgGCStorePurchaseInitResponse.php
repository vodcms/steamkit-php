<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgGC.CMsgGCStorePurchaseInitResponse
 */
class CMsgGCStorePurchaseInitResponse extends \Protobuf\AbstractMessage
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
     * result optional int32 = 1
     *
     * @var int
     */
    protected $result = null;

    /**
     * txn_id optional uint64 = 2
     *
     * @var int
     */
    protected $txn_id = null;

    /**
     * Check if 'result' has a value
     *
     * @return bool
     */
    public function hasResult()
    {
        return $this->result !== null;
    }

    /**
     * Get 'result' value
     *
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param int $value
     */
    public function setResult($value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'txn_id' has a value
     *
     * @return bool
     */
    public function hasTxnId()
    {
        return $this->txn_id !== null;
    }

    /**
     * Get 'txn_id' value
     *
     * @return int
     */
    public function getTxnId()
    {
        return $this->txn_id;
    }

    /**
     * Set 'txn_id' value
     *
     * @param int $value
     */
    public function setTxnId($value = null)
    {
        $this->txn_id = $value;
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
            'result' => null,
            'txn_id' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setTxnId($values['txn_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCStorePurchaseInitResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'txn_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->result !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->result);
        }

        if ($this->txn_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->txn_id);
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

                $this->result = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->txn_id = $reader->readVarint($stream);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result);
        }

        if ($this->txn_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->txn_id);
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
        $this->result = null;
        $this->txn_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CMsgGCStorePurchaseInitResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->txn_id = ($message->txn_id !== null) ? $message->txn_id : $this->txn_id;
    }


}

