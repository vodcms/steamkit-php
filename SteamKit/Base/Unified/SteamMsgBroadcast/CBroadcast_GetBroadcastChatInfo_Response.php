<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_broadcast.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgBroadcast;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgBroadcast.CBroadcast_GetBroadcastChatInfo_Response
 */
class CBroadcast_GetBroadcastChatInfo_Response extends \Protobuf\AbstractMessage
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
     * chat_id optional fixed64 = 1
     *
     * @var int
     */
    protected $chat_id = null;

    /**
     * view_url optional string = 2
     *
     * @var string
     */
    protected $view_url = null;

    /**
     * view_url_template optional string = 3
     *
     * @var string
     */
    protected $view_url_template = null;

    /**
     * Check if 'chat_id' has a value
     *
     * @return bool
     */
    public function hasChatId()
    {
        return $this->chat_id !== null;
    }

    /**
     * Get 'chat_id' value
     *
     * @return int
     */
    public function getChatId()
    {
        return $this->chat_id;
    }

    /**
     * Set 'chat_id' value
     *
     * @param int $value
     */
    public function setChatId($value = null)
    {
        $this->chat_id = $value;
    }

    /**
     * Check if 'view_url' has a value
     *
     * @return bool
     */
    public function hasViewUrl()
    {
        return $this->view_url !== null;
    }

    /**
     * Get 'view_url' value
     *
     * @return string
     */
    public function getViewUrl()
    {
        return $this->view_url;
    }

    /**
     * Set 'view_url' value
     *
     * @param string $value
     */
    public function setViewUrl($value = null)
    {
        $this->view_url = $value;
    }

    /**
     * Check if 'view_url_template' has a value
     *
     * @return bool
     */
    public function hasViewUrlTemplate()
    {
        return $this->view_url_template !== null;
    }

    /**
     * Get 'view_url_template' value
     *
     * @return string
     */
    public function getViewUrlTemplate()
    {
        return $this->view_url_template;
    }

    /**
     * Set 'view_url_template' value
     *
     * @param string $value
     */
    public function setViewUrlTemplate($value = null)
    {
        $this->view_url_template = $value;
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
            'chat_id' => null,
            'view_url' => null,
            'view_url_template' => null
        ], $values);

        $message->setChatId($values['chat_id']);
        $message->setViewUrl($values['view_url']);
        $message->setViewUrlTemplate($values['view_url_template']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CBroadcast_GetBroadcastChatInfo_Response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'chat_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'view_url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'view_url_template',
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

        if ($this->chat_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->chat_id);
        }

        if ($this->view_url !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->view_url);
        }

        if ($this->view_url_template !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->view_url_template);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->chat_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->view_url = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->view_url_template = $reader->readString($stream);

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

        if ($this->chat_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->view_url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->view_url);
        }

        if ($this->view_url_template !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->view_url_template);
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
        $this->chat_id = null;
        $this->view_url = null;
        $this->view_url_template = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_GetBroadcastChatInfo_Response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->chat_id = ($message->chat_id !== null) ? $message->chat_id : $this->chat_id;
        $this->view_url = ($message->view_url !== null) ? $message->view_url : $this->view_url;
        $this->view_url_template = ($message->view_url_template !== null) ? $message->view_url_template : $this->view_url_template;
    }


}

