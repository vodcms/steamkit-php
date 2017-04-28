<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMPublishFile
 */
class CMsgClientUCMPublishFile extends \Protobuf\AbstractMessage
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
     * app_id optional uint32 = 1
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * file_name optional string = 2
     *
     * @var string
     */
    protected $file_name = null;

    /**
     * preview_file_name optional string = 3
     *
     * @var string
     */
    protected $preview_file_name = null;

    /**
     * consumer_app_id optional uint32 = 4
     *
     * @var int
     */
    protected $consumer_app_id = null;

    /**
     * title optional string = 5
     *
     * @var string
     */
    protected $title = null;

    /**
     * description optional string = 6
     *
     * @var string
     */
    protected $description = null;

    /**
     * tags repeated string = 8
     *
     * @var \Protobuf\Collection
     */
    protected $tags = null;

    /**
     * workshop_file optional bool = 9
     *
     * @var bool
     */
    protected $workshop_file = null;

    /**
     * visibility optional int32 = 10
     *
     * @var int
     */
    protected $visibility = null;

    /**
     * file_type optional uint32 = 11
     *
     * @var int
     */
    protected $file_type = null;

    /**
     * url optional string = 12
     *
     * @var string
     */
    protected $url = null;

    /**
     * video_provider optional uint32 = 13
     *
     * @var int
     */
    protected $video_provider = null;

    /**
     * video_account_name optional string = 14
     *
     * @var string
     */
    protected $video_account_name = null;

    /**
     * video_identifier optional string = 15
     *
     * @var string
     */
    protected $video_identifier = null;

    /**
     * in_progress optional bool = 16
     *
     * @var bool
     */
    protected $in_progress = null;

    /**
     * Check if 'app_id' has a value
     *
     * @return bool
     */
    public function hasAppId()
    {
        return $this->app_id !== null;
    }

    /**
     * Get 'app_id' value
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set 'app_id' value
     *
     * @param int $value
     */
    public function setAppId($value = null)
    {
        $this->app_id = $value;
    }

    /**
     * Check if 'file_name' has a value
     *
     * @return bool
     */
    public function hasFileName()
    {
        return $this->file_name !== null;
    }

    /**
     * Get 'file_name' value
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Set 'file_name' value
     *
     * @param string $value
     */
    public function setFileName($value = null)
    {
        $this->file_name = $value;
    }

    /**
     * Check if 'preview_file_name' has a value
     *
     * @return bool
     */
    public function hasPreviewFileName()
    {
        return $this->preview_file_name !== null;
    }

    /**
     * Get 'preview_file_name' value
     *
     * @return string
     */
    public function getPreviewFileName()
    {
        return $this->preview_file_name;
    }

    /**
     * Set 'preview_file_name' value
     *
     * @param string $value
     */
    public function setPreviewFileName($value = null)
    {
        $this->preview_file_name = $value;
    }

    /**
     * Check if 'consumer_app_id' has a value
     *
     * @return bool
     */
    public function hasConsumerAppId()
    {
        return $this->consumer_app_id !== null;
    }

    /**
     * Get 'consumer_app_id' value
     *
     * @return int
     */
    public function getConsumerAppId()
    {
        return $this->consumer_app_id;
    }

    /**
     * Set 'consumer_app_id' value
     *
     * @param int $value
     */
    public function setConsumerAppId($value = null)
    {
        $this->consumer_app_id = $value;
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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set 'title' value
     *
     * @param string $value
     */
    public function setTitle($value = null)
    {
        $this->title = $value;
    }

    /**
     * Check if 'description' has a value
     *
     * @return bool
     */
    public function hasDescription()
    {
        return $this->description !== null;
    }

    /**
     * Get 'description' value
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set 'description' value
     *
     * @param string $value
     */
    public function setDescription($value = null)
    {
        $this->description = $value;
    }

    /**
     * Check if 'tags' has a value
     *
     * @return bool
     */
    public function hasTagsList()
    {
        return $this->tags !== null;
    }

    /**
     * Get 'tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getTagsList()
    {
        return $this->tags;
    }

    /**
     * Set 'tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTagsList(\Protobuf\Collection $value = null)
    {
        $this->tags = $value;
    }

    /**
     * Add a new element to 'tags'
     *
     * @param string $value
     */
    public function addTags($value)
    {
        if ($this->tags === null) {
            $this->tags = new \Protobuf\ScalarCollection();
        }

        $this->tags->add($value);
    }

    /**
     * Check if 'workshop_file' has a value
     *
     * @return bool
     */
    public function hasWorkshopFile()
    {
        return $this->workshop_file !== null;
    }

    /**
     * Get 'workshop_file' value
     *
     * @return bool
     */
    public function getWorkshopFile()
    {
        return $this->workshop_file;
    }

    /**
     * Set 'workshop_file' value
     *
     * @param bool $value
     */
    public function setWorkshopFile($value = null)
    {
        $this->workshop_file = $value;
    }

    /**
     * Check if 'visibility' has a value
     *
     * @return bool
     */
    public function hasVisibility()
    {
        return $this->visibility !== null;
    }

    /**
     * Get 'visibility' value
     *
     * @return int
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set 'visibility' value
     *
     * @param int $value
     */
    public function setVisibility($value = null)
    {
        $this->visibility = $value;
    }

    /**
     * Check if 'file_type' has a value
     *
     * @return bool
     */
    public function hasFileType()
    {
        return $this->file_type !== null;
    }

    /**
     * Get 'file_type' value
     *
     * @return int
     */
    public function getFileType()
    {
        return $this->file_type;
    }

    /**
     * Set 'file_type' value
     *
     * @param int $value
     */
    public function setFileType($value = null)
    {
        $this->file_type = $value;
    }

    /**
     * Check if 'url' has a value
     *
     * @return bool
     */
    public function hasUrl()
    {
        return $this->url !== null;
    }

    /**
     * Get 'url' value
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set 'url' value
     *
     * @param string $value
     */
    public function setUrl($value = null)
    {
        $this->url = $value;
    }

    /**
     * Check if 'video_provider' has a value
     *
     * @return bool
     */
    public function hasVideoProvider()
    {
        return $this->video_provider !== null;
    }

    /**
     * Get 'video_provider' value
     *
     * @return int
     */
    public function getVideoProvider()
    {
        return $this->video_provider;
    }

    /**
     * Set 'video_provider' value
     *
     * @param int $value
     */
    public function setVideoProvider($value = null)
    {
        $this->video_provider = $value;
    }

    /**
     * Check if 'video_account_name' has a value
     *
     * @return bool
     */
    public function hasVideoAccountName()
    {
        return $this->video_account_name !== null;
    }

    /**
     * Get 'video_account_name' value
     *
     * @return string
     */
    public function getVideoAccountName()
    {
        return $this->video_account_name;
    }

    /**
     * Set 'video_account_name' value
     *
     * @param string $value
     */
    public function setVideoAccountName($value = null)
    {
        $this->video_account_name = $value;
    }

    /**
     * Check if 'video_identifier' has a value
     *
     * @return bool
     */
    public function hasVideoIdentifier()
    {
        return $this->video_identifier !== null;
    }

    /**
     * Get 'video_identifier' value
     *
     * @return string
     */
    public function getVideoIdentifier()
    {
        return $this->video_identifier;
    }

    /**
     * Set 'video_identifier' value
     *
     * @param string $value
     */
    public function setVideoIdentifier($value = null)
    {
        $this->video_identifier = $value;
    }

    /**
     * Check if 'in_progress' has a value
     *
     * @return bool
     */
    public function hasInProgress()
    {
        return $this->in_progress !== null;
    }

    /**
     * Get 'in_progress' value
     *
     * @return bool
     */
    public function getInProgress()
    {
        return $this->in_progress;
    }

    /**
     * Set 'in_progress' value
     *
     * @param bool $value
     */
    public function setInProgress($value = null)
    {
        $this->in_progress = $value;
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
            'app_id' => null,
            'file_name' => null,
            'preview_file_name' => null,
            'consumer_app_id' => null,
            'title' => null,
            'description' => null,
            'tags' => [],
            'workshop_file' => null,
            'visibility' => null,
            'file_type' => null,
            'url' => null,
            'video_provider' => null,
            'video_account_name' => null,
            'video_identifier' => null,
            'in_progress' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setFileName($values['file_name']);
        $message->setPreviewFileName($values['preview_file_name']);
        $message->setConsumerAppId($values['consumer_app_id']);
        $message->setTitle($values['title']);
        $message->setDescription($values['description']);
        $message->setWorkshopFile($values['workshop_file']);
        $message->setVisibility($values['visibility']);
        $message->setFileType($values['file_type']);
        $message->setUrl($values['url']);
        $message->setVideoProvider($values['video_provider']);
        $message->setVideoAccountName($values['video_account_name']);
        $message->setVideoIdentifier($values['video_identifier']);
        $message->setInProgress($values['in_progress']);

        foreach ($values['tags'] as $item) {
            $message->addTags($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUCMPublishFile',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'file_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'preview_file_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'consumer_app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'title',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'description',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'workshop_file',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'visibility',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'file_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'video_provider',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'video_account_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'video_identifier',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'in_progress',
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->file_name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->file_name);
        }

        if ($this->preview_file_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->preview_file_name);
        }

        if ($this->consumer_app_id !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->consumer_app_id);
        }

        if ($this->title !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->title);
        }

        if ($this->description !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->description);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $writer->writeVarint($stream, 66);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->workshop_file !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->workshop_file);
        }

        if ($this->visibility !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->visibility);
        }

        if ($this->file_type !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->file_type);
        }

        if ($this->url !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->url);
        }

        if ($this->video_provider !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeVarint($stream, $this->video_provider);
        }

        if ($this->video_account_name !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeString($stream, $this->video_account_name);
        }

        if ($this->video_identifier !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeString($stream, $this->video_identifier);
        }

        if ($this->in_progress !== null) {
            $writer->writeVarint($stream, 128);
            $writer->writeBool($stream, $this->in_progress);
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

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->file_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->preview_file_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->consumer_app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->title = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->description = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->tags === null) {
                    $this->tags = new \Protobuf\ScalarCollection();
                }

                $this->tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->workshop_file = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->visibility = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->file_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url = $reader->readString($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->video_provider = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->video_account_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->video_identifier = $reader->readString($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->in_progress = $reader->readBool($stream);

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

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->file_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->file_name);
        }

        if ($this->preview_file_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->preview_file_name);
        }

        if ($this->consumer_app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->consumer_app_id);
        }

        if ($this->title !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->title);
        }

        if ($this->description !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->description);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->workshop_file !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->visibility !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->visibility);
        }

        if ($this->file_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->file_type);
        }

        if ($this->url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url);
        }

        if ($this->video_provider !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->video_provider);
        }

        if ($this->video_account_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->video_account_name);
        }

        if ($this->video_identifier !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->video_identifier);
        }

        if ($this->in_progress !== null) {
            $size += 2;
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
        $this->app_id = null;
        $this->file_name = null;
        $this->preview_file_name = null;
        $this->consumer_app_id = null;
        $this->title = null;
        $this->description = null;
        $this->tags = null;
        $this->workshop_file = null;
        $this->visibility = null;
        $this->file_type = null;
        $this->url = null;
        $this->video_provider = null;
        $this->video_account_name = null;
        $this->video_identifier = null;
        $this->in_progress = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMPublishFile) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->file_name = ($message->file_name !== null) ? $message->file_name : $this->file_name;
        $this->preview_file_name = ($message->preview_file_name !== null) ? $message->preview_file_name : $this->preview_file_name;
        $this->consumer_app_id = ($message->consumer_app_id !== null) ? $message->consumer_app_id : $this->consumer_app_id;
        $this->title = ($message->title !== null) ? $message->title : $this->title;
        $this->description = ($message->description !== null) ? $message->description : $this->description;
        $this->tags = ($message->tags !== null) ? $message->tags : $this->tags;
        $this->workshop_file = ($message->workshop_file !== null) ? $message->workshop_file : $this->workshop_file;
        $this->visibility = ($message->visibility !== null) ? $message->visibility : $this->visibility;
        $this->file_type = ($message->file_type !== null) ? $message->file_type : $this->file_type;
        $this->url = ($message->url !== null) ? $message->url : $this->url;
        $this->video_provider = ($message->video_provider !== null) ? $message->video_provider : $this->video_provider;
        $this->video_account_name = ($message->video_account_name !== null) ? $message->video_account_name : $this->video_account_name;
        $this->video_identifier = ($message->video_identifier !== null) ? $message->video_identifier : $this->video_identifier;
        $this->in_progress = ($message->in_progress !== null) ? $message->in_progress : $this->in_progress;
    }


}

