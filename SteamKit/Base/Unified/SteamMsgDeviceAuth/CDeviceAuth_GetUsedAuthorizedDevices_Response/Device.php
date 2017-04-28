<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_deviceauth.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetUsedAuthorizedDevices_Response;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgDeviceAuth.CDeviceAuth_GetUsedAuthorizedDevices_Response.Device
 */
class Device extends \Protobuf\AbstractMessage
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
     * auth_device_token optional fixed64 = 1
     *
     * @var int
     */
    protected $auth_device_token = null;

    /**
     * device_name optional string = 2
     *
     * @var string
     */
    protected $device_name = null;

    /**
     * owner_steamid optional fixed64 = 3
     *
     * @var int
     */
    protected $owner_steamid = null;

    /**
     * last_time_used optional uint32 = 4
     *
     * @var int
     */
    protected $last_time_used = null;

    /**
     * last_app_played optional uint32 = 5
     *
     * @var int
     */
    protected $last_app_played = null;

    /**
     * Check if 'auth_device_token' has a value
     *
     * @return bool
     */
    public function hasAuthDeviceToken()
    {
        return $this->auth_device_token !== null;
    }

    /**
     * Get 'auth_device_token' value
     *
     * @return int
     */
    public function getAuthDeviceToken()
    {
        return $this->auth_device_token;
    }

    /**
     * Set 'auth_device_token' value
     *
     * @param int $value
     */
    public function setAuthDeviceToken($value = null)
    {
        $this->auth_device_token = $value;
    }

    /**
     * Check if 'device_name' has a value
     *
     * @return bool
     */
    public function hasDeviceName()
    {
        return $this->device_name !== null;
    }

    /**
     * Get 'device_name' value
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Set 'device_name' value
     *
     * @param string $value
     */
    public function setDeviceName($value = null)
    {
        $this->device_name = $value;
    }

    /**
     * Check if 'owner_steamid' has a value
     *
     * @return bool
     */
    public function hasOwnerSteamid()
    {
        return $this->owner_steamid !== null;
    }

    /**
     * Get 'owner_steamid' value
     *
     * @return int
     */
    public function getOwnerSteamid()
    {
        return $this->owner_steamid;
    }

    /**
     * Set 'owner_steamid' value
     *
     * @param int $value
     */
    public function setOwnerSteamid($value = null)
    {
        $this->owner_steamid = $value;
    }

    /**
     * Check if 'last_time_used' has a value
     *
     * @return bool
     */
    public function hasLastTimeUsed()
    {
        return $this->last_time_used !== null;
    }

    /**
     * Get 'last_time_used' value
     *
     * @return int
     */
    public function getLastTimeUsed()
    {
        return $this->last_time_used;
    }

    /**
     * Set 'last_time_used' value
     *
     * @param int $value
     */
    public function setLastTimeUsed($value = null)
    {
        $this->last_time_used = $value;
    }

    /**
     * Check if 'last_app_played' has a value
     *
     * @return bool
     */
    public function hasLastAppPlayed()
    {
        return $this->last_app_played !== null;
    }

    /**
     * Get 'last_app_played' value
     *
     * @return int
     */
    public function getLastAppPlayed()
    {
        return $this->last_app_played;
    }

    /**
     * Set 'last_app_played' value
     *
     * @param int $value
     */
    public function setLastAppPlayed($value = null)
    {
        $this->last_app_played = $value;
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
            'auth_device_token' => null,
            'device_name' => null,
            'owner_steamid' => null,
            'last_time_used' => null,
            'last_app_played' => null
        ], $values);

        $message->setAuthDeviceToken($values['auth_device_token']);
        $message->setDeviceName($values['device_name']);
        $message->setOwnerSteamid($values['owner_steamid']);
        $message->setLastTimeUsed($values['last_time_used']);
        $message->setLastAppPlayed($values['last_app_played']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Device',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'auth_device_token',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'device_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'owner_steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'last_time_used',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'last_app_played',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->auth_device_token !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->auth_device_token);
        }

        if ($this->device_name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->device_name);
        }

        if ($this->owner_steamid !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeFixed64($stream, $this->owner_steamid);
        }

        if ($this->last_time_used !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->last_time_used);
        }

        if ($this->last_app_played !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->last_app_played);
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

                $this->auth_device_token = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->device_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->owner_steamid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->last_time_used = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->last_app_played = $reader->readVarint($stream);

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

        if ($this->auth_device_token !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->device_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->device_name);
        }

        if ($this->owner_steamid !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->last_time_used !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_time_used);
        }

        if ($this->last_app_played !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_app_played);
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
        $this->auth_device_token = null;
        $this->device_name = null;
        $this->owner_steamid = null;
        $this->last_time_used = null;
        $this->last_app_played = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetUsedAuthorizedDevices_Response\Device) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->auth_device_token = ($message->auth_device_token !== null) ? $message->auth_device_token : $this->auth_device_token;
        $this->device_name = ($message->device_name !== null) ? $message->device_name : $this->device_name;
        $this->owner_steamid = ($message->owner_steamid !== null) ? $message->owner_steamid : $this->owner_steamid;
        $this->last_time_used = ($message->last_time_used !== null) ? $message->last_time_used : $this->last_time_used;
        $this->last_app_played = ($message->last_app_played !== null) ? $message->last_app_played : $this->last_app_played;
    }


}

