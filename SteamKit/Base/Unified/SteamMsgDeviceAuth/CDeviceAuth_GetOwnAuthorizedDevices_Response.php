<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_deviceauth.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgDeviceAuth;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgDeviceAuth.CDeviceAuth_GetOwnAuthorizedDevices_Response
 */
class CDeviceAuth_GetOwnAuthorizedDevices_Response extends \Protobuf\AbstractMessage
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
     * devices repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device>
     */
    protected $devices = null;

    /**
     * Check if 'devices' has a value
     *
     * @return bool
     */
    public function hasDevicesList()
    {
        return $this->devices !== null;
    }

    /**
     * Get 'devices' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device>
     */
    public function getDevicesList()
    {
        return $this->devices;
    }

    /**
     * Set 'devices' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device> $value
     */
    public function setDevicesList(\Protobuf\Collection $value = null)
    {
        $this->devices = $value;
    }

    /**
     * Add a new element to 'devices'
     *
     * @param
     * \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device
     * $value
     */
    public function addDevices(\SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device $value)
    {
        if ($this->devices === null) {
            $this->devices = new \Protobuf\MessageCollection();
        }

        $this->devices->add($value);
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
            'devices' => []
        ], $values);

        foreach ($values['devices'] as $item) {
            $message->addDevices($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CDeviceAuth_GetOwnAuthorizedDevices_Response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'devices',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgDeviceAuth.CDeviceAuth_GetOwnAuthorizedDevices_Response.Device'
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

        if ($this->devices !== null) {
            foreach ($this->devices as $val) {
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
                $innerMessage = new \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response\Device();

                if ($this->devices === null) {
                    $this->devices = new \Protobuf\MessageCollection();
                }

                $this->devices->add($innerMessage);

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

        if ($this->devices !== null) {
            foreach ($this->devices as $val) {
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
        $this->devices = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetOwnAuthorizedDevices_Response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->devices = ($message->devices !== null) ? $message->devices : $this->devices;
    }


}

