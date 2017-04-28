<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_broadcast.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgBroadcast;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgBroadcast.CBroadcast_GetBroadcastChatUserNames_Response
 */
class CBroadcast_GetBroadcastChatUserNames_Response extends \Protobuf\AbstractMessage
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
     * persona_names repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName>
     */
    protected $persona_names = null;

    /**
     * Check if 'persona_names' has a value
     *
     * @return bool
     */
    public function hasPersonaNamesList()
    {
        return $this->persona_names !== null;
    }

    /**
     * Get 'persona_names' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName>
     */
    public function getPersonaNamesList()
    {
        return $this->persona_names;
    }

    /**
     * Set 'persona_names' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName> $value
     */
    public function setPersonaNamesList(\Protobuf\Collection $value = null)
    {
        $this->persona_names = $value;
    }

    /**
     * Add a new element to 'persona_names'
     *
     * @param
     * \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName
     * $value
     */
    public function addPersonaNames(\SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName $value)
    {
        if ($this->persona_names === null) {
            $this->persona_names = new \Protobuf\MessageCollection();
        }

        $this->persona_names->add($value);
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
            'persona_names' => []
        ], $values);

        foreach ($values['persona_names'] as $item) {
            $message->addPersonaNames($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CBroadcast_GetBroadcastChatUserNames_Response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'persona_names',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgBroadcast.CBroadcast_GetBroadcastChatUserNames_Response.PersonaName'
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

        if ($this->persona_names !== null) {
            foreach ($this->persona_names as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response\PersonaName();

                if ($this->persona_names === null) {
                    $this->persona_names = new \Protobuf\MessageCollection();
                }

                $this->persona_names->add($innerMessage);

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

        if ($this->persona_names !== null) {
            foreach ($this->persona_names as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->persona_names = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatUserNames_Response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->persona_names = ($message->persona_names !== null) ? $message->persona_names : $this->persona_names;
    }


}

