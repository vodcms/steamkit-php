<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_gamenotifications.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgGameNotifications;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgGameNotifications.CGameNotifications_CreateSession_Request
 */
class CGameNotifications_CreateSession_Request extends \Protobuf\AbstractMessage
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
     * context optional uint64 = 2
     *
     * @var int
     */
    protected $context = null;

    /**
     * title optional message = 3
     *
     * @var \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_LocalizedText
     */
    protected $title = null;

    /**
     * users repeated message = 4
     *
     * @var \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus>
     */
    protected $users = null;

    /**
     * steamid optional fixed64 = 5
     *
     * @var int
     */
    protected $steamid = null;

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
     * Check if 'context' has a value
     *
     * @return bool
     */
    public function hasContext()
    {
        return $this->context !== null;
    }

    /**
     * Get 'context' value
     *
     * @return int
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set 'context' value
     *
     * @param int $value
     */
    public function setContext($value = null)
    {
        $this->context = $value;
    }

    /**
     * Check if 'title' has a value
     *
     * @return bool
     */
    public function hasTitle()
    {
        return $this->title !== null;
    }

    /**
     * Get 'title' value
     *
     * @return \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_LocalizedText
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set 'title' value
     *
     * @param \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_LocalizedText $value
     */
    public function setTitle(\SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_LocalizedText $value = null)
    {
        $this->title = $value;
    }

    /**
     * Check if 'users' has a value
     *
     * @return bool
     */
    public function hasUsersList()
    {
        return $this->users !== null;
    }

    /**
     * Get 'users' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus>
     */
    public function getUsersList()
    {
        return $this->users;
    }

    /**
     * Set 'users' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus> $value
     */
    public function setUsersList(\Protobuf\Collection $value = null)
    {
        $this->users = $value;
    }

    /**
     * Add a new element to 'users'
     *
     * @param
     * \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus
     * $value
     */
    public function addUsers(\SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus $value)
    {
        if ($this->users === null) {
            $this->users = new \Protobuf\MessageCollection();
        }

        $this->users->add($value);
    }

    /**
     * Check if 'steamid' has a value
     *
     * @return bool
     */
    public function hasSteamid()
    {
        return $this->steamid !== null;
    }

    /**
     * Get 'steamid' value
     *
     * @return int
     */
    public function getSteamid()
    {
        return $this->steamid;
    }

    /**
     * Set 'steamid' value
     *
     * @param int $value
     */
    public function setSteamid($value = null)
    {
        $this->steamid = $value;
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
            'context' => null,
            'title' => null,
            'users' => [],
            'steamid' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setContext($values['context']);
        $message->setTitle($values['title']);
        $message->setSteamid($values['steamid']);

        foreach ($values['users'] as $item) {
            $message->addUsers($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CGameNotifications_CreateSession_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'context',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'title',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgGameNotifications.CGameNotifications_LocalizedText'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'users',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgGameNotifications.CGameNotifications_UserStatus'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->context !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->context);
        }

        if ($this->title !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->title->serializedSize($sizeContext));
            $this->title->writeTo($context);
        }

        if ($this->users !== null) {
            foreach ($this->users as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->steamid !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeFixed64($stream, $this->steamid);
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

                $this->context = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_LocalizedText();

                $this->title = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_UserStatus();

                if ($this->users === null) {
                    $this->users = new \Protobuf\MessageCollection();
                }

                $this->users->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

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

        if ($this->context !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->context);
        }

        if ($this->title !== null) {
            $innerSize = $this->title->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->users !== null) {
            foreach ($this->users as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->steamid !== null) {
            $size += 1;
            $size += 8;
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
        $this->context = null;
        $this->title = null;
        $this->users = null;
        $this->steamid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgGameNotifications\CGameNotifications_CreateSession_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->context = ($message->context !== null) ? $message->context : $this->context;
        $this->title = ($message->title !== null) ? $message->title : $this->title;
        $this->users = ($message->users !== null) ? $message->users : $this->users;
        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
    }


}

