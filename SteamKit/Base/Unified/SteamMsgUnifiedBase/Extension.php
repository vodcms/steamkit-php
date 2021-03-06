<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_unified_base.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgUnifiedBase;

/**
 * Protobuf extension : SteamKit.Base.Unified.SteamMsgUnifiedBase.Extension
 */
class Extension implements \Protobuf\Extension
{

    /**
     * Extension field : description optional string = 50000
     *
     * @var \Protobuf\Extension
     */
    protected static $description = null;

    /**
     * Extension field : service_description optional string = 50000
     *
     * @var \Protobuf\Extension
     */
    protected static $service_description = null;

    /**
     * Extension field : service_execution_site optional enum = 50008
     *
     * @var \Protobuf\Extension
     */
    protected static $service_execution_site = null;

    /**
     * Extension field : method_description optional string = 50000
     *
     * @var \Protobuf\Extension
     */
    protected static $method_description = null;

    /**
     * Extension field : enum_description optional string = 50000
     *
     * @var \Protobuf\Extension
     */
    protected static $enum_description = null;

    /**
     * Extension field : enum_value_description optional string = 50000
     *
     * @var \Protobuf\Extension
     */
    protected static $enum_value_description = null;

    /**
     * Register all extensions
     *
     * @param \Protobuf\Extension\ExtensionRegistry
     */
    public static function registerAllExtensions(\Protobuf\Extension\ExtensionRegistry $registry)
    {
        $registry->add(self::description());
        $registry->add(self::serviceDescription());
        $registry->add(self::serviceExecutionSite());
        $registry->add(self::methodDescription());
        $registry->add(self::enumDescription());
        $registry->add(self::enumValueDescription());
    }

    /**
     * Extension field : description
     *
     * @return \Protobuf\Extension
     */
    public static function description()
    {
        if (self::$description !== null) {
            return self::$description;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 9);

            $value = $reader->readString($stream);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400002);
            $writer->writeString($stream, $value);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeStringSize($value);

            return $size;
        };

        return self::$description = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\FieldOptions', 'description', 50000, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * Extension field : service_description
     *
     * @return \Protobuf\Extension
     */
    public static function serviceDescription()
    {
        if (self::$service_description !== null) {
            return self::$service_description;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 9);

            $value = $reader->readString($stream);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400002);
            $writer->writeString($stream, $value);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeStringSize($value);

            return $size;
        };

        return self::$service_description = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\ServiceOptions', 'service_description', 50000, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * Extension field : service_execution_site
     *
     * @return \Protobuf\Extension
     */
    public static function serviceExecutionSite()
    {
        if (self::$service_execution_site !== null) {
            return self::$service_execution_site;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 14);

            $value = \SteamKit\Base\Unified\SteamMsgUnifiedBase\EProtoExecutionSite::valueOf($reader->readVarint($stream));

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400064);
            $writer->writeVarint($stream, $value->value());
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeVarintSize($value->value());

            return $size;
        };

        return self::$service_execution_site = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\ServiceOptions', 'service_execution_site', 50008, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * Extension field : method_description
     *
     * @return \Protobuf\Extension
     */
    public static function methodDescription()
    {
        if (self::$method_description !== null) {
            return self::$method_description;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 9);

            $value = $reader->readString($stream);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400002);
            $writer->writeString($stream, $value);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeStringSize($value);

            return $size;
        };

        return self::$method_description = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\MethodOptions', 'method_description', 50000, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * Extension field : enum_description
     *
     * @return \Protobuf\Extension
     */
    public static function enumDescription()
    {
        if (self::$enum_description !== null) {
            return self::$enum_description;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 9);

            $value = $reader->readString($stream);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400002);
            $writer->writeString($stream, $value);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeStringSize($value);

            return $size;
        };

        return self::$enum_description = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\EnumOptions', 'enum_description', 50000, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }

    /**
     * Extension field : enum_value_description
     *
     * @return \Protobuf\Extension
     */
    public static function enumValueDescription()
    {
        if (self::$enum_value_description !== null) {
            return self::$enum_value_description;
        }

        $readCallback = function (\Protobuf\ReadContext $context, $wire) {
            $reader = $context->getReader();
            $length = $context->getLength();
            $stream = $context->getStream();

            \Protobuf\WireFormat::assertWireType($wire, 9);

            $value = $reader->readString($stream);

            return $value;
        };

        $writeCallback = function (\Protobuf\WriteContext $context, $value) {
            $stream      = $context->getStream();
            $writer      = $context->getWriter();
            $sizeContext = $context->getComputeSizeContext();

            $writer->writeVarint($stream, 400002);
            $writer->writeString($stream, $value);
        };

        $sizeCallback = function (\Protobuf\ComputeSizeContext $context, $value) {
            $calculator = $context->getSizeCalculator();
            $size       = 0;

            $size += 3;
            $size += $calculator->computeStringSize($value);

            return $size;
        };

        return self::$enum_value_description = new \Protobuf\Extension\ExtensionField('\\google\\protobuf\\EnumValueOptions', 'enum_value_description', 50000, $readCallback, $writeCallback, $sizeCallback, __METHOD__);
    }


}

