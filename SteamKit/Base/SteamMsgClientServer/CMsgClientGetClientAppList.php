<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientGetClientAppList
 */
class CMsgClientGetClientAppList extends \Protobuf\AbstractMessage
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
     * media optional bool = 1
     *
     * @var bool
     */
    protected $media = null;

    /**
     * tools optional bool = 2
     *
     * @var bool
     */
    protected $tools = null;

    /**
     * games optional bool = 3
     *
     * @var bool
     */
    protected $games = null;

    /**
     * only_installed optional bool = 4
     *
     * @var bool
     */
    protected $only_installed = null;

    /**
     * only_changing optional bool = 5
     *
     * @var bool
     */
    protected $only_changing = null;

    /**
     * Check if 'media' has a value
     *
     * @return bool
     */
    public function hasMedia()
    {
        return $this->media !== null;
    }

    /**
     * Get 'media' value
     *
     * @return bool
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set 'media' value
     *
     * @param bool $value
     */
    public function setMedia($value = null)
    {
        $this->media = $value;
    }

    /**
     * Check if 'tools' has a value
     *
     * @return bool
     */
    public function hasTools()
    {
        return $this->tools !== null;
    }

    /**
     * Get 'tools' value
     *
     * @return bool
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * Set 'tools' value
     *
     * @param bool $value
     */
    public function setTools($value = null)
    {
        $this->tools = $value;
    }

    /**
     * Check if 'games' has a value
     *
     * @return bool
     */
    public function hasGames()
    {
        return $this->games !== null;
    }

    /**
     * Get 'games' value
     *
     * @return bool
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * Set 'games' value
     *
     * @param bool $value
     */
    public function setGames($value = null)
    {
        $this->games = $value;
    }

    /**
     * Check if 'only_installed' has a value
     *
     * @return bool
     */
    public function hasOnlyInstalled()
    {
        return $this->only_installed !== null;
    }

    /**
     * Get 'only_installed' value
     *
     * @return bool
     */
    public function getOnlyInstalled()
    {
        return $this->only_installed;
    }

    /**
     * Set 'only_installed' value
     *
     * @param bool $value
     */
    public function setOnlyInstalled($value = null)
    {
        $this->only_installed = $value;
    }

    /**
     * Check if 'only_changing' has a value
     *
     * @return bool
     */
    public function hasOnlyChanging()
    {
        return $this->only_changing !== null;
    }

    /**
     * Get 'only_changing' value
     *
     * @return bool
     */
    public function getOnlyChanging()
    {
        return $this->only_changing;
    }

    /**
     * Set 'only_changing' value
     *
     * @param bool $value
     */
    public function setOnlyChanging($value = null)
    {
        $this->only_changing = $value;
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
            'media' => null,
            'tools' => null,
            'games' => null,
            'only_installed' => null,
            'only_changing' => null
        ], $values);

        $message->setMedia($values['media']);
        $message->setTools($values['tools']);
        $message->setGames($values['games']);
        $message->setOnlyInstalled($values['only_installed']);
        $message->setOnlyChanging($values['only_changing']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientGetClientAppList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'media',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'tools',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'games',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'only_installed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'only_changing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->media !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->media);
        }

        if ($this->tools !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->tools);
        }

        if ($this->games !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->games);
        }

        if ($this->only_installed !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->only_installed);
        }

        if ($this->only_changing !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->only_changing);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->media = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->tools = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->games = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->only_installed = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->only_changing = $reader->readBool($stream);

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

        if ($this->media !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->tools !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->games !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->only_installed !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->only_changing !== null) {
            $size += 1;
            $size += 1;
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
        $this->media = null;
        $this->tools = null;
        $this->games = null;
        $this->only_installed = null;
        $this->only_changing = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientGetClientAppList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->media = ($message->media !== null) ? $message->media : $this->media;
        $this->tools = ($message->tools !== null) ? $message->tools : $this->tools;
        $this->games = ($message->games !== null) ? $message->games : $this->games;
        $this->only_installed = ($message->only_installed !== null) ? $message->only_installed : $this->only_installed;
        $this->only_changing = ($message->only_changing !== null) ? $message->only_changing : $this->only_changing;
    }


}

