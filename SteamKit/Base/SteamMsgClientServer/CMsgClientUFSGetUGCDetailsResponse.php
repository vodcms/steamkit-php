<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientUFSGetUGCDetailsResponse
 */
class CMsgClientUFSGetUGCDetailsResponse extends \Protobuf\AbstractMessage
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
     * eresult optional int32 = 1
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * url optional string = 2
     *
     * @var string
     */
    protected $url = null;

    /**
     * app_id optional uint32 = 3
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * filename optional string = 4
     *
     * @var string
     */
    protected $filename = null;

    /**
     * steamid_creator optional fixed64 = 5
     *
     * @var int
     */
    protected $steamid_creator = null;

    /**
     * file_size optional uint32 = 6
     *
     * @var int
     */
    protected $file_size = null;

    /**
     * compressed_file_size optional uint32 = 7
     *
     * @var int
     */
    protected $compressed_file_size = null;

    /**
     * rangecheck_host optional string = 8
     *
     * @var string
     */
    protected $rangecheck_host = null;

    /**
     * file_encoded_sha1 optional string = 9
     *
     * @var string
     */
    protected $file_encoded_sha1 = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->eresult = '2';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
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
     * Check if 'steamid_creator' has a value
     *
     * @return bool
     */
    public function hasSteamidCreator()
    {
        return $this->steamid_creator !== null;
    }

    /**
     * Get 'steamid_creator' value
     *
     * @return int
     */
    public function getSteamidCreator()
    {
        return $this->steamid_creator;
    }

    /**
     * Set 'steamid_creator' value
     *
     * @param int $value
     */
    public function setSteamidCreator($value = null)
    {
        $this->steamid_creator = $value;
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
     * Check if 'compressed_file_size' has a value
     *
     * @return bool
     */
    public function hasCompressedFileSize()
    {
        return $this->compressed_file_size !== null;
    }

    /**
     * Get 'compressed_file_size' value
     *
     * @return int
     */
    public function getCompressedFileSize()
    {
        return $this->compressed_file_size;
    }

    /**
     * Set 'compressed_file_size' value
     *
     * @param int $value
     */
    public function setCompressedFileSize($value = null)
    {
        $this->compressed_file_size = $value;
    }

    /**
     * Check if 'rangecheck_host' has a value
     *
     * @return bool
     */
    public function hasRangecheckHost()
    {
        return $this->rangecheck_host !== null;
    }

    /**
     * Get 'rangecheck_host' value
     *
     * @return string
     */
    public function getRangecheckHost()
    {
        return $this->rangecheck_host;
    }

    /**
     * Set 'rangecheck_host' value
     *
     * @param string $value
     */
    public function setRangecheckHost($value = null)
    {
        $this->rangecheck_host = $value;
    }

    /**
     * Check if 'file_encoded_sha1' has a value
     *
     * @return bool
     */
    public function hasFileEncodedSha1()
    {
        return $this->file_encoded_sha1 !== null;
    }

    /**
     * Get 'file_encoded_sha1' value
     *
     * @return string
     */
    public function getFileEncodedSha1()
    {
        return $this->file_encoded_sha1;
    }

    /**
     * Set 'file_encoded_sha1' value
     *
     * @param string $value
     */
    public function setFileEncodedSha1($value = null)
    {
        $this->file_encoded_sha1 = $value;
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
            'eresult' => '2',
            'url' => null,
            'app_id' => null,
            'filename' => null,
            'steamid_creator' => null,
            'file_size' => null,
            'compressed_file_size' => null,
            'rangecheck_host' => null,
            'file_encoded_sha1' => null
        ], $values);

        $message->setEresult($values['eresult']);
        $message->setUrl($values['url']);
        $message->setAppId($values['app_id']);
        $message->setFilename($values['filename']);
        $message->setSteamidCreator($values['steamid_creator']);
        $message->setFileSize($values['file_size']);
        $message->setCompressedFileSize($values['compressed_file_size']);
        $message->setRangecheckHost($values['rangecheck_host']);
        $message->setFileEncodedSha1($values['file_encoded_sha1']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUFSGetUGCDetailsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '2'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'steamid_creator',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'compressed_file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'rangecheck_host',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'file_encoded_sha1',
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

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->url !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->url);
        }

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->filename !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->filename);
        }

        if ($this->steamid_creator !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeFixed64($stream, $this->steamid_creator);
        }

        if ($this->file_size !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->file_size);
        }

        if ($this->compressed_file_size !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->compressed_file_size);
        }

        if ($this->rangecheck_host !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->rangecheck_host);
        }

        if ($this->file_encoded_sha1 !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->file_encoded_sha1);
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

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid_creator = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->compressed_file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->rangecheck_host = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->file_encoded_sha1 = $reader->readString($stream);

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

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url);
        }

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filename);
        }

        if ($this->steamid_creator !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->file_size);
        }

        if ($this->compressed_file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->compressed_file_size);
        }

        if ($this->rangecheck_host !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->rangecheck_host);
        }

        if ($this->file_encoded_sha1 !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->file_encoded_sha1);
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
        $this->eresult = '2';
        $this->url = null;
        $this->app_id = null;
        $this->filename = null;
        $this->steamid_creator = null;
        $this->file_size = null;
        $this->compressed_file_size = null;
        $this->rangecheck_host = null;
        $this->file_encoded_sha1 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientUFSGetUGCDetailsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->url = ($message->url !== null) ? $message->url : $this->url;
        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->filename = ($message->filename !== null) ? $message->filename : $this->filename;
        $this->steamid_creator = ($message->steamid_creator !== null) ? $message->steamid_creator : $this->steamid_creator;
        $this->file_size = ($message->file_size !== null) ? $message->file_size : $this->file_size;
        $this->compressed_file_size = ($message->compressed_file_size !== null) ? $message->compressed_file_size : $this->compressed_file_size;
        $this->rangecheck_host = ($message->rangecheck_host !== null) ? $message->rangecheck_host : $this->rangecheck_host;
        $this->file_encoded_sha1 = ($message->file_encoded_sha1 !== null) ? $message->file_encoded_sha1 : $this->file_encoded_sha1;
    }


}

