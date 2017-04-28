<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : dod/htmlmessages.proto
 */


namespace SteamKit\Base\GC\DOD\HTMLMessages;

/**
 * Protobuf message : SteamKit.Base.GC.DOD.HTMLMessages.CMsgFinishedRequest
 */
class CMsgFinishedRequest extends \Protobuf\AbstractMessage
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
     * browser_handle optional uint32 = 1
     *
     * @var int
     */
    protected $browser_handle = null;

    /**
     * url optional string = 2
     *
     * @var string
     */
    protected $url = null;

    /**
     * pageTitle optional string = 3
     *
     * @var string
     */
    protected $pageTitle = null;

    /**
     * security_info optional message = 4
     *
     * @var \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLPageSecurityInfo
     */
    protected $security_info = null;

    /**
     * headers repeated message = 5
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader>
     */
    protected $headers = null;

    /**
     * Check if 'browser_handle' has a value
     *
     * @return bool
     */
    public function hasBrowserHandle()
    {
        return $this->browser_handle !== null;
    }

    /**
     * Get 'browser_handle' value
     *
     * @return int
     */
    public function getBrowserHandle()
    {
        return $this->browser_handle;
    }

    /**
     * Set 'browser_handle' value
     *
     * @param int $value
     */
    public function setBrowserHandle($value = null)
    {
        $this->browser_handle = $value;
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
     * Check if 'pageTitle' has a value
     *
     * @return bool
     */
    public function hasPageTitle()
    {
        return $this->pageTitle !== null;
    }

    /**
     * Get 'pageTitle' value
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set 'pageTitle' value
     *
     * @param string $value
     */
    public function setPageTitle($value = null)
    {
        $this->pageTitle = $value;
    }

    /**
     * Check if 'security_info' has a value
     *
     * @return bool
     */
    public function hasSecurityInfo()
    {
        return $this->security_info !== null;
    }

    /**
     * Get 'security_info' value
     *
     * @return \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLPageSecurityInfo
     */
    public function getSecurityInfo()
    {
        return $this->security_info;
    }

    /**
     * Set 'security_info' value
     *
     * @param \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLPageSecurityInfo $value
     */
    public function setSecurityInfo(\SteamKit\Base\GC\DOD\HTMLMessages\CHTMLPageSecurityInfo $value = null)
    {
        $this->security_info = $value;
    }

    /**
     * Check if 'headers' has a value
     *
     * @return bool
     */
    public function hasHeadersList()
    {
        return $this->headers !== null;
    }

    /**
     * Get 'headers' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader>
     */
    public function getHeadersList()
    {
        return $this->headers;
    }

    /**
     * Set 'headers' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader> $value
     */
    public function setHeadersList(\Protobuf\Collection $value = null)
    {
        $this->headers = $value;
    }

    /**
     * Add a new element to 'headers'
     *
     * @param \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader $value
     */
    public function addHeaders(\SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader $value)
    {
        if ($this->headers === null) {
            $this->headers = new \Protobuf\MessageCollection();
        }

        $this->headers->add($value);
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
            'browser_handle' => null,
            'url' => null,
            'pageTitle' => null,
            'security_info' => null,
            'headers' => []
        ], $values);

        $message->setBrowserHandle($values['browser_handle']);
        $message->setUrl($values['url']);
        $message->setPageTitle($values['pageTitle']);
        $message->setSecurityInfo($values['security_info']);

        foreach ($values['headers'] as $item) {
            $message->addHeaders($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgFinishedRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'browser_handle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'pageTitle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'security_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.DOD.HTMLMessages.CHTMLPageSecurityInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'headers',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.DOD.HTMLMessages.CHTMLHeader'
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

        if ($this->browser_handle !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->browser_handle);
        }

        if ($this->url !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->url);
        }

        if ($this->pageTitle !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->pageTitle);
        }

        if ($this->security_info !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->security_info->serializedSize($sizeContext));
            $this->security_info->writeTo($context);
        }

        if ($this->headers !== null) {
            foreach ($this->headers as $val) {
                $writer->writeVarint($stream, 42);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->browser_handle = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->url = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->pageTitle = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLPageSecurityInfo();

                $this->security_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\DOD\HTMLMessages\CHTMLHeader();

                if ($this->headers === null) {
                    $this->headers = new \Protobuf\MessageCollection();
                }

                $this->headers->add($innerMessage);

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

        if ($this->browser_handle !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->browser_handle);
        }

        if ($this->url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->url);
        }

        if ($this->pageTitle !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->pageTitle);
        }

        if ($this->security_info !== null) {
            $innerSize = $this->security_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->headers !== null) {
            foreach ($this->headers as $val) {
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
        $this->browser_handle = null;
        $this->url = null;
        $this->pageTitle = null;
        $this->security_info = null;
        $this->headers = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\DOD\HTMLMessages\CMsgFinishedRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->browser_handle = ($message->browser_handle !== null) ? $message->browser_handle : $this->browser_handle;
        $this->url = ($message->url !== null) ? $message->url : $this->url;
        $this->pageTitle = ($message->pageTitle !== null) ? $message->pageTitle : $this->pageTitle;
        $this->security_info = ($message->security_info !== null) ? $message->security_info : $this->security_info;
        $this->headers = ($message->headers !== null) ? $message->headers : $this->headers;
    }


}

