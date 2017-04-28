<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCMsgMasterSetWebAPIRouting;

/**
 * Protobuf message :
 * SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCMsgMasterSetWebAPIRouting.Entry
 */
class Entry extends \Protobuf\AbstractMessage
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
     * interface_name optional string = 1
     *
     * @var string
     */
    protected $interface_name = null;

    /**
     * method_name optional string = 2
     *
     * @var string
     */
    protected $method_name = null;

    /**
     * routing optional message = 3
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo
     */
    protected $routing = null;

    /**
     * Check if 'interface_name' has a value
     *
     * @return bool
     */
    public function hasInterfaceName()
    {
        return $this->interface_name !== null;
    }

    /**
     * Get 'interface_name' value
     *
     * @return string
     */
    public function getInterfaceName()
    {
        return $this->interface_name;
    }

    /**
     * Set 'interface_name' value
     *
     * @param string $value
     */
    public function setInterfaceName($value = null)
    {
        $this->interface_name = $value;
    }

    /**
     * Check if 'method_name' has a value
     *
     * @return bool
     */
    public function hasMethodName()
    {
        return $this->method_name !== null;
    }

    /**
     * Get 'method_name' value
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->method_name;
    }

    /**
     * Set 'method_name' value
     *
     * @param string $value
     */
    public function setMethodName($value = null)
    {
        $this->method_name = $value;
    }

    /**
     * Check if 'routing' has a value
     *
     * @return bool
     */
    public function hasRouting()
    {
        return $this->routing !== null;
    }

    /**
     * Get 'routing' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Set 'routing' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo $value
     */
    public function setRouting(\SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo $value = null)
    {
        $this->routing = $value;
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
            'interface_name' => null,
            'method_name' => null,
            'routing' => null
        ], $values);

        $message->setInterfaceName($values['interface_name']);
        $message->setMethodName($values['method_name']);
        $message->setRouting($values['routing']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Entry',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'interface_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'method_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'routing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCRoutingInfo'
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

        if ($this->interface_name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->interface_name);
        }

        if ($this->method_name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->method_name);
        }

        if ($this->routing !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->routing->serializedSize($sizeContext));
            $this->routing->writeTo($context);
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

                $this->interface_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->method_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo();

                $this->routing = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->interface_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->interface_name);
        }

        if ($this->method_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->method_name);
        }

        if ($this->routing !== null) {
            $innerSize = $this->routing->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->interface_name = null;
        $this->method_name = null;
        $this->routing = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCMsgMasterSetWebAPIRouting\Entry) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->interface_name = ($message->interface_name !== null) ? $message->interface_name : $this->interface_name;
        $this->method_name = ($message->method_name !== null) ? $message->method_name : $this->method_name;
        $this->routing = ($message->routing !== null) ? $message->routing : $this->routing;
    }


}

