<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_cloud.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCloud;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCloud.ClientCloudFileUploadBlockDetails
 */
class ClientCloudFileUploadBlockDetails extends \Protobuf\AbstractMessage
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
     * url_host optional string = 1
     *
     * @var string
     */
    protected $url_host = null;

    /**
     * url_path optional string = 2
     *
     * @var string
     */
    protected $url_path = null;

    /**
     * use_https optional bool = 3
     *
     * @var bool
     */
    protected $use_https = null;

    /**
     * http_method optional int32 = 4
     *
     * @var int
     */
    protected $http_method = null;

    /**
     * request_headers repeated message = 5
     *
     * @var \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders>
     */
    protected $request_headers = null;

    /**
     * block_offset optional uint64 = 6
     *
     * @var int
     */
    protected $block_offset = null;

    /**
     * block_length optional uint32 = 7
     *
     * @var int
     */
    protected $block_length = null;

    /**
     * explicit_body_data optional bytes = 8
     *
     * @var \Protobuf\Stream
     */
    protected $explicit_body_data = null;

    /**
     * may_parallelize optional bool = 9
     *
     * @var bool
     */
    protected $may_parallelize = null;

    /**
     * Check if 'url_host' has a value
     *
     * @return bool
     */
    public function hasUrlHost()
    {
        return $this->url_host !== null;
    }

    /**
     * Get 'url_host' value
     *
     * @return string
     */
    public function getUrlHost()
    {
        return $this->url_host;
    }

    /**
     * Set 'url_host' value
     *
     * @param string $value
     */
    public function setUrlHost($value = null)
    {
        $this->url_host = $value;
    }

    /**
     * Check if 'url_path' has a value
     *
     * @return bool
     */
    public function hasUrlPath()
    {
        return $this->url_path !== null;
    }

    /**
     * Get 'url_path' value
     *
     * @return string
     */
    public function getUrlPath()
    {
        return $this->url_path;
    }

    /**
     * Set 'url_path' value
     *
     * @param string $value
     */
    public function setUrlPath($value = null)
    {
        $this->url_path = $value;
    }

    /**
     * Check if 'use_https' has a value
     *
     * @return bool
     */
    public function hasUseHttps()
    {
        return $this->use_https !== null;
    }

    /**
     * Get 'use_https' value
     *
     * @return bool
     */
    public function getUseHttps()
    {
        return $this->use_https;
    }

    /**
     * Set 'use_https' value
     *
     * @param bool $value
     */
    public function setUseHttps($value = null)
    {
        $this->use_https = $value;
    }

    /**
     * Check if 'http_method' has a value
     *
     * @return bool
     */
    public function hasHttpMethod()
    {
        return $this->http_method !== null;
    }

    /**
     * Get 'http_method' value
     *
     * @return int
     */
    public function getHttpMethod()
    {
        return $this->http_method;
    }

    /**
     * Set 'http_method' value
     *
     * @param int $value
     */
    public function setHttpMethod($value = null)
    {
        $this->http_method = $value;
    }

    /**
     * Check if 'request_headers' has a value
     *
     * @return bool
     */
    public function hasRequestHeadersList()
    {
        return $this->request_headers !== null;
    }

    /**
     * Get 'request_headers' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders>
     */
    public function getRequestHeadersList()
    {
        return $this->request_headers;
    }

    /**
     * Set 'request_headers' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders> $value
     */
    public function setRequestHeadersList(\Protobuf\Collection $value = null)
    {
        $this->request_headers = $value;
    }

    /**
     * Add a new element to 'request_headers'
     *
     * @param
     * \SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders
     * $value
     */
    public function addRequestHeaders(\SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders $value)
    {
        if ($this->request_headers === null) {
            $this->request_headers = new \Protobuf\MessageCollection();
        }

        $this->request_headers->add($value);
    }

    /**
     * Check if 'block_offset' has a value
     *
     * @return bool
     */
    public function hasBlockOffset()
    {
        return $this->block_offset !== null;
    }

    /**
     * Get 'block_offset' value
     *
     * @return int
     */
    public function getBlockOffset()
    {
        return $this->block_offset;
    }

    /**
     * Set 'block_offset' value
     *
     * @param int $value
     */
    public function setBlockOffset($value = null)
    {
        $this->block_offset = $value;
    }

    /**
     * Check if 'block_length' has a value
     *
     * @return bool
     */
    public function hasBlockLength()
    {
        return $this->block_length !== null;
    }

    /**
     * Get 'block_length' value
     *
     * @return int
     */
    public function getBlockLength()
    {
        return $this->block_length;
    }

    /**
     * Set 'block_length' value
     *
     * @param int $value
     */
    public function setBlockLength($value = null)
    {
        $this->block_length = $value;
    }

    /**
     * Check if 'explicit_body_data' has a value
     *
     * @return bool
     */
    public function hasExplicitBodyData()
    {
        return $this->explicit_body_data !== null;
    }

    /**
     * Get 'explicit_body_data' value
     *
     * @return \Protobuf\Stream
     */
    public function getExplicitBodyData()
    {
        return $this->explicit_body_data;
    }

    /**
     * Set 'explicit_body_data' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setExplicitBodyData($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->explicit_body_data = $value;
    }

    /**
     * Check if 'may_parallelize' has a value
     *
     * @return bool
     */
    public function hasMayParallelize()
    {
        return $this->may_parallelize !== null;
    }

    /**
     * Get 'may_parallelize' value
     *
     * @return bool
     */
    public function getMayParallelize()
    {
        return $this->may_parallelize;
    }

    /**
     * Set 'may_parallelize' value
     *
     * @param bool $value
     */
    public function setMayParallelize($value = null)
    {
        $this->may_parallelize = $value;
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
            'url_host' => null,
            'url_path' => null,
            'use_https' => null,
            'http_method' => null,
            'request_headers' => [],
            'block_offset' => null,
            'block_length' => null,
            'explicit_body_data' => null,
            'may_parallelize' => null
        ], $values);

        $message->setUrlHost($values['url_host']);
        $message->setUrlPath($values['url_path']);
        $message->setUseHttps($values['use_https']);
        $message->setHttpMethod($values['http_method']);
        $message->setBlockOffset($values['block_offset']);
        $message->setBlockLength($values['block_length']);
        $message->setExplicitBodyData($values['explicit_body_data']);
        $message->setMayParallelize($values['may_parallelize']);

        foreach ($values['request_headers'] as $item) {
            $message->addRequestHeaders($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ClientCloudFileUploadBlockDetails',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'url_host',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'url_path',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'use_https',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'http_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'request_headers',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgCloud.ClientCloudFileUploadBlockDetails.HTTPHeaders'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'block_offset',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'block_length',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'explicit_body_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'may_parallelize',
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

        if ($this->url_host !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->url_host);
        }

        if ($this->url_path !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->url_path);
        }

        if ($this->use_https !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->use_https);
        }

        if ($this->http_method !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->http_method);
        }

        if ($this->request_headers !== null) {
            foreach ($this->request_headers as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->block_offset !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->block_offset);
        }

        if ($this->block_length !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->block_length);
        }

        if ($this->explicit_body_data !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeByteStream($stream, $this->explicit_body_data);
        }

        if ($this->may_parallelize !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->may_parallelize);
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

                $this->url_host = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url_path = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->use_https = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->http_method = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails\HTTPHeaders();

                if ($this->request_headers === null) {
                    $this->request_headers = new \Protobuf\MessageCollection();
                }

                $this->request_headers->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->block_offset = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->block_length = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->explicit_body_data = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->may_parallelize = $reader->readBool($stream);

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

        if ($this->url_host !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url_host);
        }

        if ($this->url_path !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url_path);
        }

        if ($this->use_https !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->http_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->http_method);
        }

        if ($this->request_headers !== null) {
            foreach ($this->request_headers as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->block_offset !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->block_offset);
        }

        if ($this->block_length !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->block_length);
        }

        if ($this->explicit_body_data !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->explicit_body_data);
        }

        if ($this->may_parallelize !== null) {
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
        $this->url_host = null;
        $this->url_path = null;
        $this->use_https = null;
        $this->http_method = null;
        $this->request_headers = null;
        $this->block_offset = null;
        $this->block_length = null;
        $this->explicit_body_data = null;
        $this->may_parallelize = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCloud\ClientCloudFileUploadBlockDetails) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->url_host = ($message->url_host !== null) ? $message->url_host : $this->url_host;
        $this->url_path = ($message->url_path !== null) ? $message->url_path : $this->url_path;
        $this->use_https = ($message->use_https !== null) ? $message->use_https : $this->use_https;
        $this->http_method = ($message->http_method !== null) ? $message->http_method : $this->http_method;
        $this->request_headers = ($message->request_headers !== null) ? $message->request_headers : $this->request_headers;
        $this->block_offset = ($message->block_offset !== null) ? $message->block_offset : $this->block_offset;
        $this->block_length = ($message->block_length !== null) ? $message->block_length : $this->block_length;
        $this->explicit_body_data = ($message->explicit_body_data !== null) ? $message->explicit_body_data : $this->explicit_body_data;
        $this->may_parallelize = ($message->may_parallelize !== null) ? $message->may_parallelize : $this->may_parallelize;
    }


}

