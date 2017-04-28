<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_cloud.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCloud;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCloud.CCloud_ClientBeginFileUpload_Request
 */
class CCloud_ClientBeginFileUpload_Request extends \Protobuf\AbstractMessage
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
     * file_size optional uint32 = 2
     *
     * @var int
     */
    protected $file_size = null;

    /**
     * raw_file_size optional uint32 = 3
     *
     * @var int
     */
    protected $raw_file_size = null;

    /**
     * file_sha optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $file_sha = null;

    /**
     * time_stamp optional uint64 = 5
     *
     * @var int
     */
    protected $time_stamp = null;

    /**
     * filename optional string = 6
     *
     * @var string
     */
    protected $filename = null;

    /**
     * platforms_to_sync optional uint32 = 7
     *
     * @var int
     */
    protected $platforms_to_sync = null;

    /**
     * cell_id optional uint32 = 9
     *
     * @var int
     */
    protected $cell_id = null;

    /**
     * can_encrypt optional bool = 10
     *
     * @var bool
     */
    protected $can_encrypt = null;

    /**
     * is_shared_file optional bool = 11
     *
     * @var bool
     */
    protected $is_shared_file = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->platforms_to_sync = '4294967295';

        parent::__construct($stream, $configuration);
    }

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
     * Check if 'file_size' has a value
     *
     * @return bool
     */
    public function hasFileSize()
    {
        return $this->file_size !== null;
    }

    /**
     * Get 'file_size' value
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * Set 'file_size' value
     *
     * @param int $value
     */
    public function setFileSize($value = null)
    {
        $this->file_size = $value;
    }

    /**
     * Check if 'raw_file_size' has a value
     *
     * @return bool
     */
    public function hasRawFileSize()
    {
        return $this->raw_file_size !== null;
    }

    /**
     * Get 'raw_file_size' value
     *
     * @return int
     */
    public function getRawFileSize()
    {
        return $this->raw_file_size;
    }

    /**
     * Set 'raw_file_size' value
     *
     * @param int $value
     */
    public function setRawFileSize($value = null)
    {
        $this->raw_file_size = $value;
    }

    /**
     * Check if 'file_sha' has a value
     *
     * @return bool
     */
    public function hasFileSha()
    {
        return $this->file_sha !== null;
    }

    /**
     * Get 'file_sha' value
     *
     * @return \Protobuf\Stream
     */
    public function getFileSha()
    {
        return $this->file_sha;
    }

    /**
     * Set 'file_sha' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setFileSha($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->file_sha = $value;
    }

    /**
     * Check if 'time_stamp' has a value
     *
     * @return bool
     */
    public function hasTimeStamp()
    {
        return $this->time_stamp !== null;
    }

    /**
     * Get 'time_stamp' value
     *
     * @return int
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     * Set 'time_stamp' value
     *
     * @param int $value
     */
    public function setTimeStamp($value = null)
    {
        $this->time_stamp = $value;
    }

    /**
     * Check if 'filename' has a value
     *
     * @return bool
     */
    public function hasFilename()
    {
        return $this->filename !== null;
    }

    /**
     * Get 'filename' value
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set 'filename' value
     *
     * @param string $value
     */
    public function setFilename($value = null)
    {
        $this->filename = $value;
    }

    /**
     * Check if 'platforms_to_sync' has a value
     *
     * @return bool
     */
    public function hasPlatformsToSync()
    {
        return $this->platforms_to_sync !== null;
    }

    /**
     * Get 'platforms_to_sync' value
     *
     * @return int
     */
    public function getPlatformsToSync()
    {
        return $this->platforms_to_sync;
    }

    /**
     * Set 'platforms_to_sync' value
     *
     * @param int $value
     */
    public function setPlatformsToSync($value = null)
    {
        $this->platforms_to_sync = $value;
    }

    /**
     * Check if 'cell_id' has a value
     *
     * @return bool
     */
    public function hasCellId()
    {
        return $this->cell_id !== null;
    }

    /**
     * Get 'cell_id' value
     *
     * @return int
     */
    public function getCellId()
    {
        return $this->cell_id;
    }

    /**
     * Set 'cell_id' value
     *
     * @param int $value
     */
    public function setCellId($value = null)
    {
        $this->cell_id = $value;
    }

    /**
     * Check if 'can_encrypt' has a value
     *
     * @return bool
     */
    public function hasCanEncrypt()
    {
        return $this->can_encrypt !== null;
    }

    /**
     * Get 'can_encrypt' value
     *
     * @return bool
     */
    public function getCanEncrypt()
    {
        return $this->can_encrypt;
    }

    /**
     * Set 'can_encrypt' value
     *
     * @param bool $value
     */
    public function setCanEncrypt($value = null)
    {
        $this->can_encrypt = $value;
    }

    /**
     * Check if 'is_shared_file' has a value
     *
     * @return bool
     */
    public function hasIsSharedFile()
    {
        return $this->is_shared_file !== null;
    }

    /**
     * Get 'is_shared_file' value
     *
     * @return bool
     */
    public function getIsSharedFile()
    {
        return $this->is_shared_file;
    }

    /**
     * Set 'is_shared_file' value
     *
     * @param bool $value
     */
    public function setIsSharedFile($value = null)
    {
        $this->is_shared_file = $value;
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
            'file_size' => null,
            'raw_file_size' => null,
            'file_sha' => null,
            'time_stamp' => null,
            'filename' => null,
            'platforms_to_sync' => '4294967295',
            'cell_id' => null,
            'can_encrypt' => null,
            'is_shared_file' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setFileSize($values['file_size']);
        $message->setRawFileSize($values['raw_file_size']);
        $message->setFileSha($values['file_sha']);
        $message->setTimeStamp($values['time_stamp']);
        $message->setFilename($values['filename']);
        $message->setPlatformsToSync($values['platforms_to_sync']);
        $message->setCellId($values['cell_id']);
        $message->setCanEncrypt($values['can_encrypt']);
        $message->setIsSharedFile($values['is_shared_file']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCloud_ClientBeginFileUpload_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'raw_file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'file_sha',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'time_stamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'platforms_to_sync',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '4294967295'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'cell_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'can_encrypt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'is_shared_file',
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->file_size !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->file_size);
        }

        if ($this->raw_file_size !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->raw_file_size);
        }

        if ($this->file_sha !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->file_sha);
        }

        if ($this->time_stamp !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->time_stamp);
        }

        if ($this->filename !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->filename);
        }

        if ($this->platforms_to_sync !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->platforms_to_sync);
        }

        if ($this->cell_id !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->cell_id);
        }

        if ($this->can_encrypt !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->can_encrypt);
        }

        if ($this->is_shared_file !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeBool($stream, $this->is_shared_file);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->raw_file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->file_sha = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->time_stamp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->platforms_to_sync = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->cell_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->can_encrypt = $reader->readBool($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_shared_file = $reader->readBool($stream);

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

        if ($this->file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->file_size);
        }

        if ($this->raw_file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raw_file_size);
        }

        if ($this->file_sha !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->file_sha);
        }

        if ($this->time_stamp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_stamp);
        }

        if ($this->filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filename);
        }

        if ($this->platforms_to_sync !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->platforms_to_sync);
        }

        if ($this->cell_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cell_id);
        }

        if ($this->can_encrypt !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_shared_file !== null) {
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
        $this->appid = null;
        $this->file_size = null;
        $this->raw_file_size = null;
        $this->file_sha = null;
        $this->time_stamp = null;
        $this->filename = null;
        $this->platforms_to_sync = '4294967295';
        $this->cell_id = null;
        $this->can_encrypt = null;
        $this->is_shared_file = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCloud\CCloud_ClientBeginFileUpload_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->file_size = ($message->file_size !== null) ? $message->file_size : $this->file_size;
        $this->raw_file_size = ($message->raw_file_size !== null) ? $message->raw_file_size : $this->raw_file_size;
        $this->file_sha = ($message->file_sha !== null) ? $message->file_sha : $this->file_sha;
        $this->time_stamp = ($message->time_stamp !== null) ? $message->time_stamp : $this->time_stamp;
        $this->filename = ($message->filename !== null) ? $message->filename : $this->filename;
        $this->platforms_to_sync = ($message->platforms_to_sync !== null) ? $message->platforms_to_sync : $this->platforms_to_sync;
        $this->cell_id = ($message->cell_id !== null) ? $message->cell_id : $this->cell_id;
        $this->can_encrypt = ($message->can_encrypt !== null) ? $message->can_encrypt : $this->can_encrypt;
        $this->is_shared_file = ($message->is_shared_file !== null) ? $message->is_shared_file : $this->is_shared_file;
    }


}

