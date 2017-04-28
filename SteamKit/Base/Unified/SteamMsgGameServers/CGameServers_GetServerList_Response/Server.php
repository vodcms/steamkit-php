<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_gameservers.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgGameServers\CGameServers_GetServerList_Response;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgGameServers.CGameServers_GetServerList_Response.Server
 */
class Server extends \Protobuf\AbstractMessage
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
     * addr optional string = 1
     *
     * @var string
     */
    protected $addr = null;

    /**
     * gameport optional uint32 = 2
     *
     * @var int
     */
    protected $gameport = null;

    /**
     * specport optional uint32 = 3
     *
     * @var int
     */
    protected $specport = null;

    /**
     * steamid optional fixed64 = 4
     *
     * @var int
     */
    protected $steamid = null;

    /**
     * name optional string = 5
     *
     * @var string
     */
    protected $name = null;

    /**
     * appid optional uint32 = 6
     *
     * @var int
     */
    protected $appid = null;

    /**
     * gamedir optional string = 7
     *
     * @var string
     */
    protected $gamedir = null;

    /**
     * version optional string = 8
     *
     * @var string
     */
    protected $version = null;

    /**
     * product optional string = 9
     *
     * @var string
     */
    protected $product = null;

    /**
     * region optional int32 = 10
     *
     * @var int
     */
    protected $region = null;

    /**
     * players optional int32 = 11
     *
     * @var int
     */
    protected $players = null;

    /**
     * max_players optional int32 = 12
     *
     * @var int
     */
    protected $max_players = null;

    /**
     * bots optional int32 = 13
     *
     * @var int
     */
    protected $bots = null;

    /**
     * map optional string = 14
     *
     * @var string
     */
    protected $map = null;

    /**
     * secure optional bool = 15
     *
     * @var bool
     */
    protected $secure = null;

    /**
     * dedicated optional bool = 16
     *
     * @var bool
     */
    protected $dedicated = null;

    /**
     * os optional string = 17
     *
     * @var string
     */
    protected $os = null;

    /**
     * gametype optional string = 18
     *
     * @var string
     */
    protected $gametype = null;

    /**
     * Check if 'addr' has a value
     *
     * @return bool
     */
    public function hasAddr()
    {
        return $this->addr !== null;
    }

    /**
     * Get 'addr' value
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Set 'addr' value
     *
     * @param string $value
     */
    public function setAddr($value = null)
    {
        $this->addr = $value;
    }

    /**
     * Check if 'gameport' has a value
     *
     * @return bool
     */
    public function hasGameport()
    {
        return $this->gameport !== null;
    }

    /**
     * Get 'gameport' value
     *
     * @return int
     */
    public function getGameport()
    {
        return $this->gameport;
    }

    /**
     * Set 'gameport' value
     *
     * @param int $value
     */
    public function setGameport($value = null)
    {
        $this->gameport = $value;
    }

    /**
     * Check if 'specport' has a value
     *
     * @return bool
     */
    public function hasSpecport()
    {
        return $this->specport !== null;
    }

    /**
     * Get 'specport' value
     *
     * @return int
     */
    public function getSpecport()
    {
        return $this->specport;
    }

    /**
     * Set 'specport' value
     *
     * @param int $value
     */
    public function setSpecport($value = null)
    {
        $this->specport = $value;
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
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
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
     * Check if 'gamedir' has a value
     *
     * @return bool
     */
    public function hasGamedir()
    {
        return $this->gamedir !== null;
    }

    /**
     * Get 'gamedir' value
     *
     * @return string
     */
    public function getGamedir()
    {
        return $this->gamedir;
    }

    /**
     * Set 'gamedir' value
     *
     * @param string $value
     */
    public function setGamedir($value = null)
    {
        $this->gamedir = $value;
    }

    /**
     * Check if 'version' has a value
     *
     * @return bool
     */
    public function hasVersion()
    {
        return $this->version !== null;
    }

    /**
     * Get 'version' value
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set 'version' value
     *
     * @param string $value
     */
    public function setVersion($value = null)
    {
        $this->version = $value;
    }

    /**
     * Check if 'product' has a value
     *
     * @return bool
     */
    public function hasProduct()
    {
        return $this->product !== null;
    }

    /**
     * Get 'product' value
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set 'product' value
     *
     * @param string $value
     */
    public function setProduct($value = null)
    {
        $this->product = $value;
    }

    /**
     * Check if 'region' has a value
     *
     * @return bool
     */
    public function hasRegion()
    {
        return $this->region !== null;
    }

    /**
     * Get 'region' value
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set 'region' value
     *
     * @param int $value
     */
    public function setRegion($value = null)
    {
        $this->region = $value;
    }

    /**
     * Check if 'players' has a value
     *
     * @return bool
     */
    public function hasPlayers()
    {
        return $this->players !== null;
    }

    /**
     * Get 'players' value
     *
     * @return int
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set 'players' value
     *
     * @param int $value
     */
    public function setPlayers($value = null)
    {
        $this->players = $value;
    }

    /**
     * Check if 'max_players' has a value
     *
     * @return bool
     */
    public function hasMaxPlayers()
    {
        return $this->max_players !== null;
    }

    /**
     * Get 'max_players' value
     *
     * @return int
     */
    public function getMaxPlayers()
    {
        return $this->max_players;
    }

    /**
     * Set 'max_players' value
     *
     * @param int $value
     */
    public function setMaxPlayers($value = null)
    {
        $this->max_players = $value;
    }

    /**
     * Check if 'bots' has a value
     *
     * @return bool
     */
    public function hasBots()
    {
        return $this->bots !== null;
    }

    /**
     * Get 'bots' value
     *
     * @return int
     */
    public function getBots()
    {
        return $this->bots;
    }

    /**
     * Set 'bots' value
     *
     * @param int $value
     */
    public function setBots($value = null)
    {
        $this->bots = $value;
    }

    /**
     * Check if 'map' has a value
     *
     * @return bool
     */
    public function hasMap()
    {
        return $this->map !== null;
    }

    /**
     * Get 'map' value
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set 'map' value
     *
     * @param string $value
     */
    public function setMap($value = null)
    {
        $this->map = $value;
    }

    /**
     * Check if 'secure' has a value
     *
     * @return bool
     */
    public function hasSecure()
    {
        return $this->secure !== null;
    }

    /**
     * Get 'secure' value
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Set 'secure' value
     *
     * @param bool $value
     */
    public function setSecure($value = null)
    {
        $this->secure = $value;
    }

    /**
     * Check if 'dedicated' has a value
     *
     * @return bool
     */
    public function hasDedicated()
    {
        return $this->dedicated !== null;
    }

    /**
     * Get 'dedicated' value
     *
     * @return bool
     */
    public function getDedicated()
    {
        return $this->dedicated;
    }

    /**
     * Set 'dedicated' value
     *
     * @param bool $value
     */
    public function setDedicated($value = null)
    {
        $this->dedicated = $value;
    }

    /**
     * Check if 'os' has a value
     *
     * @return bool
     */
    public function hasOs()
    {
        return $this->os !== null;
    }

    /**
     * Get 'os' value
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set 'os' value
     *
     * @param string $value
     */
    public function setOs($value = null)
    {
        $this->os = $value;
    }

    /**
     * Check if 'gametype' has a value
     *
     * @return bool
     */
    public function hasGametype()
    {
        return $this->gametype !== null;
    }

    /**
     * Get 'gametype' value
     *
     * @return string
     */
    public function getGametype()
    {
        return $this->gametype;
    }

    /**
     * Set 'gametype' value
     *
     * @param string $value
     */
    public function setGametype($value = null)
    {
        $this->gametype = $value;
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
            'addr' => null,
            'gameport' => null,
            'specport' => null,
            'steamid' => null,
            'name' => null,
            'appid' => null,
            'gamedir' => null,
            'version' => null,
            'product' => null,
            'region' => null,
            'players' => null,
            'max_players' => null,
            'bots' => null,
            'map' => null,
            'secure' => null,
            'dedicated' => null,
            'os' => null,
            'gametype' => null
        ], $values);

        $message->setAddr($values['addr']);
        $message->setGameport($values['gameport']);
        $message->setSpecport($values['specport']);
        $message->setSteamid($values['steamid']);
        $message->setName($values['name']);
        $message->setAppid($values['appid']);
        $message->setGamedir($values['gamedir']);
        $message->setVersion($values['version']);
        $message->setProduct($values['product']);
        $message->setRegion($values['region']);
        $message->setPlayers($values['players']);
        $message->setMaxPlayers($values['max_players']);
        $message->setBots($values['bots']);
        $message->setMap($values['map']);
        $message->setSecure($values['secure']);
        $message->setDedicated($values['dedicated']);
        $message->setOs($values['os']);
        $message->setGametype($values['gametype']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Server',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'addr',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gameport',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'specport',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'gamedir',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'product',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'region',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'players',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'max_players',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'bots',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'map',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'secure',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'dedicated',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'os',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'gametype',
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

        if ($this->addr !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->addr);
        }

        if ($this->gameport !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->gameport);
        }

        if ($this->specport !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->specport);
        }

        if ($this->steamid !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->steamid);
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->name);
        }

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->gamedir !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->gamedir);
        }

        if ($this->version !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->version);
        }

        if ($this->product !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->product);
        }

        if ($this->region !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->region);
        }

        if ($this->players !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->players);
        }

        if ($this->max_players !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeVarint($stream, $this->max_players);
        }

        if ($this->bots !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeVarint($stream, $this->bots);
        }

        if ($this->map !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeString($stream, $this->map);
        }

        if ($this->secure !== null) {
            $writer->writeVarint($stream, 120);
            $writer->writeBool($stream, $this->secure);
        }

        if ($this->dedicated !== null) {
            $writer->writeVarint($stream, 128);
            $writer->writeBool($stream, $this->dedicated);
        }

        if ($this->os !== null) {
            $writer->writeVarint($stream, 138);
            $writer->writeString($stream, $this->os);
        }

        if ($this->gametype !== null) {
            $writer->writeVarint($stream, 146);
            $writer->writeString($stream, $this->gametype);
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

                $this->addr = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->gameport = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->specport = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->gamedir = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->version = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->product = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->region = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->players = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->max_players = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bots = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->map = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->secure = $reader->readBool($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->dedicated = $reader->readBool($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->os = $reader->readString($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->gametype = $reader->readString($stream);

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

        if ($this->addr !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->addr);
        }

        if ($this->gameport !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gameport);
        }

        if ($this->specport !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->specport);
        }

        if ($this->steamid !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->gamedir !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->gamedir);
        }

        if ($this->version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->version);
        }

        if ($this->product !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->product);
        }

        if ($this->region !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->region);
        }

        if ($this->players !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->players);
        }

        if ($this->max_players !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_players);
        }

        if ($this->bots !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bots);
        }

        if ($this->map !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->map);
        }

        if ($this->secure !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->dedicated !== null) {
            $size += 2;
            $size += 1;
        }

        if ($this->os !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->os);
        }

        if ($this->gametype !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->gametype);
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
        $this->addr = null;
        $this->gameport = null;
        $this->specport = null;
        $this->steamid = null;
        $this->name = null;
        $this->appid = null;
        $this->gamedir = null;
        $this->version = null;
        $this->product = null;
        $this->region = null;
        $this->players = null;
        $this->max_players = null;
        $this->bots = null;
        $this->map = null;
        $this->secure = null;
        $this->dedicated = null;
        $this->os = null;
        $this->gametype = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgGameServers\CGameServers_GetServerList_Response\Server) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->addr = ($message->addr !== null) ? $message->addr : $this->addr;
        $this->gameport = ($message->gameport !== null) ? $message->gameport : $this->gameport;
        $this->specport = ($message->specport !== null) ? $message->specport : $this->specport;
        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->gamedir = ($message->gamedir !== null) ? $message->gamedir : $this->gamedir;
        $this->version = ($message->version !== null) ? $message->version : $this->version;
        $this->product = ($message->product !== null) ? $message->product : $this->product;
        $this->region = ($message->region !== null) ? $message->region : $this->region;
        $this->players = ($message->players !== null) ? $message->players : $this->players;
        $this->max_players = ($message->max_players !== null) ? $message->max_players : $this->max_players;
        $this->bots = ($message->bots !== null) ? $message->bots : $this->bots;
        $this->map = ($message->map !== null) ? $message->map : $this->map;
        $this->secure = ($message->secure !== null) ? $message->secure : $this->secure;
        $this->dedicated = ($message->dedicated !== null) ? $message->dedicated : $this->dedicated;
        $this->os = ($message->os !== null) ? $message->os : $this->os;
        $this->gametype = ($message->gametype !== null) ? $message->gametype : $this->gametype;
    }


}
